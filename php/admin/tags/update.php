<?php

require_once "../../db.php";

$name = $_POST["name"];
$id = $_POST["id"];


$query = "UPDATE tags SET name='$name' WHERE id='$id'";
$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../tags.php");
}
