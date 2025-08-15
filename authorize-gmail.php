<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/google_gmail.php';

if (!gmail_credentials_loaded()) {
    http_response_code(500);
    echo 'Client secret missing. Place your JSON at includes/credentials/client_secret.json';
    exit;
}

$url = gmail_build_auth_url();
if (!$url) {
    http_response_code(500);
    echo 'Failed to build auth URL';
    exit;
}

header('Location: ' . $url);
exit;
?>
