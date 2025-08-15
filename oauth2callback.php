<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/google_gmail.php';

if (!gmail_credentials_loaded()) {
    http_response_code(500);
    echo 'Client secret missing. Place your JSON at includes/credentials/client_secret.json';
    exit;
}

if (!isset($_GET['code'])) {
    http_response_code(400);
    echo 'Missing code parameter';
    exit;
}

$res = gmail_exchange_code_for_token($_GET['code']);
if (isset($res['access_token'])) {
    echo '<h3>Gmail connected successfully.</h3>';
    echo '<p>You can now close this window and submit the contact form.</p>';
} else {
    echo '<h3>Failed to connect Gmail.</h3>';
    echo '<pre>' . htmlspecialchars(json_encode($res, JSON_PRETTY_PRINT)) . '</pre>';
}
