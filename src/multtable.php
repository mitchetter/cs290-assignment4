<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Multiplication Table</title>
</head>
<body>
	<?php
	$minmultiplicand = $_GET["min-multiplicand"];
	$maxmultiplicand = $_GET["max-multiplicand"];
	$minmultiplier = $_GET["min-multiplier"];
	$maxmultiplier = $_GET["max-multiplier"];
	$errorFlag = false;

	if ($minmultiplicand == ""){
		echo "min-multiplicand is empty.<br/>";
		$errorFlag = true;
	} else if(!is_numeric($minmultiplicand)){
		echo "min-multiplicand is not a number.<br/>";
		$errorFlag = true;
	} else if(!ctype_digit($minmultiplicand)){
		echo "min-multiplicand is not an integer.<br/>";
		$errorFlag = true;
	} 
	
	if ($maxmultiplicand == ""){
		echo "max-multiplicand is empty.<br/>";
		$errorFlag = true;
	} else if(!is_numeric($maxmultiplicand)){
		echo "max-multiplicand is not a number.<br/>";
		$errorFlag = true;
	} else if(!ctype_digit($maxmultiplicand)){
		echo "max-multiplicand is not an integer.<br/>";
		$errorFlag = true;
	}

	if ($minmultiplier == ""){
		echo "min-multiplier is empty.<br/>";
		$errorFlag = true;
	} else if(!is_numeric($minmultiplier)){
		echo "min-multiplier is not a number.<br/>";
		$errorFlag = true;
	} else if(!ctype_digit($minmultiplier)){
		echo "min-multiplier is not an integer.<br/>";
		$errorFlag = true;
	}

	if ($maxmultiplier == ""){
		echo "max-multiplier is empty.<br/>";
		$errorFlag = true;
	} else if(!is_numeric($maxmultiplier)){
		echo "max-multiplier is not a number.<br/>";
		$errorFlag = true;
	} else if(!ctype_digit($maxmultiplier)){
		echo "max-multiplier is not an integer.<br/>";
		$errorFlag = true;
	}

	if($errorFlag == true){ //display the invalid input error if needed
		echo "The input was invalid. Correct the listed errors and retry.<br/>";
	}else{
		$minmultiplicand = intval($minmultiplicand);
		$maxmultiplicand = intval($maxmultiplicand);
		$minmultiplier = intval($minmultiplier);
		$maxmultiplier = intval($maxmultiplier);

		$height = ($maxmultiplicand - $minmultiplicand) + 2;
		$width = ($maxmultiplier - $minmultiplier) + 2;
		if($height <= 0){ //make sure that the minimums are less than the maximums
			$errorFlag = true;
			echo "The max-multiplicand must be greater than the min-multiplicand.<br/>";
		} else if($width <= 0){
			$errorFlag = true;
			echo "The max-multiplier must be greater than the min-multiplier.<br/>";
		}

		if($errorFlag == false){
			echo "Here is your multiplication table:<br>";
			echo "<table border='1'><tr> <td> </td>";
			for($i=$minmultiplier; $i<=$maxmultiplier; $i++){ 
				echo "<td>".$i."</td>";
			}
			echo "</tr>";
			for($i=$minmultiplicand; $i<=$maxmultiplicand; $i++){
				echo "<tr> <td>".$i."</td>";
				for($k=$minmultiplier; $k<=$maxmultiplier; $k++){ 
					echo "<td>".($k*$i)."</td>";
				}
				echo "</tr>";

			}
			echo "</table>";
			}
		}
	?>
</body>
</html>