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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="grid justify-center bg-emerald-200">
    <?php 
        echo empty($message) ? "" : $message;
    ?>
    <h1 class="mb-8">Login Page</h1>

    <!-- Login Form -->
    <form method="POST">
        <label class="font-bold">Username: <input class="border-2" type="text" name="username" required></label><br><br>
        <label class="font-bold">Password: <input class="border-2" type="password" name="password" required></label><br><br>
        <input class="border-2 mb-4 p-1 font-bold" type="submit" value="Login">
        <p><a class="font-bold" href="./register-form.php">Register</p>
    </form>
</body>
</html>