<?php
// Summary
    // Validate Data
    // Check existing user with email
    // Upload Image
    // Insert data into database
    // Redirect To login Page
include 'db_connect.php';

$submit_data = $_POST;
$errors = [];
if (empty($submit_data["user_name"])) {
    $errors[] = "Name is Required.";
}
if (empty($submit_data["email"])) {
    $errors[] = "Email is Required.";
}
if (empty($submit_data["password"])) {
    $errors[] = "Password is Required.";
}
if (empty($submit_data["gender"])) {
    $errors[] = "Gender is Required.";
}
if (empty($_FILES["display_picture"]["name"])) {
    $errors[] = "Display picture is Required.";
}

if (count($errors) > 0) {
    echo "The following information is missing. Please provide these info.<br/>";
    echo implode("<br/>", $errors);
    return;
}

$email = $conn->real_escape_string($submit_data["email"]);
$sql = "SELECT * FROM user_info WHERE Email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Email already exists.";
    $conn->close();
    return;
}

$target_dir = "uploads/";
$timestamp = time(); 
$original_file_name = $_FILES["display_picture"]["name"];
$file_extension = pathinfo($original_file_name, PATHINFO_EXTENSION); 

$new_file_name = $target_dir . $timestamp . '_' . $original_file_name;

move_uploaded_file($_FILES["display_picture"]["tmp_name"], $new_file_name);

$name = $submit_data["user_name"];
$gender = $submit_data["gender"];
$password = password_hash($submit_data["password"], PASSWORD_DEFAULT); 

$stmt = $conn->prepare("INSERT INTO user_info (Name, Gender, Email, Password, Picture) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $gender, $email, $password, $new_file_name);


if ($stmt->execute()) {
    header("Location: /profile/login.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
