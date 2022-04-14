<?php
include("../includes/db.php");
    $total_seat=$_POST['total_seat'];
    $freeseatleft=$_POST['freeseatleft'];
	$roomid = $_POST['roomid'];
	$brand=$_POST['brand'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$movie_type=$_POST['movie_type'];
	$description=$_POST['description'];
	mysql_query("UPDATE products SET total_seat='$total_seat' ,freeseatleft='$freeseatleft',movie_type='$movie_type',MovieName='$brand',movieseendate='$type', movie_price='$rate', movie_description='$description' WHERE movie_id='$roomid'");
	header("location: movie.php");
?>