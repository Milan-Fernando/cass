<!DOCTYPE html>
<html>
<head>
<title> Register </title>
    
<style>

    body {
        font-family: Bell MT; 
        background-color: darkslategrey; 
        text-align:center; 
        margin: 0px;  
    }
    
    input[type="text"], input[type="password"], input[type="email"], 
    input[type="address"], input[type="mobile"] { 
        width: 95%;
        padding: 12px;
        margin-bottom:20px;
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
    form 
{
    position:absolute;
    left:400px;
    top:60px;
    width:600px;    
}
h1{
    font-weight: bold;
    color:white;
    font-size:40px;
}    
    </style>
</head>
<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

<form action="Includes/signup.inc.php" method="post" style="font-size: 16px;">

        <center>
            <h1> Sign Up </h1>
            <!-- <label for="username"> Username: </label> -->
                <input type="text" id="username" name="uid" required placeholder="User name">
            <!-- <label for="email"> Email: </label> -->
                <input type="email" id="email" name="email" required placeholder="Email">
            <!-- <label for="password"> Password: </label> -->
                <input type="password" id="password" name="pswd" required placeholder="Password">
            <!-- <label for="password"> Confirm Password: </label> -->
                <input type="password" id="password" name="pswdr" required placeholder="Confirm Password">
                <input type="text" id="address" name="adrs" required placeholder="Address">
                <input type="text" id="mobile" name="mobile" required placeholder="Mobile">
                <input type="submit" value="Sign Up"> <br> <br>
        </center>
    
    </form>
</body>
</html>
