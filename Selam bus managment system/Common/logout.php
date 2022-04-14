<?php
session_start();
if(isset($_SESSION['username'])){ 
	unset($_SESSION['username']);
	unset($_SESSION['role']);
	header("Location: ../home.php"); // Redirecting To Home Page
}

/*if(session_destroy()) // Destroying All Sessions
{
header("Location: home.php"); // Redirecting To Home Page
}*/
?>