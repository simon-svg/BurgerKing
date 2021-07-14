<?php

require_once "../../db.php";

$name = $_POST["name"];

$query = "INSERT INTO food_categories (name) VALUES ('$name')";

$result = mysqli_query($mysqli, $query);


if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../index.php");
}