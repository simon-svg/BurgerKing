<?php

require_once "../../db.php";

$name = $_POST["name"];
$id = $_POST["id"];
$info = $_POST["info"];
$img = $_POST["img"];

foreach ($_FILES as $key => $file) {
    if ($file["error"] == 0) {
        $arr = explode("/", $file["type"]);
        $x = end($arr);
        if (preg_match("/(png || jpg || jpeg)/", $x)) {
            $y = mt_rand(1000000, 99999999);
            $y .= '.' . $x;
            if (move_uploaded_file($file["tmp_name"], "../../../img/foods/" . $y)) {
                $img = $y;
            }
        }
    }
}

$query = "UPDATE food_categories SET name='$name', info='$info', img='$img' WHERE id='$id'";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../foodCategories.php");
}
