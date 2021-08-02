<?php

require_once "../../db.php";

$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$img = $_POST["img"];
$id = $_POST["id"];


foreach ($_FILES as $key => $file) {
    if ($file["error"] == 0) {
        $arr = explode("/", $file["type"]);
        $x = end($arr);
        if (preg_match("/(png || jpg || jpeg)/", $x)) {
            $y = mt_rand(1000000, 99999999);
            $y .= '.' . $x;
            if (move_uploaded_file($file["tmp_name"], "../../../img/home/" . $y)) {
                $img = $y;
            }
        }
    }
}

$query = "UPDATE home SET title='$title', subtitle='$subtitle', img = '$img' WHERE id='$id'";


$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../homesection.php");
}
