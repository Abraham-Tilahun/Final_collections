<?php
session_start();

if(!isset($_SESSION['Submit']))

$a=$_POST["FirstName"];
$k=$_POST["MiddleName"];
$b=$_POST["LastName"];
$c=$_POST["EmployeeId"];
$d=$_POST["Gender"];
$e=$_POST["date"];
$f=$_POST["Address"];
$g=$_POST["PhoneNumber"];
$h=$_POST["Salary"];
$i=$_POST["department"];
if(!strlen($_POST["FirstName"])||!strlen($_POST["MiddleName"])||!strlen($_POST["LastName"])||!strlen($_POST["EmployeeId"])||!strlen($_POST["date"])
||!strlen($_POST["Address"])||!strlen($_POST["department"])||!strlen($_POST["Salary"])){
$message="You Need To Fill All The Required Field/s.";

}
elseif(!is_numeric($_POST["EmployeeId"])||!is_numeric($_POST["Salary"])||!is_numeric($_POST["PhoneNumber"]))

   {
    $message='<div align="center" ><strong><font color="red">Please, You need to enter numbers only on the id and Salary Field</font></Strong></div>';
     
	 
	    }
		elseif($_POST['FirstName']==strval(intval($_POST['FirstName']))||$_POST['LastName']==strval(intval($_POST['LastName']))){
		$message="Please Enter Characters In The FirstName,LastName,type Fields.";}
		else
		{



$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM user where EmpId='$c'"); 
$count=mysql_num_rows($sql);

if($count<='0'){
mysql_query("INSERT INTO user VALUES ('$a','$k', '$b', '$c','$d', '$e', '$f','$g','$h','$i')"); 
$message='<div align="center" ><strong><font color="Green" font-size="+2">The User Successfully Registered!!!!!</font></strong></div>';
}
 else
$message="sorry! EmpId must be unique";
mysql_close($db);
}
include('reguser_2.php');
?>