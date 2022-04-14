		<?php
		$x=0;
		require'connection.php';
		$username=$_POST['username'];
		$password=$_POST['password'];
		mysqli_select_db($con,'bus_ticket');
		$select="SELECT  * from signup where username='$username' && password='$password'";
		$result=mysqli_query($con,$select);
		while($row=mysqli_fetch_assoc($result))
		{
		if($username==$row['username'] and $password==$row['password']){
		$x=1;
		}
		}
		if($x==1){
		header("location:add.html");
		}
		else{
		include("failedlogin.php");
		}

		?>