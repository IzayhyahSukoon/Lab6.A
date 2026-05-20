<?php
session_start();

if (isset($_SESSION['user'])) {
    include 'header.php';
    echo "Welcome, " . $_SESSION['user'];
    include 'footer.php';
} else {
    header('Location: login.php');
    exit();
}
?>