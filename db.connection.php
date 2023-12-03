<?php

class DB {
  public function dbConn()
  {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "cass";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
  }
}
?>
