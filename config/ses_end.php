<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
// session_destroy();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit; // Make sure to exit to stop the script execution
}

?>