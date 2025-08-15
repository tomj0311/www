<?php
// Quick SMTP connectivity/auth test using current config/env
require_once __DIR__ . '/config.php';
// Composer autoload (installed earlier)
$autoloads = [__DIR__ . '/vendor/autoload.php', __DIR__ . '/includes/vendor/autoload.php'];
foreach ($autoloads as $a) { if (file_exists($a)) { require_once $a; break; } }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function envOrConst($name, $default = '') {
    $env = getenv($name);
    if ($env !== false && $env !== '') return $env;
    return defined($name) ? constant($name) : $default;
}

$host = envOrConst('SMTP_HOST', 'smtp.gmail.com');
$user = envOrConst('SMTP_USERNAME', '');
$pass = envOrConst('SMTP_PASSWORD', '');
$debug = isset($_GET['debug']) ? (int)$_GET['debug'] : 2;

$attempts = [
    ['secure' => 'tls', 'port' => 587],
    ['secure' => 'ssl', 'port' => 465],
];

$result = [
    'host' => $host,
    'username_set' => $user !== '',
    'password_set' => $pass !== '',
    'attempts' => [],
];

foreach ($attempts as $a) {
    $entry = ['secure' => $a['secure'], 'port' => $a['port'], 'connected' => false, 'authed' => false, 'error' => ''];
    try {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = $debug; // verbose
        $mail->Debugoutput = function($str, $level) use (&$entry) { $entry['error'] .= $str."\n"; };
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->Port = (int)$a['port'];
        $mail->SMTPAuth = true;
        $mail->Username = $user;
        $mail->Password = $pass;
        if ($a['secure'] === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }
        // Attempt connect
        if (!$mail->smtpConnect()) {
            throw new Exception('smtpConnect() failed');
        }
        $entry['connected'] = true;
        // Try AUTH (login)
        if (!$mail->SMTPAuth || $mail->smtp->authenticate($mail->Username, $mail->Password)) {
            $entry['authed'] = true;
        } else {
            $entry['error'] .= "AUTH failed\n";
        }
        $mail->smtpClose();
    } catch (Throwable $e) {
        $entry['error'] .= $e->getMessage();
    }
    $result['attempts'][] = $entry;
}

header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT);
