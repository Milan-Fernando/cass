<!DOCTYPE html>
<html>
<head>
    <title> Category </title>
<style>
body{
    background-color: darkslategrey;
    margin:0px;
}
.search-bar{
    position: absolute; 
    right: 150px; 
    top: 70px; 
    padding: 15px; 
    width: 900px; 
    font-size: 16px;
}
.search-button{
    position: absolute; 
    right: 40px; 
    top: 70px; 
    padding: 15px 25px; 
    font-size: 16px;
}
.product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.product {
    height: 400px;
    width: 350px;
    border:2px solid black;
    top:-100px;
    padding: 0px;
    margin: 10px;
    background-color: ;
    text-align: center;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 14px;
    display: flex;
    flex-direction: column;
    position: relative;
}
.product img {
    width: 300px;
    height: 220px;
    margin: auto;
}
img{
width:300px;
height:220px;
margin:auto;
border-radius:10px;
}
h1{
    position:absolute;
    top:80px;
    left:500px;
    font-family:Bell MT;
    font-size:50px;
}
h2 {
    font-family:Bell MT;
    text-align: center;
    font-size:32px;
    font-weight:bold;
}
.product-price {
    text-align: center;
    font-weight: bold;
}
.buy-button {
    text-align: center;
    position: absolute;
    bottom: 5px;
    left: 50%;
    transform: translateX(-50%);
}
.button {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
}
.button:hover {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}
</style>
</head>
<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

<!-- <div class="search-container" style="text-align: center;">
    <input type="text" class="search-bar" placeholder="Find yours...">
    <button class="search-button">Search</button>
</div> -->

<h1>Select your items</h1>

<div class="product-container">
        <div class="product">
            <div>
                <h2>Laptops</h2>
            </div>
            <div class="product-image">
                <img src="Photos\81qoe0rmY4S._AC_SL1500_.jpg" alt="Product 1">
            </div>
            
            <div class="buy-button">
                <a href="">
                    <button class="button"> See All </button>
                </a>
            </div>
        </div>
        <div class="product">
            <div>
                    <h2>Monitors</h2>
            </div>    
            <div class="product-image">
                <img src="Photos\VIEWSONIC VX2458-C-MHD 24'' CURVED GAMING MONITOR.png" alt="Product 2">
            </div>
                
                <div class="buy-button">
                    <a href="">
                        <button class="button"> See All </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="product">
            <div>
                    <h2>SSD</h2>
            </div>    
            <div class="product-image">
                <img src="Photos\MSI Spatium M270 120GB SATA 2.5 SSD.jpg" alt="Product 3">
            </div>
                
                <div class="buy-button">
                    <a href="">
                        <button class="button"> See All </button>
                    </a>
                </div>
        </div>

<?php include 'Footer.php'; ?> <!-- Footer linked in here -->
</body>
</html>
