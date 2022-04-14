	<?php
 include("connection.php");
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
	if($sql_selectdb){
		echo "database selected";	
	}
		$sql = "CREATE TABLE taking_fee(id varchar(20) NOT NULL PRIMARY KEY,first_name varchar(20) NOT NULL,middle_name varchar(20) NOT NULL,last_name varchar(20) NOT NULL,age int NOT NULL,sex varchar(8) NOT NULL,address varchar(30) NOT NULL,grade int NOT NULL,section varchar(30) NOT NULL,tele int NOT NULL,date Date NOT NULL,amount int NOT NULL,month varchar(20) NOT NULL,remark varchar(20) NOT NULL);";
		$create_table=mysqli_query($con,$sql);
		if($create_table){
			echo " table created successfuly";
		}
		else {
			die(" table creation failed".mysqli_error($con));
		}
	?>
