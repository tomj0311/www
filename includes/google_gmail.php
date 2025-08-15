<?php
// Minimal Gmail API helper using Google API PHP Client
// Dependencies: none bundled here; uses raw HTTP requests to Gmail send endpoint with OAuth2 tokens

// Storage: uses files defined in config.php for client secret and token

if (!defined('GMAIL_CLIENT_SECRET_PATH')) {
    require_once __DIR__ . '/../config.php';
}

function gmail_credentials_loaded(): bool {
    return is_file(GMAIL_CLIENT_SECRET_PATH);
}

function gmail_is_authorized(): bool {
    return is_file(GMAIL_TOKEN_PATH);
}

function gmail_get_client_credentials(): ?array {
    if (!gmail_credentials_loaded()) return null;
    $json = file_get_contents(GMAIL_CLIENT_SECRET_PATH);
    $data = json_decode($json, true);
    if (!is_array($data)) return null;
    // Support both installed and web formats
    $client = $data['web'] ?? $data['installed'] ?? null;
    return $client;
}

function gmail_get_token(): ?array {
    if (!gmail_is_authorized()) return null;
    $json = file_get_contents(GMAIL_TOKEN_PATH);
    $data = json_decode($json, true);
    return is_array($data) ? $data : null;
}

function gmail_save_token(array $token): bool {
    $dir = dirname(GMAIL_TOKEN_PATH);
    if (!is_dir($dir)) {
        @mkdir($dir, 0700, true);
    }
    // Attach created timestamp if not present
    if (!isset($token['created'])) {
        $token['created'] = time();
    }
    return (bool)file_put_contents(GMAIL_TOKEN_PATH, json_encode($token, JSON_PRETTY_PRINT));
}

function gmail_build_auth_url(): ?string {
    $c = gmail_get_client_credentials();
    if (!$c) return null;
    $redirect = gmail_get_redirect_uri();
    $params = [
        'response_type' => 'code',
        'access_type' => 'offline',
        'prompt' => 'consent',
        'client_id' => $c['client_id'] ?? '',
        'redirect_uri' => $redirect,
        'scope' => implode(' ', [
            'https://www.googleapis.com/auth/gmail.send',
            'openid',
            'email',
            'profile',
        ]),
    ];
    return ($c['auth_uri'] ?? 'https://accounts.google.com/o/oauth2/auth') . '?' . http_build_query($params);
}

function gmail_exchange_code_for_token(string $code): array {
    $c = gmail_get_client_credentials();
    if (!$c) return ['error' => 'Missing client credentials'];
    $redirect = gmail_get_redirect_uri();
    $post = [
        'code' => $code,
        'client_id' => $c['client_id'] ?? '',
        'client_secret' => $c['client_secret'] ?? '',
        'redirect_uri' => $redirect,
        'grant_type' => 'authorization_code',
    ];
    $resp = gmail_http_post_json($c['token_uri'] ?? 'https://oauth2.googleapis.com/token', $post);
    if (isset($resp['access_token'])) {
        gmail_save_token($resp);
    }
    return $resp;
}

function gmail_get_redirect_uri(): string {
    // Prefer configured constant if it looks valid
    $configured = defined('GMAIL_OAUTH_REDIRECT') ? GMAIL_OAUTH_REDIRECT : '';
    if ($configured && strpos($configured, 'youractualdomainhere.com') === false) {
        return $configured;
    }
    // Build from current request for local dev
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
    $base = $scheme . '://' . $host;
    return $base . '/oauth2callback.php';
}

function gmail_refresh_access_token(array $token): array {
    $c = gmail_get_client_credentials();
    if (!$c) return ['error' => 'Missing client credentials'];
    if (empty($token['refresh_token'])) return ['error' => 'Missing refresh token'];
    $post = [
        'client_id' => $c['client_id'] ?? '',
        'client_secret' => $c['client_secret'] ?? '',
        'refresh_token' => $token['refresh_token'],
        'grant_type' => 'refresh_token',
    ];
    $resp = gmail_http_post_json($c['token_uri'] ?? 'https://oauth2.googleapis.com/token', $post);
    if (isset($resp['access_token'])) {
        // Preserve refresh_token if not returned
        if (empty($resp['refresh_token']) && !empty($token['refresh_token'])) {
            $resp['refresh_token'] = $token['refresh_token'];
        }
        gmail_save_token($resp);
    }
    return $resp;
}

