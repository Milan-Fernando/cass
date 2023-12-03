<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "cass";

// Create connection
$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
  die('Error connecting to database: ' . $mysqli->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];
$adrs = $_POST['adrs'];
$mobile = $_POST['mobile'];

$query = "INSERT INTO users (user_name, email,password,address,mobile) VALUES ('$name', '$email','$pswd','$adrs','$mobile')";

mysqli_query($mysqli,$query);

?>
