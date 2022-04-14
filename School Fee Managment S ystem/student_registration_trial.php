<?php
 include("connection.php");
 /*$sql_createDatabse="CREATE DATABASE schoolFee";
	$sql_crtdatabase=mysqli_query($con,$sql_createDatabse);
	if(!$sql_crtdatabase){
		die(" database creation failed".mysqli_error());
	}
	else{
		echo "database created sucessfully";
	}*/
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
	if($sql_selectdb){
		echo "database selected";	
	}
	
		/*$sql = "CREATE TABLE student_info("."first_name varchar(20) NOT NULL,"."middle_name varchar(20) NOT NULL,"."last_name varchar(20) NOT NULL,"."id varchar(30) NOT NULL PRIMARY KEY,"."age int NOT NULL,"."sex varchar(8) NOT NULL,"."grade int NOT NULL,"."section varchar(30) NOT NULL,"."tele int NOT NULL,"."date Date
		NOT NULL,"."address varchar(30) NOT NULL);";
		$create_table=mysqli_query($con,$sql);
		if($create_table){
			echo " table created successfuly";
		}
		else {
			die(" table creation failed".mysqli_error($con));
		}*/
		$fname=$_POST["first_name"];
		$mname=$_POST["middle_name"];
		$lname=$_POST["last_name"];
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
   echo "Only letters and white space allowed";
}
		$sql_insert="INSERT INTO student_info"."(first_name,middle_name,last_name,id,age,sex,grade,section,tele,date,address)"." values"."('$_POST[first_name]','$_POST[middle_name]','$_POST[last_name]','$_POST[id]','$_POST[age]','$_POST[sex]','$_POST[grade]','$_POST[section]','$_POST[Telephone]','$_POST[date]','$_POST[address]');";
		$sql_inserting=mysqli_query($con,$sql_insert);
	 if($sql_inserting){
			echo "data inserted successfuly";
		}
		else {
			die(" inserting failed".mysqli_error($con));
		}
	?>