function gmail_get_valid_access_token(): array {
    $token = gmail_get_token();
    if (!$token) return ['error' => 'Not authorized'];
    $now = time();
    $obtained = isset($token['created']) ? (int)$token['created'] : ($now - 999999);
    $expires_in = isset($token['expires_in']) ? (int)$token['expires_in'] : 0;
    if ($expires_in && ($obtained + $expires_in - 60) > $now && !empty($token['access_token'])) {
        return $token;
    }
    $refreshed = gmail_refresh_access_token($token);
    return $refreshed;
}

function gmail_send(string $to, string $subject, string $textBody, string $htmlBody = '', array $opts = []) {
    if (!gmail_is_authorized()) {
        return 'Email not authorized yet. Please connect Gmail.';
    }
    $token = gmail_get_valid_access_token();
    if (isset($token['error'])) {
        return 'Auth error: ' . (is_array($token['error']) ? json_encode($token['error']) : $token['error']);
    }
    $accessToken = $token['access_token'] ?? '';
    if (!$accessToken) return 'Missing access token';

    $from = GMAIL_SENDER;
    $fromName = $opts['from_name'] ?? 'Website Contact';
    $replyTo = $opts['reply_to'] ?? null;

    // Build MIME message
    $boundary = '=_boundary_' . bin2hex(random_bytes(16));
    $headers = [];
    $headers[] = 'From: ' . format_address($from, $fromName);
    $headers[] = 'To: ' . format_address($to);
    if ($replyTo) $headers[] = 'Reply-To: ' . format_address($replyTo, $fromName);
    $headers[] = 'Subject: ' . encode_subject($subject);
    $headers[] = 'MIME-Version: 1.0';
    if ($htmlBody) {
        $headers[] = 'Content-Type: multipart/alternative; boundary="' . $boundary . '"';
        $body = "--$boundary\r\n" .
                "Content-Type: text/plain; charset=UTF-8\r\n\r\n" .
                $textBody . "\r\n" .
                "--$boundary\r\n" .
                "Content-Type: text/html; charset=UTF-8\r\n\r\n" .
                $htmlBody . "\r\n" .
                "--$boundary--";
    } else {
        $headers[] = 'Content-Type: text/plain; charset=UTF-8';
        $body = $textBody;
    }

    $raw = implode("\r\n", $headers) . "\r\n\r\n" . $body;
    $rawBase64 = rtrim(strtr(base64_encode($raw), '+/', '-_'), '=');

    $url = 'https://gmail.googleapis.com/gmail/v1/users/me/messages/send';
    $payload = [ 'raw' => $rawBase64 ];
    $res = gmail_http_post_json($url, $payload, [
        'Authorization: Bearer ' . $accessToken,
        'Content-Type: application/json',
    ]);

    if (isset($res['id'])) return true;
    if (isset($res['error'])) return 'Gmail API error: ' . (is_array($res['error']) ? json_encode($res['error']) : $res['error']);
    return 'Unknown error sending email.';
}

function gmail_http_post_json(string $url, array $data, array $headers = []): array {
    $ch = curl_init($url);
    $headers = array_merge([ 'Content-Type: application/json' ], $headers);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_TIMEOUT => 20,
    ]);
    $resp = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);
    if ($err) return ['error' => $err];
    $decoded = json_decode((string)$resp, true);
    return is_array($decoded) ? $decoded : ['raw' => $resp];
}

function format_address(string $email, string $name = null): string {
    if ($name) {
        return sprintf('"%s" <%s>', addcslashes($name, '"'), $email);
    }
    return $email;
}

function encode_subject(string $subject): string {
    // RFC 2047 encoded-word for UTF-8
    return '=?UTF-8?B?' . base64_encode($subject) . '?=';
}

?>
