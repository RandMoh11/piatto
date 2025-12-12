<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<h1>dashboard</h1>

<a href="index.html">home Page</a><br><br>
<a href="Menu.php"> Menu</Menu> </a><br><br>
<a href="cart.php">Cart</a><br><br>
<a href="logout.php">logout </a><br><br>
<a href="orders_list.php">View Orders </a>