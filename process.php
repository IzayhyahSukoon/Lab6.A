<?php
session_start();

// Check if form data exists
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace with your actual login credentials
    if ($username === 'Ishaq' && $password === '106042084') {
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        echo "Invalid login. <a href='login.php'>Try again</a>";
    }
} else {
    echo "No form data received. <a href='login.php'>Go back</a>";
}
?>