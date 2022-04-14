	<?php
	require'connection.php';
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	mysqli_select_db($con,'bus_ticket');
	$sql="INSERT INTO signup(firstname,lastname,username,password)VALUES('$firstname','$lastname','$username','$password')";
	if(mysqli_query($con,$sql)){
	header("location:login.html");
	}
	else{
	echo"Error while insertion".mysqli_error($con);
	}
	mysqli_close($con);
	?>