<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$movie_name=$_POST['movie_name'];
	$price=$_POST['price'];
	$seat=$_POST['seat'];
	$time=$_POST['time'];
	mysql_query("UPDATE movie_name SET type='$type', price='$price', movie_name='$movie_name', numseats='$seat', time='$time' WHERE id='$roomid'");
	header("location: muvy.php");
?>