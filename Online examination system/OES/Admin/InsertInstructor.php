
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
        $Id=$_POST['instID'];
         $Name=$_POST['instName']; 
         $Email=$_POST['instEmail'];
         $UserName=$_POST['instUName'];
         $Password=$_POST['instPassword'];
	$Department=$_POST['cmbDept'];
        
	$Status=$_POST['cmbStatus'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("oes", $con);
	// Specify the query to Insert Record
	$sql = "insert into instructor	(Inst_ID,Inst_Name,dept_name,email,username,password,Status) 
                values('".$Id."','".$Name."','".$Department."','".$Email."','".$UserName."','".$Password."','".$Status."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'Instructor.php\';</script>';

?>
</body>
</html>
