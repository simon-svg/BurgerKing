<?php

require_once "../../db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$id = $_POST["id"];




$query = "UPDATE contact SET name='$name', email='$email', subject='$subject', message='$message' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../contacts.php");
}
