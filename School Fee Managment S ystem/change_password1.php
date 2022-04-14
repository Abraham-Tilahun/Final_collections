<?php
	include("connection.php");
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
	if(!$sql_selectdb){
		die("selection failed".mysqli_error());
	}
	$fetch="SELECT id,password from teacher_info";
	$fetch_excute=mysqli_query($con,$fetch);
		if(!$fetch_excute){
		die("excution failed".mysqli_error());
	}
	else{
		echo "selected sucesffuly";
		while($row =mysqli_fetch_assoc($fetch_excute)){
		if($_POST["pass"]==$row["password"] && $_POST["id"]==$row["id"]){
			$new=$_POST['newpass'];
			$old=$_POST['pass'];
			$id=$_POST['id'];
			$sql_ch="UPDATE teacher_info set password=$new ;";
		$sql=mysqli_query($con,$sql_ch);
		if(!$sql){
		die("excution failed".mysqli_error($con));
			}
			header("location:teacher_login.html");
		}
		else {
			header("location:change_teacher_password_tryagain.html");
		}
		}
	}
?>