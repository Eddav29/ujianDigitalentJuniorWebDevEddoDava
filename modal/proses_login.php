<?php
# Initialize session
session_start();

# Include database connection
include "config/koneksi.php";

# Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username == "admin" && $password == "bpsdmp") {
        # Set session variables
        $_SESSION["username"] = $username;
        
        # Redirect to admin page or any other page you want
        header("Location: ../admin.php");
        exit();
    } else {
        # Invalid credentials, redirect back to login
        header("Location: ../login.php");
        exit();
    }
}
?>
