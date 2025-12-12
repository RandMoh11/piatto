<?php

include"db.php";

session_start();



if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$id    = $_POST['id']?? null;
$name  = $_POST['name']??'';
$price = $_POST['price']??0;
$image = $_POST['image']??'';

if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity'] += 1;
} else {
    $_SESSION['cart'][$id] = [
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'quantity' => 1
    ];
}
header("Location: ".$_SERVER['HTTP_REFERER']);
exit;
?>