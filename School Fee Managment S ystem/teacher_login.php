	<?php
	include("connection.php");
	mysqli_select_db($con,"schoolFee");
	$fetch="SELECT first_name,password from teacher_info";
	$fetch_excute=mysqli_query($con,$fetch);
	if(!$fetch_excute){
	die("excution failed".mysqli_error($con));
	}
	else
	{
	echo "fatched";
	while($row =mysqli_fetch_assoc($fetch_excute)){
	$teacher_name=$row["first_name"];
	$password=$row["password"];
	if($_POST["name"]==$teacher_name && $_POST["pass"]==$password){
	header("location:teacher.html");
	}
	else {
	header("location:teacher_login_tryagain.html");
	}
	}
	}
	?>