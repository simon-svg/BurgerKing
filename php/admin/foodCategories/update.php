<?php

require_once "../../db.php";

$name = $_POST["name"];
$id = $_GET["id"];

$query = "UPDATE food_categories SET name='$name' WHERE id='$id'";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
