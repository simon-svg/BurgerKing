<?php

require_once "../../db.php";

$id = $_POST["id"];

$query = "DELETE FROM tags WHERE id='$id'";
$result = mysqli_query($mysqli, $query);

if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../tags.php");
}