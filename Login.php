<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<style>

body { 
    font-family: Bell MT; 
    background-color: darkslategrey;
    margin:0px;
}
h1 {
    position: relative;
    font-size:40px;
    font-weight:bold;
    color:white;
    text-align:center;
    top:-200px;
}
input[type="text"], input[type="password"] { 
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 8px; }

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 12px 20px;
    border: none;
    font-size:14px;
    border-radius: 10px;
    cursor: pointer; 
}

input[type="submit"]:hover {
    border: 1px solid black;
    background-color: #008CBA;
    color: white;
}
form {
    position:relative;
    width:600px;
    height:auto;
    left:400px;
    top:-150px;
    text-align:center;
    box-sizing:border-box;
}
.link{
    position:relative;
    color:white;
    left:380px;
    top:-100px;
    margin:100px;
    font-size:20px;
    font-weight:bold;
    text-decoration:none;
}
.link:hover{
    background-color:;
    color:;
    padding:10px;
    border:2px solid;
    border-radius:10px;
}
</style>
</head>

<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

<h1> Sign In </h1>
<div>
<form action="C:\wamp64\www\my_project\CASS\Includes\Login.inc.php" method="post">
        <input type="text" id="uname" name="uid" required placeholder="User name">
        <input type="password" id="password" name="pswd" required placeholder="Password">
    <input type="submit" value="Sign In">

</form>
</dive>
<p> 
<a class="link" href="Reset Password.php"> Forgot Password </a>
<a class="link" href="Signup.php"> Sign Up </a>
</p>

</body>
</html>