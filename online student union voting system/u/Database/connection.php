<?php
$server="localhost";
$dbuser="root";
$dbpass="";
$dbname="uogosuvs";
$conn= new mysqli($server,$dbuser,$dbpass,$dbname) ;
if(!$conn)
					             die ("connection failed".mysqli_error);
//mysqli_select_db($dbname) or die(mysqli_error());
?>