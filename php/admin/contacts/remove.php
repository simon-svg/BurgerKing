<?php

require_once "../../db.php";

$id = $_GET["id"];

$query = "DELETE FROM contact WHERE id='$id'";
$result = mysqli_query($mysqli, $query);

if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../index.php");
}