<?php
	include("connection.php");
	mysqli_select_db($con,'schoolFee');
	$sql_selection="SELECT id from student_info";
	$result=mysqli_query($con,$sql_selection);
		if(!$result){
			echo ("selection faild".mysqli_error($con));
		}
	else {
		$delid=$_POST["delet_id"];
		$sql = "DELETE FROM student_info WHERE id='$delid'";

	if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
	} else {
    echo "Error deleting record: " . $con->error;
	}}
			//$row =mysqli_fetch_assoc($result);
			//$id=$row['id'];
			//if($id==$_POST['delet_id']){
	/*$sql_del="DELETE FROM student_info where id=='$delid'";
	$result=mysqli_query($con,$sql_del);
		if(!$result){
			echo ("delation faild".mysqli_error($con));			
			}
	 }
	 //else {	echo "the id that you want to delete is not found in the database!";
	 echo "<br>";
	 echo "<a href='teacher.html'>back</a>";
	 */
?>