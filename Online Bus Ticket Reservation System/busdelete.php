	<?php
	require'connection.php';
	$bid=$_GET['id'];
	mysqli_select_db($con,'bus_ticket');
	$sql = "DELETE FROM oneway WHERE bid='$bid'";
		if(mysqli_query($con,$sql)){
	header("location:viewbus.php");
	} 
	else {
	echo "Error deleting record: " .mysqli_error($con);
	}
	?>