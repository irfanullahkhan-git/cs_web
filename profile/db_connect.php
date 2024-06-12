<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "bh0ja";
$dbname = "students_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
