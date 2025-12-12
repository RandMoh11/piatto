<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<h1>Incorrect data </h1>";
    echo "<a href='admin_login.php'>back</a>";
}
?>