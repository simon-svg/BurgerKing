<?php

require_once "../../db.php";

$id = $_POST["id"];

$query = "DELETE FROM food_blog WHERE id='$id'";
$result = mysqli_query($mysqli, $query);

if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../blogGrid.php");
}