
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id=$_GET['Id'];
$Name=$row['excName'];
//$Email=$row['email'];
$UserName=$row['excUName'];
$Password=$row['excPassword'];
//$Department=$row['dept_name'];
$Status=$row['cmbStatus'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to Update Record
$sql = "Update exam_committee set exam_committee.EC_ID='".$Id."',exam_committee.EC_Name='".$Name."',exam_committee.username='".$UserName."',exam_committee.password='".$Password."',exam_committee.Status='".$Status."' where exam_committee.EC_ID='".$Id."'";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Exam Committee Updated Succesfully");window.location=\'ECommittee.php\';</script>';
?>
</body>
</html>
