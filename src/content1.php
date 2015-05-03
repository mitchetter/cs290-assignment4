<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Content1</title>
</head>
<body>
	<?php
	if(empty($_POST['username']) && !isset($_SESSION['username'])){
		echo "You are not logged in, please visit the login page <a href='login.php'>HERE</a>";
	} 
	else{
		if(session_status() == PHP_SESSION_ACTIVE){
			if(isset($_POST['username'])){
				$_SESSION['username'] = $_POST['username'];
			}
			if(!isset($_SESSION['page1count'])){
				$_SESSION['page1count'] = 0; 
			}
			$_SESSION['page1count']++;
			echo "$_SESSION[username]! You have visited this page $_SESSION[page1count] times. <br>";
			echo "<a href ='content2.php'>CLICK</a> to visit Page 2. <br>";
			echo "<a href='login.php?logout=true'>Log out</a>";
		}
	}
	?>
</body>
</html>
