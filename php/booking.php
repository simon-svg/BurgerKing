<?php

require_once "./db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

echo "<pre>";
var_dump($_POST);
echo "</pre>";


// $query = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

// if(isset($name) && isset($email) && isset($subject) && isset($message)){
//     $result = mysqli_query($mysqli, $query);
// }

// if(!$result){
//     echo mysqli_error($mysqli);
// }
// else{
//     header("Location: ../index.php");
// }