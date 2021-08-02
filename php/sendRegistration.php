<?php

require_once "db.php";
session_start();

$login = $_POST["login"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE name='simon'";
$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_assoc($result);
if($row["login"] == $login && password_verify($password, $row["password"])){
    setcookie("user", "admin");
    header("Location: admin/index.php");
}
else{
    header("Location: ./admin/registration.php");
}
