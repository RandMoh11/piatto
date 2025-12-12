<link rel="stylesheet" href="style.css">
<?php
include"db.php";
session_start();
?>

<h2>Cart</h2>

<?php

if(empty($_SESSION['cart'])){
    echo "<p>Your Cart Is Empty</p>";
} else {

  foreach($_SESSION['cart'] as $id => $item){
        echo "
        <div style='border:1px solid #ddd; padding:15px; margin:10px;'>
            <img src='{$item['image']}' width='120'><br>
            <strong>{$item['name']}</strong><br>
            Prise : {$item['price']} SAR <br>
            Amount: {$item['quantity']} <br><br>

            <a href='update_cart.php?action=plus&id=$id'> + </a>
            <a href='update_cart.php?action=minus&id=$id'> - </a>
            <a href='update_cart.php?action=delete&id=$id' style='color:red;'> delete </a>
        </div>";
    }
}
?>
<?php if (!empty($_SESSION['cart'])): ?>
    <form action="checkout.php" method="post" style="text-align:center; margin-top:20px;">
        <button type="submit" class="btn-cart btn-primary"> Complete the order</button>
    </form>
<?php endif; ?>

<div class="cart-actions">
    <a href="Menu.php" class="btn-cart btn-secondary">
        Back to the menu
    </a>

    
</div>


