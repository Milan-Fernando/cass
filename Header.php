<html>
<head>
<style>
Nav {
    background-color: #333;
    color: #fff;
    display: flex;
    box-sizing: border-box;
    height: 60px;
    padding-top: -20px;
    justify-content: center;
    opacity: 0.8; 
}
.nav-option {
    text-decoration: none;
    margin: 20px;
    margin-left: 100px; 
    color: white;
    
    font-size: 20px; 
}
.profile-icon {
    width: 30px; 
    height: 40px; 
    border-radius: 20%;
}
.container{
    position: relative; 
    width: 400px; 
    height: 250px;
}
.JD { 
    font-family: Algerian;
    text-decoration: none; 
    position: absolute; 
    left: 30px; 
    color: black; 
    font-size: 120px; 
    font-style: italic;
    top: -20px;
}
.Computers{
    text-decoration: none;
    font-family: 'Gill Sans MT';
    position: absolute;
    left: 20px;
    color: black;
    font-style: italic;
    font-size: 40px;
    top: 100px;
}
</style>
</head>
<body>

<nav>
        <a class="nav-option" href="Home.php">Home</a>
        <a class="nav-option" href="">Category</a>
        <a class="nav-option" href="Contact.php">Contact</a>
        <a class="nav-option" href="Cart.php">View Cart</a>
        <a class="nav-option" href="Login.php">Login</a>
</nav>
<div class="container">
        <a class="JD" href="Home.php"> JD </a> 
        <a class="Computers" href="#"> Computers </a>        
</div>
</body>
</html>
