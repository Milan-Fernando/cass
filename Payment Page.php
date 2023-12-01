<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Bell MT;
            text-align: center;
            background-color: darkslategrey;
            margin: 0px;
        }
        h1 {
            color: #007BFF;
        }
        form {
            position:absolute;
            top:80px;
            left:500px;
            display: inline-block;
            text-align: left;
            border: 2px solid #007BFF;
            padding: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        label, input, select {
            display: block;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

        input, select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="date"] {
            width: auto;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4caf50;
        }

        #credit_card_details, #cash_on_delivery_details {
            display: none;
        }
    </style>
</head>
<body>
<?php include 'Header.php'; ?> <!-- Header linked in here -->

    <form action="process_payment.php" method="post">
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required onchange="togglePaymentDetails()">
            <option value="" disabled selected>Select Payment Method</option>
            <option value="credit_card" required>Credit Card</option>
            <option value="cash_on_delivery" required>Cash on Delivery</option>
        </select>

        <div id="credit_card_details">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>
            <label for="CVV">CVV:</label>
            <input type="text" id="CVV" name="CVV_number" required>
            <label for="date">Card Expire Date:</label>
            <input type="date" id="card_expire_date" name="card_expire_date" required>
            <label for="quantity_product1">Quantity:</label>
            <input type="number" id="quantity_product1" name="quantity_product1" min="1" value="1" onchange="updateTotalPrice('product1')" required>
        </div>

        <div id="cash_on_delivery_details">
            <label for="address">Address:</label>
            <input type="text" id="Address" name="address" required>
            <label for="telephone">Contact Number:</label>
            <input type="int" id="Telephone_Number" name="Telephone_Number" required>
            <label for="quantity_product1">Quantity:</label>
            <input type="number" id="quantity_product1" name="quantity_product1" min="1" value="1" onchange="updateTotalPrice('product1')" required>
        </div>
        <p style="font-weight: bold; color:black;">
            The product will be delivered in 3-5 days
        </p>
        <input type="submit" value="Pay">
    </form>

    <script>
        function togglePaymentDetails() {
            var paymentMethod = document.getElementById("payment_method").value;
            var creditCardDetails = document.getElementById("credit_card_details");
            var cashOnDeliveryDetails = document.getElementById("cash_on_delivery_details");

            if (paymentMethod == "credit_card") {
                creditCardDetails.style.display = "block";
                cashOnDeliveryDetails.style.display = "none";
            } else if (paymentMethod == "cash_on_delivery") {
                creditCardDetails.style.display = "none";
                cashOnDeliveryDetails.style.display = "block";
            }
        }
    </script>

</body>
</html>
