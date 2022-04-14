		<?php
		$bus=$_POST["bd"];
		include 'connection.php';
         echo $bus;
		mysqli_select_db($con,'bus_ticket');
		$sql = "DELETE FROM oneway where Bus_ID='$bus'";
           $result=mysqli_query($con,$sql);
		if (!$result) {
			echo "Bus &bid  NOT deleted sucessfully, check it below" .mysql_error();
			
		} 
		else {
			echo " deleted record: ";
			header("location:checkin.html");
		}

		?>