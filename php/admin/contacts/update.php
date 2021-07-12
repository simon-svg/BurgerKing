<?php

require_once "../../db.php";

$name = $_POST["name"] ? $_POST["name"] :  $_GET["name"];
$email = $_POST["email"] ? $_POST["email"] : $_GET["email"];
$subject = $_POST["subject"] ? $_POST["subject"] : $_GET["subject"];
$message = $_POST["message"] ? $_POST["message"] : $_GET["message"];
$id = $_GET["id"];




$query = "UPDATE contact SET name='$name', email='$email', subject='$subject', message='$message' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
