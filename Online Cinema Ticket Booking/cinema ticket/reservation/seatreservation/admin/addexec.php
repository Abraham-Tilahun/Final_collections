<?php
include('../db.php');
$type=$_POST['type'];
$movie_name=$_POST['movie_name'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$update=mysql_query("INSERT INTO movie_name (type, price, numseats, movie_name, time)
VALUES
('$type','$price','$seat','$movie_name','$time')");
header("location: muvy.php");
?>
