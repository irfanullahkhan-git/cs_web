<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: /profile/home.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="/profile/login_submit.php" method="post">
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
        <a href="signup.php">Dont have an Account?</a>
    </form>
</body>
</html>
