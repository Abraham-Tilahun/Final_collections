	<?php
	$servername="localhost";
	$username="root";
	$pass="";
	$con=mysqli_connect($servername, $username,$pass);
	if(!$con){
	die("the connection failed".mysqli_connect_error());
	}
	else{
	echo "connected sucessfully"."<br>";
	}
	?>