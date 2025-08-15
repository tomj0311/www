<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/google_gmail.php';

// Try to load Composer autoloader for PHPMailer (if installed)
foreach ([__DIR__ . '/../vendor/autoload.php', __DIR__ . '/vendor/autoload.php'] as $autoload) {
    if (file_exists($autoload)) {
        require_once $autoload;
        break;
    }
}

// send_email is a transport-agnostic helper: routes to gmail_send() or php_mail_send()
function send_email(string $to, string $subject, string $plain, string $html = '', array $opts = []) {
    $transport = defined('MAIL_TRANSPORT') ? MAIL_TRANSPORT : 'gmail';
    if ($transport === 'gmail') {
        return gmail_send($to, $subject, $plain, $html, $opts);
    }
    if ($transport === 'smtp') {
        return smtp_mail_send($to, $subject, $plain, $html, $opts);
    }
    return php_mail_send($to, $subject, $plain, $html, $opts);
}

function php_mail_send(string $to, string $subject, string $plain, string $html = '', array $opts = []) {
    $from = $opts['from'] ?? (defined('MAIL_FROM') ? MAIL_FROM : 'no-reply@localhost');
    $fromName = $opts['from_name'] ?? (defined('MAIL_FROM_NAME') ? MAIL_FROM_NAME : 'Website');
    $replyTo = $opts['reply_to'] ?? null;

    $headers = [];
    $headers[] = 'From: ' . format_address($from, $fromName);
    if ($replyTo) $headers[] = 'Reply-To: ' . format_address($replyTo, $fromName);
    $headers[] = 'MIME-Version: 1.0';

    if ($html) {
        $boundary = '=_b_' . bin2hex(random_bytes(12));
        $headers[] = 'Content-Type: multipart/alternative; boundary="' . $boundary . '"';
        $body = "--$boundary\r\n" .
            "Content-Type: text/plain; charset=UTF-8\r\n\r\n" . $plain . "\r\n" .
            "--$boundary\r\n" .
            "Content-Type: text/html; charset=UTF-8\r\n\r\n" . $html . "\r\n" .
            "--$boundary--";
    } else {
        $headers[] = 'Content-Type: text/plain; charset=UTF-8';
        $body = $plain;
    }

    // Use native mail() — requires server to be configured with SMTP/Sendmail
    $ok = @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));
    return $ok ? true : 'Failed to send mail()';
}

function smtp_mail_send(string $to, string $subject, string $plain, string $html = '', array $opts = []) {
    // Use PHPMailer if available
    if (class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
        $from = $opts['from'] ?? (defined('MAIL_FROM') ? MAIL_FROM : (defined('SMTP_USERNAME') ? SMTP_USERNAME : 'no-reply@localhost'));
        $fromName = $opts['from_name'] ?? (defined('MAIL_FROM_NAME') ? MAIL_FROM_NAME : 'Website');
        $replyTo = $opts['reply_to'] ?? null;

        $configuredHost = defined('SMTP_HOST') ? SMTP_HOST : 'smtp.gmail.com';
        // Force IPv4 if possible to avoid IPv6 issues on some networks
        $resolvedHost = function_exists('gethostbyname') ? gethostbyname($configuredHost) : $configuredHost;
        $hostToUse = $resolvedHost && $resolvedHost !== $configuredHost ? $resolvedHost : $configuredHost;

        $configuredPort = defined('SMTP_PORT') ? SMTP_PORT : 587;
        $configuredSecure = defined('SMTP_SECURE') ? SMTP_SECURE : 'tls';

        // Build attempt matrix: first use configured settings, then try SMTPS:465 if initial fails (common on Windows firewalls)
        $attempts = [];
        $attempts[] = [ 'secure' => $configuredSecure, 'port' => (int)$configuredPort ];
        if (!($configuredSecure === 'ssl' && (int)$configuredPort === 465)) {
            $attempts[] = [ 'secure' => 'ssl', 'port' => 465 ];
        }

        $lastError = '';
        foreach ($attempts as $a) {
            try {
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = $hostToUse;
                $mail->Port = (int)$a['port'];
                if ($a['secure'] === 'ssl') {
                    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
                } else {
                    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                }
                $mail->SMTPAuth = defined('SMTP_AUTH') ? SMTP_AUTH : true;
                $mail->Username = getenv('SMTP_USERNAME') ?: (defined('SMTP_USERNAME') ? SMTP_USERNAME : '');
                $mail->Password = getenv('SMTP_PASSWORD') ?: (defined('SMTP_PASSWORD') ? SMTP_PASSWORD : '');

                // In debug/local dev, optionally relax SSL checks to get past local proxies; do NOT enable in production
                if (defined('DEBUG_MODE') && DEBUG_MODE) {
                    $mail->SMTPOptions = [
                        'ssl' => [
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true,
                        ],
                    ];
                }

                $mail->setFrom($from, $fromName);
                if ($replyTo) $mail->addReplyTo($replyTo, $fromName);
                $mail->addAddress($to);
                $mail->Subject = $subject;
                if ($html) {
                    $mail->isHTML(true);
                    $mail->Body = $html;
                    $mail->AltBody = $plain;
                } else {
                    $mail->isHTML(false);
                    $mail->Body = $plain;
                }
                $mail->CharSet = 'UTF-8';
                $mail->send();
                return true;
            } catch (Throwable $e) {
                $lastError = $e->getMessage();
                // try next attempt
            }
        }
        return 'SMTP send failed: ' . $lastError;
    }
    // No PHPMailer found
    if (!empty($opts['force_mail'])) {
        return php_mail_send($to, $subject, $plain, $html, $opts);
    }
    return 'SMTP transport requires PHPMailer. Install via Composer: composer require phpmailer/phpmailer';
}

// Reuse helpers from google_gmail.php for header formatting
if (!function_exists('format_address')) {
    function format_address(string $email, string $name = null): string {
        if ($name) {
            return sprintf('"%s" <%s>', addcslashes($name, '"'), $email);
        }
        return $email;
    }
}
?>
