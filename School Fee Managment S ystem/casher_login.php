	<?php
	include("connection.php");
	mysqli_select_db($con,"schoolFee");
	$fetch="SELECT first_name,password from casher_info";
	$fetch_excute=mysqli_query($con,$fetch);
	if(!$fetch_excute){
	die("excution failed".mysqli_error($con));
	}
	else
	{
	echo "fatched";
	while($row =mysqli_fetch_assoc($fetch_excute)){
	$casher_name=$row["first_name"];
	$password=$row["password"];
	if($_POST["name"]==$casher_name && $_POST["pass"]==$password){
	header("location:casher.html");
	}
	else {
	header("location:casher_login_tryagain.html");
	}
	}
	}
	?>