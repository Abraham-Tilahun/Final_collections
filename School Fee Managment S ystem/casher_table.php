<?php
	include("connection.php");
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
		if(!$sql_selectdb){
			die(" database selection failed".mysqli_error());
		}
	$sql_casher_table="CREATE TABLE casher_info (id int NOT NULL PRIMARY KEY,first_name varchar(20) NOT NULL,middle_name varchar(20) NOT NULL,last_name varchar(20) NOT NULL,password varchar(20) NOT NULL)";
		$sql_createt=mysqli_query($con,$sql_casher_table);
		if(!$sql_createt){
			die(" table creation failed".mysqli_error($con));
		}
	$sql_casher_info="INSERT INTO casher_info (id,first_name,middle_name,last_name,password) values(1,'werkalem','kbru','shgute','1221')";
	$sql_insert=mysqli_query($con,$sql_casher_info);
		if(!$sql_insert){
			die(" data insertion failed".mysqli_error($con));
		}
?>