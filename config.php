<?php
// Database Configuration for Hostinger
// Update these values with your actual Hostinger database credentials

define('DB_HOST', 'localhost'); // Usually localhost on Hostinger
define('DB_NAME', 'your_database_name'); // Your database name from Hostinger cPanel
define('DB_USER', 'your_username'); // Your database username
define('DB_PASS', 'your_password'); // Your database password
define('DB_CHARSET', 'utf8mb4');

// Site Configuration
define('SITE_URL', 'https://youractualdomainhere.com'); // Replace with your actual domain
define('SITE_NAME', 'Hub8.ai');
define('ADMIN_EMAIL', 'admin@youractualdomainhere.com'); // Replace with your email

// Security Settings
define('SECURE_KEY', 'your-random-secure-key-here-change-this'); // Generate a random key

// Error Reporting (set to false in production)
define('DEBUG_MODE', true);

// Google Analytics
// IMPORTANT: Replace 'G-XXXXXXXXXX' with your actual Google Analytics 4 Measurement ID
// To get your GA4 ID:
// 1. Go to https://analytics.google.com/
// 2. Create a GA4 property for your website
// 3. Copy the Measurement ID (starts with G-)
// 4. Replace the placeholder below
define('GA_MEASUREMENT_ID', 'G-3BYC9QXYLL'); // Your actual GA4 Measurement ID

// Microsoft Clarity
// IMPORTANT: Replace 'XXXXXXXXXX' with your actual Microsoft Clarity Project ID
// To get your Clarity Project ID:
// 1. Go to https://clarity.microsoft.com/
// 2. Create a new project for your website
// 3. Copy the Project ID (10-character alphanumeric string)
// 4. Replace the placeholder below
define('CLARITY_PROJECT_ID', 'svlb54gxdq'); // Your actual Clarity Project ID

// Email Configuration (for contact forms)
// Receiver for contact form
define('CONTACT_RECEIVER', 'contact@hub8.ai');
// Mail transport: 'gmail' (OAuth2) or 'phpmail' (uses PHP mail())
define('MAIL_TRANSPORT', 'smtp');
// Default From address used by non-Gmail transports
define('MAIL_FROM', 'hub8ai@gmail.com');
define('MAIL_FROM_NAME', 'Hub8.ai');

// SMTP configuration (used when MAIL_TRANSPORT === 'smtp')
// For Gmail SMTP:
// - Enable 2-Step Verification on the Gmail account
// - Create an App Password (16 characters)
// - Use smtp.gmail.com, TLS, port 587
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls'); // 'tls' or 'ssl'
define('SMTP_USERNAME', 'hub8ai@gmail.com'); // your Gmail address
define('SMTP_PASSWORD', 'xxgllttwidprkzoh'); // App Password
define('SMTP_AUTH', true);

// Gmail OAuth2 configuration
// Important: Do NOT commit real secrets. This code expects a JSON
// client secret file to be placed at includes/credentials/client_secret.json
// and stores tokens at includes/credentials/token.json
define('GMAIL_CLIENT_SECRET_PATH', __DIR__ . '/includes/credentials/client_secret.json');
define('GMAIL_TOKEN_PATH', __DIR__ . '/includes/credentials/token.json');
define('GMAIL_SENDER', 'hub8ai@gmail.com');
define('GMAIL_OAUTH_REDIRECT', SITE_URL . '/oauth2callback.php');

// Database Connection Function
function getDatabaseConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        if (DEBUG_MODE) {
            die("Database connection failed: " . $e->getMessage());
        } else {
            die("Database connection failed. Please try again later.");
        }
    }
}

// Error Handling
if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/logs/error.log');
}

// Timezone
date_default_timezone_set('UTC');
?>
