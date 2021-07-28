<?php

require_once "../../db.php";

$name = $_POST["name"];
$info = $_POST["info"];
$img = "";

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


$query = "INSERT INTO food_categories (name, info, img) VALUES ('$name', '$info', '$img')";

$result = mysqli_query($mysqli, $query);


if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../foodCategories.php");
}