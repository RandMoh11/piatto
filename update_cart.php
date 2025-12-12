<?php
include"db.php";
session_start();

$action = $_GET['action'];
$id = $_GET['id'];

if($action == "plus"){
    $_SESSION['cart'][$id]['quantity']++;
}

if($action == "minus"){
    $_SESSION['cart'][$id]['quantity']--;
    if($_SESSION['cart'][$id]['quantity'] <= 0){
        unset($_SESSION['cart'][$id]);
    }
}

if($action == "delete"){
    unset($_SESSION['cart'][$id]);
}

header("Location: cart.php");
exit;
?>