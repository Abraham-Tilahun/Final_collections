
<?php
	session_start();
		if (!isset($_SESSION['userName'])) {
		header('Location: login.php');
		exit; 
		}
	else{
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		session_destroy(); 
		header('Location: login.php');
	} 
?>

