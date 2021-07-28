<?php

require_once "./db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$date = $_POST["date"];
$time = $_POST["time"];


$query = "INSERT INTO booking (name, email, mobile, date, time)
VALUES ('$name', '$email', '$mobile', '$date', '$time')";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
