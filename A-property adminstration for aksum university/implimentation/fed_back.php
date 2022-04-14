<?php
session_start();
mysql_select_db('storem');
if(!isset($_SESSION['Send']))
$FullName=$_POST["FullName"];
$EmpId=$_POST["EmployeeId"];
$cont=$_POST["cont"];
$date=$_POST["date"];
if(!strlen($_POST["FullName"])||!strlen($_POST["EmployeeId"])||!strlen($_POST["date"])||!strlen($_POST["cont"]))
{
$msg="You Need To Fill All The Required Field/s.";
}
elseif(!is_numeric($_POST["EmployeeId"]))
   {
     $msg="Please, You need to enter numbers only on the id Field.";
	 
	    }
		else{


$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
		}
if(!$db){
$msg="no connection established";	
	}	
mysql_select_db("storem",$db) or die("Couldn't select the database.");
{
mysql_query("INSERT INTO feedback (FullName,EmployeeId,cont,date) VALUES ('$FullName', '$EmpId','$cont','$date')");
    echo '<script language="javascript">';
    echo 'alert("Feedbck is successfully Send..."); location.href="userpage.php"';
    echo '</script>';
}
//include("feedback.php");

?>