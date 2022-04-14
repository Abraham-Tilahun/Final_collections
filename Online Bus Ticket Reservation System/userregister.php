		<?php
		require'connection.php';
		$firstname=$_POST['firstname'];
		$middlename=$_POST['middlename'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$bus_ID=$_POST['Bus_ID'];
		$date=$_POST['date'];
		mysqli_select_db($con,'bus_ticket');
		$sql="INSERT INTO userregister VALUES('$firstname','$middlename','$lastname','$email','$phone','$bus_ID','$date')";
		if(mysqli_query($con,$sql))
		{ 
		header("location:checkin.html");  
		}
		else{
		echo"error".mysqli_error($con);
		}
	
		?>