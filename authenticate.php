<?php
session_start();
include 'db.php';  // Ensure this file connects to the MySQL database

// Capture form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check username and password in the database
$query = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$query->bind_param("ss", $username, $password);
$query->execute();
$result = $query->get_result();

// Check if user exists and login credentials are correct
if ($result->num_rows === 1) {
    // Store username in session and redirect to main page
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit();
} else {
    // Redirect to login with error if credentials are incorrect
    header("Location: login.php?error=invalid_credentials");
    exit();
}
?>
