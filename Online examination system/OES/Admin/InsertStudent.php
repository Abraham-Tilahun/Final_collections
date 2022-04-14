<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Student</title>
</head>

<body>
<?php

	$ID=$_POST['txtRoll'];
	$Name=$_POST['txtName'];
        $StudDept=$_POST('cmbDept');
        $StudYear=$_POST('cmbYear');
        $StudSem=$_POST('cmbSem');
        $StudEmail=$_POST('cmbEmail');
        $UserName=$_POST('txtUserName');
        $Password=$_POST('txtPassword');
	

	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("oes", $con);
	// Specify the query to Insert Record
	$sql = "insert into student 	(Stud_ID,Stud_Name,dept_name,Year,semister,email,username,password) 	values('".$ID."','".$Name."','".$StudDept."','".$StudYear."','".$StudSem."','".$StudDept."','".$UserName."','".$Password."' )";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("New Student Inserted Succesfully");window.location=\'Student.php\';</script>';

?>
?>
</body>
</html>

