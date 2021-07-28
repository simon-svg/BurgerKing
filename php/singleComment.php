<?php

require_once "db.php";

$name = $_POST["name"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$message = $_POST["message"];
$id = $_POST["getId"];
$replyId = $_POST["replyId"];
$date = time();

$query = "INSERT INTO comment (name, last_name, email, message, blog_id, date, parent_id)
VALUES ('$name', '$lastName', '$email', '$message', '$id', '$date', '$replyId')";

$result = mysqli_query($mysqli, $query);

if($result){
	header("Location: ../single.php?id=$id");
}
else{
	echo mysqli_error($mysqli);
}