<?php
function emptyInputsSingup($username, $email, $pswd, $pswdr); {
    $result;
    if (empty($username) || empty($email) || empty($pswd) || empty($pswdr)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invaliduid($username); {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invaliduid($email); {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pswdMatch($pswd, $pswdr); {
    $result;
    if ($pswd !== $pswdr) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email); {
$sql = "SELECT * FROM customer WHERE Cus_ID = ? Cus_Email ?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location:../Register.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)); {
        return $row;
    } else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createCustomer($conn, $username, $email, $pswd); {
    $sql = "INSERT INTO customer (usersid, usersname, usersemail, userspswd) VALUES (?,?,?,?);"
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../Register.php?error=stmtfailed");
        exit();
        }
}
 

?>