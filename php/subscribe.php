<?php

require_once "db.php";

$email = $_POST["email"];

$query = "INSERT INTO subscribe (email) VALUES ('$email')";
$result = mysqli_query($mysqli, $query);

$id = mysqli_insert_id($mysqli);

if($id){
	echo true;
}
else{
	echo false;
}