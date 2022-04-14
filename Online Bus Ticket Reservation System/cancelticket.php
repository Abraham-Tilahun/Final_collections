	<?php
	require'connection.php';
	mysqli_select_db($con,'bus_ticket');
	$phone=$_POST['phone'];
	$sql = "DELETE FROM userregister WHERE phone='$phone'";
	$cancl=mysqli_query($con,$sql);
	if ($cancl) {
	header("location:cancel2.html");
	} 
	else {
	echo "Error deleting record: ".mysqli_error($con);
	}
	?>