<?php

require_once "../../db.php";

$id = $_GET["id"];
$name = $_POST["name"] ? $_POST["name"] : $_GET["name"];
$info = $_POST["info"] ? $_POST["info"] : $_GET["info"];
$price = $_POST["price"] ? $_POST["price"] : $_GET["price"];
$discPrice = $_POST["discPrice"];
$img = "";
$date = time();


foreach ($_FILES as $key => $file) {
    if ($file["error"] == 0) {
        $arr = explode("/", $file["type"]);
        $x = end($arr);
        if (preg_match("/(png || jpg || jpeg)/", $x)) {
            $y = mt_rand(1000000, 99999999);
            $y .= '.' . $x;
            if (move_uploaded_file($file["tmp_name"], "../../../img/Beverages/" . $y)) {
                $img = $y;
            }
        }
    }
}

$img = $img ? $img : $_GET["img"];

$query = "UPDATE beverages SET name='$name', info='$info', img='$img', price='$price', discPrice='$discPrice', date='$date' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
