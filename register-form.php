<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>


    <h1>Register Page</h1>

    <form method="POST" action="register.php">
        <label>Name: <input type="text" name="name" required pattern="[A-Za-z\s]+" required></label><br><br>
        <label>Username: <input type="text" name="username" required></label><br><br>
        <label>Password: <input type="password" name="password" required></label><br><br>
        <label>Confirm Password: <input type="password" name="confirm_password" required></label><br><br>
        <input type="submit" value="Login">
        <p><a href="/">Home</p>
    </form>
    
</body>
</html>