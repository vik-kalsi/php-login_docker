<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Initialize a flag for success or error
    $message = '';

    // Validate passwords
    if ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {
        // Hash the password (important for security)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Store the data in a text file (you can use JSON or any format)
        $data = "Name: $name, Username: $username, Password: $hashed_password\n";
        $file = 'users.txt'; // Change the filename if needed

        // Save the user data to the text file
        if (file_put_contents($file, $data, FILE_APPEND)) {
            $message = "Registration successful!";
        } else {
            $message = "Error saving the data!";
        }
    }
}
?>


<?php 
    echo $message;
?>

<p><a href="/">Home</p>