<?php

require_once "../../db.php";

$name = $_POST["name"];
$position = $_POST["position"];
$img = $_POST["img"];
$id = $_POST["id"];

foreach ($_FILES as $key => $file) {
    if ($file["error"] == 0) {
        $arr = explode("/", $file["type"]);
        $x = end($arr);
        if (preg_match("/(png || jpg || jpeg)/", $x)) {
            $y = mt_rand(1000000, 99999999);
            $y .= '.' . $x;
            if (move_uploaded_file($file["tmp_name"], "../../../img/chefs/" . $y)) {
                $img = $y;
            }
        }
    }
}


$query = "UPDATE chefs SET name='$name', position='$position', img='$img' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../chefs.php");
}
