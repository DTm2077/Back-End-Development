<?php
// Unset all session variables
$_SESSION = array();

// If a session cookie is present, set its expiration to the past to delete it
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
}

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("location: http://localhost/demo/loginpagehtml.php");
exit;
?>
