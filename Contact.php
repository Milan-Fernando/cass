<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
<style>
body{
        font-family: Bell MT;
        background-color: darkslategrey; 
        margin: 0px;
}
h1{
        position: absolute; 
        right: 80px; 
        top: 60px; 
        padding: 0px; 
        font-family: Georgia, 'Times New Roman', serif; 
        font-weight: bolder; 
        font-size: 35px;
}
label{
    font-size:large;
    
}
input[type="text"], input[type="email"]{
    width:700px;
    padding:12px;
    margin-bottom:10px;
    border-radius:10px;
    border:white;
}
textarea{
    width:700px;
    height:100px;
    padding:10px;
    margin-bottom:10px;
    border-radius:10px;
    border:white;
}
input[type="submit"]{
    background-color: #008CBA; 
    border: none; 
    color: white; 
    padding: 10px 20px; 
    font-size: 16px; 
    cursor: pointer; 
    border-radius: 10px;
}
input[type="submit"]:hover{
    background-color:lightgreen;
    color:black;
}
.details{
    position: absolute; 
    width: 350px; 
    height: 300px; 
    border: 2px solid black; 
    border-radius: 10px; 
    left: 50px; 
    top: 250px;
}
.form-1{
    position: relative;
    max-width:500px;
    margin: auto;
    justify-content: center;
    left:150px;
    top:-150px;
}
.form-2{
    text-align:center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', sans-serif; 
    font-size: 16px; 
    padding: 0px;
    left:0px;
}
h3{
    font-weight: bold; 
    font-style: italic; 
    font-size: 22px; 
    color: white;
}
p{
    font-size: 18px;
}
</style>
</head>
<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

<h1>Leading Computer Accessories Dealers in Sri Lanka</h1>

    <form class="form-1">
        <!-- <label for="name">Name:</label> -->
        <input type="text" id="name" name="name" placeholder="Name">

        <!-- <label for="email">Email:</label> -->
        <input type="email" id="email" name="email" placeholder="email">
        
        <!-- <label for="name">Contact Number:</label> -->
        <input type="text" id="name" name="name" placeholder="Mobile Number">
       
        <!-- <label for="message">Message:</label> -->
        <textarea id="message" name="message" placeholder="Type your message..." required></textarea>

        <input type="submit" value="Submit">
    </form>
    <div class="details">
        
        <form class="form-2">
            <h3> Address: </h3> <p> 561/B/22, New town, Anuradhapura </p>
            <h3> Contact: </h3> <p> 0775050781 </p>
            <h3> email: </h3> <p> jdcomputersnc@gmail.com </p>
        </form> 
    </div>
</body>
</html>
