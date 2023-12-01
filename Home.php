<html>
<head>
    <title> JD Computers </title>
    <style>
        body {
            font-family: Bell MT;
            padding: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: darkslategrey; 
            margin: 0px;
        }
        .content {
            position: relative;
            z-index: 1;
        }
        .product-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }
            .product {
                height: 400px;
                width: 300px;
                border: 1px solid black;
                border-radius: 15px;
                padding: 5px;
                margin: 5px;
                background-color: white;
                text-align: center;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 14px;
                display: flex;
                flex-direction: column;
                position: relative;
            }
            .product img {
                width: 200px;
                height: 150px;
                margin: auto;
            }
            .product-description {
            text-align: center;
            }
            .product-price {
                text-align: center;
                font-weight: bold;
            }
            .buy-button {
                text-align: center;
                position: absolute;
                bottom: 5px;
                left: 30%;
                transform: translateX(-50%);
            }
            .cart-button {
                text-align: center;
                position: absolute;
                bottom: 13px;
                left: 200px;
                transform: translateX(-50%);
            }
            .button {
                background-color: #4caf50;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 8px;
                position: relative;
                bottom: 0px;
            }
            .cart {
                background-color: #4caf50;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 8px;
                position: relative;
                bottom: -8px;
            }
            .button:hover {
                background-color: white;
                color: black;
                border: 2px solid #008CBA;
            }
            .cart:hover {
                background-color: white;
                color: black;
                border: 2px solid #008CBA;
            }
    </style>
