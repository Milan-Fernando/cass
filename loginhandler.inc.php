<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST["uid"];
    $pswd = $_POST["pswd"];
    $pswdr = $_POST["pswdr"];
    $email = $_POST["email"];
    $adrs = $_POST["adrs"];
    $mobile = $_POST["mobile"];
try {
    require_once "dbh-inc.php";
    $query = "INSERT INTO users (username, pwd, email) VALUES
    ($username, $pwd, $email);";

    $stmt = $pdo->prepare($query);

    $stmt->execute([$username, $pwd, $email]);

    $pdo = null;
    $stmt = null;

    header("login.php");
    
    die();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
} else {
    header("C:\xampp\htdocs\my_project\CASS\login.php");
}
