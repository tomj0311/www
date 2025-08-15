<?php
/**
 * Session Configuration
 * Include this file BEFORE starting any sessions
 */

// Only configure session settings if no session is active
if (session_status() === PHP_SESSION_NONE) {
    // Session Security Configuration
    ini_set('session.cookie_httponly', 1);
    
    // Check if we're using HTTPS
    $is_https = (
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
        (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
        (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] === 'on') ||
        (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
    );
    
    // Set secure flag only if using HTTPS
    ini_set('session.cookie_secure', $is_https ? 1 : 0);
    ini_set('session.use_strict_mode', 1);
    ini_set('session.cookie_samesite', 'Strict');
    
    // Session lifetime (optional)
    ini_set('session.gc_maxlifetime', 3600); // 1 hour
    ini_set('session.cookie_lifetime', 0); // Until browser closes
    
    // Session name (optional - makes it harder to identify the framework)
    ini_set('session.name', 'hub8_session');
}
?>
