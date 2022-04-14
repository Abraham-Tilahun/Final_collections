
<?php
	
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
		header("location: sesionlog.php");
		exit();
	}
	$session_id=$_SESSION['id'];
	include("date.php");
?>



