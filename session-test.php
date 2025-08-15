<?php
// Session test file to verify the fix
require_once 'includes/session-config.php';
session_start();

echo "Session configuration test successful. No warnings should appear above this line.";
echo "<br>Session ID: " . session_id();
echo "<br>Session status: " . session_status();
echo "<br>Current timestamp: " . date('Y-m-d H:i:s');
?>