</head>
<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

    <div class="search-container" style="text-align: center;">
        <input type="text" class="search-bar" style="position: absolute; right: 150px; top: 65px; padding: 15px; width: 900px; font-size: 16px; background-color:white;" placeholder="Find yours...">
        <button class="search-button" style="position: absolute; right: 40px; top: 65px; padding: 15px 25px; font-size: 16px;">Search</button>
    </div>

    <p style="position: absolute; top: 100px; left: 320px; font-size: 65px; font-weight: bold;">
    Discover the Latest Products
    </p>

    <div class="product-container">
        <div class="product">
            <div class="product-image">
                <img src="Photos\81qoe0rmY4S._AC_SL1500_.jpg" alt="Product 1">
            </div>
            <div class="product-description">
                <h3>Zenbook Pro Duo 15 OLED (UX582)</h3>
                <p>
                    Windows 10 Pro <br>
                    15.6" 4K/UHD OLED NanoEdge display <br>
                    10th Gen Intel® Core™ i9 processor <br>
                    NVIDIA® GeForce® RTX 3070 <br>
                    32 GB memory <br>
                    1 TB SSD storage <br>
                </p>
            </div>
            <div class="product-price">
                <p>Rs. 700,000.00</p>
            </div>
            <div class="buy-button">
                <a href="Payment Page.php">
                    <button class="button"> Buy Now </button>
                </a>
            </div>
            <div class="cart-button">
                <a href="Cart.php">
                    <button class="cart">Add cart</button>
                </a>
            </div>
        </div>
            <div class="product">
                <div class="product-image">
                    <img src="Photos\ASUS-Vivobook-15-X1504-–-BQ273WS.jpg" alt="Product 2">
                </div>
                <div class="product-description">
                    <h3>ASUS Vivobook 15 (X1504)</h3>
                    <p>
                    Windows 11 Pro <br>
                    Intel® Core™ i5-1335U processor <br>
                    Intel Iris Xᵉ Graphics <br>
                    16 GB DDR4 3200 MHz <br>
                    512GB M.2 NVMe™ PCIe® 3.0 SSD <br>
                    15.6" NanoEdge display <br>
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 250,000.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.php">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.php">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="Photos\Acer-Aspire-3-AMD-3020E4GB1TB128GB156Win11-MS-Office-2021.png" alt="Product 3">
                </div>
                <div class="product-description">
                    <h3>Aspire 3 AMD</h3>
                    <p>
                    Windows 11 Pro <br>
                    AMD Ryzen™ 5 7520U Quad-core 2.40 GHz <br>
                    AMD Radeon™ Graphics shared memory <br>
                    14" Full HD (1920x1080) 16:9 60Hz <br>
                    16 GB, LPDDR5 <br>
                    1 TB SSD
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 235,000.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.php">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.php">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>            
            <div class="product">
                <div class="product-image">
                    <img src="Photos\G15 5511 i5 (Display Unit).jpg" alt="Product 4">
                </div>
                <div class="product-description">
                    <h3>G15 5511 i5 (Display Unit)</h3>
                    <p>
                    Windows 10 Pro <br>
                    Intel® Core™ i5-11400H Processor <br>
                    8GB DDR4 Ram <br>
                    256GB M.2 PCIe NVMe SSD <br>
                    Invidia® GeForce RTX™ 3050 4GB GDDR6 <br>
                    2 Years Warranty
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 340,000.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.php">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.php">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>            
            <div class="product">
                <div class="product-image">
                    <img src="Photos\TRANSCEND-128GB-NVME-SSD-front.jpg" alt="Product 5">
                </div>
                <div class="product-description">
                    <h3>TRANSCEND 128GB NVME SSD</h3>
                    <p>
                    Transcend Brand <br>
                    M.2 2280 Type <br>
                    NVMe PCIe Gen3 x4 Bus Interface <br>
                    128GB Storage
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 7,200.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.php">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.php">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>            
            <div class="product">
                <div class="product-image">
                    <img src="Photos\Samsung 980 250GB NVMe SSD.jpg" alt="Product 6">
                </div>
                <div class="product-description">
                    <h3>Samsung 980 250GB NVMe SSD</h3>
                    <p>
                    250GB Storage Capacity <br>
                    M.2 2280 Form Factor <br>
                    PCIe 3.0 Interface <br>
                    1.5 Million Hours Reliability (MTBF) <br>
                    2Year-warranty
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 11,000.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>            
            <div class="product">
                <div class="product-image">
                    <img src="Photos\MSI Spatium M270 120GB SATA 2.5 SSD.jpg" alt="Product 7">
                </div>
                <div class="product-description">
                    <h3>120GB SATA 2.5 SSD</h3>
                    <p>
                    MSI Spatium M270 <br>
                    120GB Storage Capacity <br>
                    SATA III 6Gbps Interface <br>
                    Compatible Devices Desktop <br>
                    Color Black
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 4,500.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>                        
            <div class="product">
                <div class="product-image">
                    <img src="Photos\ASUS VZ22EHE 22'' EYE CARE MONITOR.png" alt="Product 8">
                </div>
                <div class="product-description">
                    <h3>ASUS VZ22EHE 22'' EYE CARE MONITOR</h3>
                    <p>
                    Resolution : 1920x1080 <br>
                    Display Colors : 16.7M <br>
                    Weight : 3.5 Kg <br>
                    3 Year Warranty <br>
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 37,500.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>            
            <div class="product">
                <div class="product-image">
                    <img src="Photos\VIEWSONIC VX2458-C-MHD 24'' CURVED GAMING MONITOR.png" alt="Product 9">
                </div>
                <div class="product-description">
                    <h3>VX2458-C-MHD 24'' CURVED GAMING MONITOR</h3>
                    <p>
                    Weight : 6.00 kg <br>
                    24″ Curved Gaming Monitor <br>
                    1ms response time <br>
                    144Hz refresh rate <br>
                    3 Years Warranty <br>
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 89,000.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="Photos\MONITOR - ABANS M215TN 21.5 MONITOR.png" alt="Product 10">
                </div>
                <div class="product-description">
                    <h3>ABANS M215TN 21.5 MONITOR</h3>
                    <p>
                    Display size 21.45" <br>
                    Weight : 2.00 kg <br>
                    Refresh rate (Max) 75Hz <br>
                    Resolution (H x V) 1920*1080 <br>
                    Aspect Ratio 16:9 <br>
                    2 Year Warranty
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 33,500.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>            
            <div class="product">
                <div class="product-image">
                    <img src="Photos\ASUS DUAL GEFORCE RTX 3050 V2 8GB GDDR6 OC GRAPHICS CARD.jpg" alt="Product 11">
                </div>
                <div class="product-description">
                    <h3>8GB GDDR6 OC GRAPHICS CARD</h3>
                    <p>
                    ASUS DUAL GEFORCE RTX 3050 V2 <br>
                    90YV0GH6-M0NA00 <br>
                    3 YEARS WARRANTY <br>
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 97,500.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>           
            <div class="product">
                <div class="product-image">
                    <img src="Photos\ASUS DUAL GEFORCE GTX 1650 4GB GDDR6X OC GRAPHICS CARD.jpg" alt="Product 12">
                </div>
                <div class="product-description">
                    <h3>4GB GDDR6X OC GRAPHICS CARD</h3>
                    <p>
                    ASUS DUAL GEFORCE GTX 1650 <br>
                    90YV0EZD-M0NA00 <br>
                    3 YEARS WARRANTY <br>
                    </p>
                </div>
                <div class="product-price">    
                    <p>Rs. 63,000.00</p>
                </div>
                <div class="buy-button">
                    <a href="Payment Page.html">
                        <button class="button"> Buy Now </button>
                    </a>
                </div>
                <div class="cart-button">
                    <a href="Cart.html">
                        <button class="cart">Add cart</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php include 'Footer.php'; ?> <!-- Footer linked in here -->

</body>
</html>
