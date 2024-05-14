<?php
// Start session
session_start();

// Destroy session data
session_destroy();

// Redirect to login page
header("Location: login.php");
exit();
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
