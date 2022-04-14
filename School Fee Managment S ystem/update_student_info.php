<?php
	include("connection.php");
	mysqli_select_db($con,'schoolFee');
	$sql_selection="SELECT id from student_info";
	$result=mysqli_query($con,$sql_selection);
		if(!$result){
			echo ("selection faild".mysqli_error($con));
		}
	else {
		$updid=$_POST["id"];
		$sql = "DELETE FROM student_info WHERE id='$updid'";

	if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header("location:student_registration.php");
	} else {
    echo "Error deleting record: " . $con->error;
	}}
?>