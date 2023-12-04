<?php
// login_processor.php

session_start();

// Example credentials, replace with database lookup in real application
$valid_username = "ttr.fitt";
$valid_password_hash = password_hash("1234", PASSWORD_BCRYPT); // Example hashed password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // In a real application, you would look up the username and password hash in your database
    if ($username === $valid_username && password_verify($password, $valid_password_hash)) {
        // Authentication successful
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to dashboard
        header("Location: dashboard.html");
        exit;
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
