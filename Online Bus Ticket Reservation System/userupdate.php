		<?php
		require 'connection.php';
		mysqli_select_db($con,'bus_ticket');
		$firstname=$_POST['firstname'];
		$middlename=$_POST['middlename'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$sql = "UPDATE userregister set firstname='$firstname',middlename='$middlename',lastname='$lastname', email='$email',phone='$phone' WHERE
		phone='$phone'";
		if (mysqli_query($con,$sql)) {
		header("location:users.php");
		} else 
		{
		echo "Error while updating:".mysqli_error($con);
		}
		?>