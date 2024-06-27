<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['s_email'];
    $password = $_POST['s_pass'];
    $confirm_password = $_POST['s_cpass'];

    // Check if passwords match
    if ($password != $confirm_password) {
        die("Passwords do not match.");
    }

    // Insert data into users table
    $sql = "INSERT INTO users (email, password, confirmpassword) VALUES ('$email', '$password', '$confirm_password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}



?>