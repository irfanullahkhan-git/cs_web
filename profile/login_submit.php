<?php
session_start();
include 'db_connect.php';


$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    echo "Email and Password are required.";
    exit();
}

$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM user_info WHERE Email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['Password'])) {
        $_SESSION['user_id'] = $row['ID'];
        $_SESSION['user_name'] = $row['Name'];
        
        header("Location: /profile/home.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with this email.";
}

$conn->close();
?>
