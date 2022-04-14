<?php
	include("connection.php");
	mysqli_select_db($con,'schoolFee');
		$updid=$_POST["id"];
		$sql = "DELETE FROM taking_fee WHERE id='$updid'";
	if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header("location:taking_fee.php");
	} 
	else {
    echo "Error deleting record: " . $con->error;
	}
?>