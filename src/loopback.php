<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Loopback</title>
</head>
<body>
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$arr = array("Type" => "GET");
		if($_GET == null){
			$arr["parameters"] = "null";
		} else{
			$arr = array_merge($arr, $_GET); 
		}
		echo json_encode($arr);
	}
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$arr = array("Type" => "POST");
		if($_POST == null){
			$arr["parameters"] = "null";
		} else{
			$arr = array_merge($arr, $_POST);
		}
		echo json_encode($arr);
	}
	?>
</body>
</html>
