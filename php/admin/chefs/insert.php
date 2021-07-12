<?php

require_once "../../db.php";

$name = $_POST["name"];
$position = $_POST["position"];
$img = "";


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

$query = "INSERT INTO chefs (name, position, img) VALUES ('$name', '$position', '$img')";

$result = mysqli_query($mysqli, $query);


if(!$result){
    echo mysqli_error($mysqli);
}
else{
    header("Location: ../index.php");
}