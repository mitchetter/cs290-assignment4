<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Login</title>
</head>
<body>
	<?php
	if(isset($_GET['logout']) && $_GET['logout']==true){
		$_SESSION = array();
		session_destroy(); 
		echo "You have been logged out. <br>";
	}
	echo "<form action='content1.php' method='post'>";
	echo "Please enter your username: <br>";
	echo "<input type='text' name='username'>";
	echo "<input type='submit' value='Log In'>";
	echo "</form>";
	?>
</body>
</html>
