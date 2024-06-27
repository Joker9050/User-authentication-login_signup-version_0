<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['l_email'];
    $password = $_POST['l_pass'];

    // Query to check if the user exists with the provided email and password
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if a row is returned
    if (mysqli_num_rows($result) > 0) {
        echo "Login successful. Welcome, " . $email . "!";
        
    } else {
        echo "Invalid email or password.";
    }

    // Close connection
    mysqli_close($conn);
}


?>