<?php
	include("connection.php");
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
		if(!$sql_selectdb){
			die(" database selection failed".mysqli_error());
		}
	$sql_teacher_table="CREATE TABLE teacher_info (id int NOT NULL PRIMARY KEY,first_name varchar(20) NOT NULL,middle_name varchar(20) NOT NULL,last_name varchar(20) NOT NULL,password varchar(20) NOT NULL)";
	//$sql_createt=mysqli_query($con,$sql_teacher_table);
		//if(!$sql_createt){
		//	die(" table creation failed".mysqli_error($con));
		//}
	$sql_teacher_info="INSERT INTO teacher_info (id,first_name,middle_name,last_name,password) values(12,'aman','kasa','setegn','12ab')";
	$sql_insert=mysqli_query($con,$sql_teacher_info);
		if(!$sql_insert){
			die(" data insertion failed".mysqli_error($con));
		}
?>