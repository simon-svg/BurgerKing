<?php

require_once "../../db.php";

$title1 = $_POST["title1"];
$title2 = $_POST["title2"];
$title3 = $_POST["title3"];
$info1 = $_POST["info1"];
$info2 = $_POST["info2"];
$info3 = $_POST["info3"];
$categories = $_POST["categories"];
$comments = $_POST["comments"];
$img = $_POST["img"];
$id = $_GET["id"];
$date = time();


foreach ($_FILES as $key => $file) {
    if ($file["error"] == 0) {
        $arr = explode("/", $file["type"]);
        $x = end($arr);
        if (preg_match("/(png || jpg || jpeg)/", $x)) {
            $y = mt_rand(1000000, 99999999);
            $y .= '.' . $x;
            if (move_uploaded_file($file["tmp_name"], "../../../img/blogGrid/" . $y)) {
                $img = $y;
            }
        }
    }
}

$query = "UPDATE food_blog SET title1='$title1', title2='$title2', title3='$title3', info1='$info1', info2='$info2', info3='$info3',
img='$img', categories='$categories', comments='$comments', date='$date' WHERE id='$id'";

$result = mysqli_query($mysqli, $query);

if (!$result) {
    echo mysqli_error($mysqli);
} else {
    header("Location: ../index.php");
}
