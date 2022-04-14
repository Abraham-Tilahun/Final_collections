<?php
//session_start();

if(!isset($_SESSION['Send']))

$fname=$_POST["FirstName"];
$EmpId=$_POST["EmployeeId"];
$con=$_POST["cont"];
if(!strlen($_POST["FirstName"])||!strlen($_POST["EmployeeId"])||!strlen($_POST["cont"])){
$msg="You Need To Fill All The Required Field/s.";

}
elseif(!is_numeric($_POST["EmployeeId"]))
   {
     $msg="Please, You need to enter numbers only on the id Field.";
	 
	    }
		else{


$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$msg="no connection established";		
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
{
mysql_query("INSERT INTO feedback VALUES ('', '$fname', '$EmpId','$con')");
$message='<div align="center" ><strong><font color="Green" font-size="+2">Thanks For Your Comment</font></strong></div>';
}


mysql_close($db);
}
include('ufeedback_2.php');
?>