<?php

require_once "../../db.php";

$name = $_POST["name"];
$parentId = $_POST["parentId"];
$link = $_POST["link"];
$id = $_GET["id"];




$query = "UPDATE header_list SET name='$name', parent_id='$parentId', link='$link' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
