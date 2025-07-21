<?php
// Hardcoded credentials
$message = "";
if ($_POST['username'] === 'john' && $_POST['password'] === 'day') {
    $message = 'Login Successful! Welcome, ' . htmlspecialchars($_POST['username']);
} elseif ($_POST) {
    $message = 'Invalid Credentials!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php 
        echo empty($message) ? "" : $message;
    ?>
    <h1>Login Page</h1>

    <!-- Login Form -->
    <form method="POST">
        <label>Username: <input type="text" name="username" required></label><br><br>
        <label>Password: <input type="password" name="password" required></label><br><br>
        <input type="submit" value="Login">
        <p><a href="./register-form.php">Register</p>
    </form>
</body>
</html>