<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>


<body class="grid justify-center bg-emerald-200 font-bold">

    <h1 class="mb-8">Register Page</h1>

    <form method="POST" action="register.php">
        <label>Name: <input class="border-2"  type="text" name="name" required pattern="[A-Za-z\s]+" required></label><br><br>
        <label>Username: <input class="border-2"  type="text" name="username" required></label><br><br>
        <label>Password: <input class="border-2"  type="password" name="password" required></label><br><br>
        <label>Confirm Password: <input class="border-2"  type="password" name="confirm_password" required></label><br><br>
        <input class="mb-4 border-2 p-1 cursor-pointer" type="submit" value="Register">
        <p><a href="/">Home</p>
    </form>
    
</body>

</html>