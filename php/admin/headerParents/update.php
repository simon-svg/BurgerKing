<?php

require_once "../../db.php";

$name = $_POST["name"];
$id = $_GET["id"];




$query = "UPDATE header_parent SET name='$name' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
