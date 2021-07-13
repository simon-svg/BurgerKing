<?php

require_once "../../db.php";

$id = $_GET["id"];
$name = $_POST["name"];
$info = $_POST["info"];
$price = $_POST["price"];
$discPrice = $_POST["discPrice"];
$img = $_GET["img"];
$date = time();


foreach ($_FILES as $key => $file) {
    if ($file["error"] == 0) {
        $arr = explode("/", $file["type"]);
        $x = end($arr);
        if (preg_match("/(png || jpg || jpeg)/", $x)) {
            $y = mt_rand(1000000, 99999999);
            $y .= '.' . $x;
            if (move_uploaded_file($file["tmp_name"], "../../../img/burgers/" . $y)) {
                $img = $y;
            }
        }
    }
}

var_dump($_POST);

$query = "UPDATE snacks SET name='$name', info='$info', img='$img', price='$price', discPrice='$discPrice', date='$date' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
