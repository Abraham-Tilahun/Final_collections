  <?php
  require'connection.php';
		mysqli_select_db($con,'bus_ticket');
		$id=$_POST['bus_id'];
		$sql = "DELETE FROM userregister WHERE Bus_ID='$id'";
		if (mysqli_query($con,$sql)) {
			header("location:seeRegisters.php");
		//echo"	sucessfull";
		} 
		else {
			echo "Error deleting record: ".mysqli_error();
		}
  ?>