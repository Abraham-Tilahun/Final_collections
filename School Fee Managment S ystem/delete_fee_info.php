<?php
	include("connection.php");
	mysqli_select_db($con,'schoolFee');
		$delid=$_POST["delet_id"];
		$sql = "DELETE FROM taking_fee WHERE id='$delid'";

	if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
	} 
	else {
    echo "Error deleting record: " . $con->error;
	}
?>