<?php
	include("../includes/db.php");
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE reservation SET status='$status' WHERE reservation_id='$roomid'");
	header("location: shop.php");
?>