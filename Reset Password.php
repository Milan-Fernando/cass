<!DOCTYPE html>
<html>
<head>
<title> Reset Password </title>
<style>

body {
    font-family: Bell MT; 
    background-color: darkslategrey; 
    text-align:center; 
    margin: 0px; 
}

input[type="text"], input[type="password"], input[type="int"] 
{ width: 90%;
padding: 12px;
margin: 10px;
box-sizing: border-box;
border: 2px solid white;
border-radius: 10px; }

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
    position:absolute;
    left:400px;
    top:100px;
    width:600px;
}
h1{
    font-weight:bold;
    color:white;
    font-size:40px;
}
</style>
</head>

<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

<form action="#" method="post">
    <center>
        <h1> Reset Password </h1>
            <input type="text" id="username" name="username" required placeholder="User name">
            <input type="int" id="mobile" name="mobile" required placeholder="Mobile">
        <input type="submit" value="Send Code">
            <input type="password" id="password" name="password" required placeholder="New Password">
            <input type="password" id="password" name="password" required placeholder="Confirm Password">
        <input type="submit" value="Reset"> <br> <br>
    </center>

</form>
</body>
</html>
