<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Content2</title>
</head>
<body>
	<?php
	
	if(empty($_POST['username']) && !isset($_SESSION['username'])){
		echo "You must be logged in to access this content. Please visit the <a href='login.php'>LOGIN</a> page.";
	} 
	else{
		if(session_status() == PHP_SESSION_ACTIVE){
			if(isset($_POST['username'])){
				$_SESSION['username'] = $_POST['username'];
			}
			if(!isset($_SESSION['page2count'])){
				$_SESSION['page2count'] = 0;
			}
			$_SESSION['page2count']++;
			echo "$_SESSION[username]! You have visited this page $_SESSION[page2count] times. <br>";
			echo "This is the second page of this site.<br>";
			echo "<a href ='content1.php'>CLICK</a> to visit Page 1. <br>";
			echo "<a href='login.php?logout=true'>Log out</a>";
		}
	}
	?>
</body>
</html>