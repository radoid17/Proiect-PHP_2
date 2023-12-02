<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmailQuery = "SELECT id FROM users WHERE email = '$email'";
    $checkResult = $conn->query($checkEmailQuery);

    if ($checkResult->num_rows > 0) {
        echo "Email already registered. Please choose a different email.";
    } else {
        $insertQuery = "INSERT INTO users (full_name, email, password) VALUES ('$fullName', '$email', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Registration successful. You can now log in.";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
