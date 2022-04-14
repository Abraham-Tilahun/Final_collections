<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AU OES</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$UserType=$_POST['cmbType'];

if($UserType==="Administrator")
{
$con = mysql_connect("localhost","root");
mysql_select_db("oes", $con);
$sql = "select * from admin where username='".$UserName."' and password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
echo $records;
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
//die(header("location:index.php"));
}
else
{
 $header=header("location:index.php");
session_start();
$_SESSION['username']=$row['usernsme'];
$_SESSION['header']=$header;

header("location:Admin/index.php");
} 
mysql_close($con);
}

else if ($UserType=="Instructor")
{
$con = mysql_connect("localhost","root");
mysql_select_db("oes", $con);
$sql = "select * from instructor where username='".$UserName."' and password='".$Password."' and Status='Active'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password Or You are Inactivated");window.location=\'index.php\';</script>';
}
else
{
session_start();
$_SESSION['ID']=$row['Inst_ID'];
$_SESSION['Name']=$row['Inst_Name'];
$_SESSION['Dept']=$row['dept_name'];
$_SESSION['Course']=$row['course_name'];
$_SESSION['Email']=$row['email'];
header("location:Instructor/index.php");
} 
mysql_close($con);
}

//
else if ($UserType=="ExamCommittee")
{
$con = mysql_connect("localhost","root");
mysql_select_db("oes", $con);
$sql = "select * from exam_committee where username='".$UserName."' and password='".$Password."' and Status='Active'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
session_start();
$_SESSION['ID']=$row['EC_ID'];
$_SESSION['Name']=$row['EC_Name'];
$_SESSION['Dept']=$row['dept_name'];

header("location:ExamCommittee/index.php");
} 
mysql_close($con);
}

else if ($UserType=="Student")
{

$con = mysql_connect("localhost","root");
mysql_select_db("oes", $con);
$sql = "select * from student where username='".$UserName."' and password='".$Password."' and Status='Active'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password or Inactivated");window.location=\'index.php\';</script>';
}
else
{
session_start();
$_SESSION['ID']=$row['Stud_ID'];
$_SESSION['Name']=$row['Stud_Name'];
$_SESSION['Dept']=$row['det_name'];
$_SESSION['Course']=$row['course'];
$_SESSION['Sem']=$row['Stud_Semister'];
header("location:Student/index.php");
} 
mysql_close($con);

}

?>
</body>
</html>
