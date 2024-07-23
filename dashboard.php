<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Display dashboard content
echo "Welcome, " . $_SESSION['username'] . "! This is your dashboard.";
?>
