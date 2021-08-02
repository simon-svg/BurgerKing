<?php

require_once "../../db.php";

$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$img = $_POST["img"];

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

$query = "INSERT INTO home (title, subtitle, img)
VALUES ('$title', '$subtitle', '$img')";

$result = mysqli_query($mysqli, $query);


if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../homeSection.php");
}