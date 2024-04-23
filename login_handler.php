<!-- login_handler.php -->
<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Login successful!";
        header("Location: info.php");
        exit();
    } else {
        echo "Invalid username or password.";
        header("Location: login.php?error=1"); 
        exit();
    }
}
?>
