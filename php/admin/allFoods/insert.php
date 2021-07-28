<?php

require_once "../../db.php";

$name = $_POST["name"];
$info = $_POST["info"];
$price = $_POST["price"];
$discPrice = $_POST["discPrice"];
$categoriesId = $_POST["categoriesId"];
$img = "";
$date = time();


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

$query = "INSERT INTO all_foods (name, info, price, discPrice, categories_id, img, date)
VALUES ('$name', '$info', '$price', '$discPrice', '$categoriesId', '$img', '$date')";

$result = mysqli_query($mysqli, $query);


if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../burgers.php");
}