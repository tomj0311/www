<?php
set_time_limit(30);
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$user = getenv('SMTP_USERNAME') ?: 'hub8ai@gmail.com';
$pass = getenv('SMTP_PASSWORD') ?: '';

echo "Testing Gmail SMTP with:\n";
echo "Username: $user\n";
echo "Password: " . ($pass ? str_repeat('*', strlen($pass)) : 'NOT SET') . "\n\n";

$mail = new PHPMailer(true);
$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $user;
$mail->Password = $pass;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// Relax SSL in case of local issues
$mail->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
];

try {
    $mail->setFrom($user, 'Test');
    $mail->addAddress('contact@hub8.ai');
    $mail->Subject = 'SMTP Test';
    $mail->Body = 'This is a test email from PHP.';
    
    echo "\n=== SENDING EMAIL ===\n";
    $mail->send();
    echo "\nSUCCESS: Email sent!\n";
} catch (Exception $e) {
    echo "\nFAILED: " . $mail->ErrorInfo . "\n";
    echo "Exception: " . $e->getMessage() . "\n";
}
