<?php
// Test file to verify PHPMailer is available on the server
require_once __DIR__ . '/vendor/autoload.php';

echo "<h2>PHPMailer Availability Test</h2>";

if (class_exists('PHPMailer\\PHPMailer\\PHPMailer')) {
    echo "✅ <strong>PHPMailer is available!</strong><br>";
    echo "Version: " . PHPMailer\PHPMailer\PHPMailer::VERSION . "<br>";
    echo "Location: " . dirname((new ReflectionClass('PHPMailer\\PHPMailer\\PHPMailer'))->getFileName()) . "<br>";
    
    // Test SMTP configuration
    echo "<br><h3>SMTP Configuration Test</h3>";
    if (defined('SMTP_HOST')) {
        echo "SMTP Host: " . SMTP_HOST . "<br>";
        echo "SMTP Port: " . SMTP_PORT . "<br>";
        echo "SMTP Secure: " . SMTP_SECURE . "<br>";
        echo "SMTP Username: " . SMTP_USERNAME . "<br>";
        echo "Mail Transport: " . MAIL_TRANSPORT . "<br>";
    } else {
        echo "❌ SMTP configuration not found. Include config.php<br>";
    }
} else {
    echo "❌ <strong>PHPMailer not found!</strong><br>";
    echo "The vendor directory may not be uploaded to the server.<br>";
    
    // Check if autoloader exists
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        echo "✅ Autoloader file exists<br>";
    } else {
        echo "❌ Autoloader file missing<br>";
    }
    
    // Check if PHPMailer directory exists
    if (is_dir(__DIR__ . '/vendor/phpmailer')) {
        echo "✅ PHPMailer directory exists<br>";
    } else {
        echo "❌ PHPMailer directory missing<br>";
    }
}

echo "<br><h3>File System Check</h3>";
echo "Current directory: " . __DIR__ . "<br>";
echo "Vendor directory exists: " . (is_dir(__DIR__ . '/vendor') ? 'Yes' : 'No') . "<br>";

if (is_dir(__DIR__ . '/vendor')) {
    echo "Vendor contents:<br>";
    $files = scandir(__DIR__ . '/vendor');
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo "- $file<br>";
        }
    }
}
?>
