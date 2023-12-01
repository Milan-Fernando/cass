<?php

    $username = $_POST["uid"];
    $pswd = $_POST["pswd"];

    if (! $terms) {
        die("Terms must be accepted");
    }

    $servername = "localhost";
    $dbname = "cass";
    $username = "Milan Fernando";
    $password = "";

    $conn = mysqli_connect($servername, $dbname, $username, $password);
    if (mysqli_connect_errno()) {
        die()
    }



?>