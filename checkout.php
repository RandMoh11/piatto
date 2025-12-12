
<link rel="stylesheet" href="style.css">
<?php
include"db.php";
session_start();
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>

<h1>Payment</h1>

<h3>Total Amount: <?php echo $total; ?> SAR</h3>

<form action="confirm_order.php" method="POST">

    <h3>:Choose the payment method</h3>

    <label>
        <input type="radio" name="payment" value="card" required>
     credit card (Visa / MasterCard)
    </label><br><br>

    <label>
        <input type="radio" name="payment" value="applepay" required>
        Apple Pay 
    </label><br><br>

    <button type="submit"> Confirm payment</button>

</form>

</body>
</html>