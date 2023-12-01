<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
<style>
body {
    font-family: Bell MT; 
    background-color: darkslategrey;
    margin:0px;
}
h1 {
    position: absolute;
    font-size:40px;
    font-weight:bold;
    color:white;
    left:550px;
    top:50px;
}
.cart-container {
    position:relative;
    margin: 20px auto;
    max-width: 600px;
    border: 2px solid #007BFF;
    padding: 20px;
    border-radius: 10px;
    background-color: #f8f9fa;
    text-align: left;
    top:-150px;
}
.product {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
}
.product img {
    max-width: 100px;
    max-height: 100px;
}
.product-info {
    flex: 1;
    margin-left: 10px;
}
.product-name {
    font-size: 18px;
    font-weight: bold;
}
.product-price {
    font-size: 16px;
}
.total {
    font-size: 20px;
    font-weight: bold;
    margin-top: 10px;
}
.checkout-btn {
    background-color: #4caf50;
    color: white;
    padding: 12px 20px;
    border: none;
    font-size:14px;
    border-radius: 10px;
    cursor: pointer;
}
.checkout-btn:hover {
    border: 1px solid black;
    background-color: #008CBA;
    color: white;
}
</style>
</head>
<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->
    
<h1>Shopping Cart</h1>

    <div class="cart-container">
        <div class="product">
            <img src="product1.jpg" alt="Product 1">
            <div class="product-info">
                <div class="product-name">Product 1</div>
                <div class="product-price">price</div>
            </div>
        </div>

        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <div class="product-info">
                <div class="product-name">Product 2</div>
                <div class="product-price">price</div>
            </div>
        </div>

        <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <div class="product-info">
                <div class="product-name">Product 3</div>
                <div class="product-price">price</div>
            </div>
        </div>

        <div class="total">
            Total: 
        </div>

        <button class="checkout-btn">Checkout</button>
    </div>

</body>
</html>
