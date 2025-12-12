<?php
session_start();

// نجيب طريقة الدفع من الفورم
$payment = isset($_POST['payment']) ? $_POST['payment'] : "";

// نفرغ السلة (اختياري)
$_SESSION['cart'] = [];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Confirmed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Your order has been confirmed successfully 🥳</h1>

<p>Payment Method:
    <strong>
        <?php
        echo ($payment == "card") ? "credit card" : "Apple Pay";
        ?>
    </strong>
</p>

<a href="index.html">Back To Home Page</a>

</body>
</html>