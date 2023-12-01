<?php
include_once 'db_connection.php';

if (!defined('signup.inc.php')) {
    header('Location: ../signup.php');
    exit();
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pswd']);
    $address = mysqli_real_escape_string($conn, $_POST['adrs']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    // Your SQL query to insert data into the 'users' table
    $sql = "INSERT INTO users (username, email, pwd, address, mobile) 
        VALUES ('$username', '$email', '$password', '$address', '$mobile')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
