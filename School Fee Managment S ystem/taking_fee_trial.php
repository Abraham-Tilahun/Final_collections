<?php
 include("connection.php");
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
	if($sql_selectdb){
		echo "database selected";	
	}
		$sql_insert="INSERT INTO	taking_fee(id,first_name,middle_name,last_name,age,sex,grade,section,tele,date,amount,month,remark)values('$_POST[Student_Id]','$_POST[First_name]','$_POST[Middle_name]','$_POST[Last_name]','$_POST[age]','$_POST[sex]','$_POST[grade]','$_POST[section]','$_POST[phone_number]','$_POST[payment_date]','$_POST[payment_amount]','$_POST[month]','$_POST[remark]');";
		$sql_inserting=mysqli_query($con,$sql_insert);
		if($sql_inserting){
			echo "data inserted successfuly";
			header("location:taking_fee_form.html");
		}
		else {
			die(" inserting failed".mysqli_error($con));
		}
	?>