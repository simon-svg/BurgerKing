<?php

require_once "../../db.php";

$name = $_POST["name"];
$parentId = $_POST["parentId"];
$link = $_POST["link"];


$query = "INSERT INTO header_list (name, parent_id, link) VALUES ('$name', '$parentId', '$link')";

$result = mysqli_query($mysqli, $query);


if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../index.php");
}