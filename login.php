<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    if ($password == "password123") {
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit;
    } else {
        echo "<p>Incorrect password. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cab Booking System</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="authenticate.php" method="POST">
            <!-- Username Field -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <!-- Password Field -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- Login Button -->
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>


