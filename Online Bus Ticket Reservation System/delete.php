		<?php
		require'connection.php';
		mysqli_select_db($con,'bus_ticket');
		$f=$_POST['phone'];
		$sql = "DELETE FROM userregister WHERE PHONE='$f'";
		if (mysqli_query($con,$sql)) {
			echo "sucessfully deleted";
		} 
		else {
			echo "Error deleting record: ".mysqli_error();
		}
		?>