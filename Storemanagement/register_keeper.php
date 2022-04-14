<?php
//session_start();

if(!isset($__SESSION['Register']))

$a=$_POST["FirstName"];
$k=$_POST["MiddleName"];
$b=$_POST["LastName"];
$c=$_POST["EmployeeId"];
$d=$_POST["Gender"];
$e=$_POST["Age"];
$f=$_POST["Address"];
$g=$_POST["PhoneNumber"];
$h=$_POST["Salary"];
$i=$_POST["department"];
if(!strlen($_POST["FirstName"])||!strlen($_POST["MiddleName"])||!strlen($_POST["LastName"])||!strlen($_POST["EmployeeId"])||!strlen($_POST["Age"])
||!strlen($_POST["Address"])||!strlen($_POST["Salary"])||!strlen($_POST["department"])){
$message="You Need To Fill All The Required Field/s.";

}
elseif(!is_numeric($_POST["Age"])||!is_numeric($_POST["EmployeeId"])||!is_numeric($_POST["Salary"])||!is_numeric($_POST["PhoneNumber"]))

   {
     $message="Please, You need to enter numbers only on the age,id,Phone Number and Salary Field.";
	 
	    }
		elseif($_POST['FirstName']==strval(intval($_POST['FirstName']))||$_POST['LastName']==strval(intval($_POST['LastName']))){
		$message="Please Enter Characters In The FirstName,LastName,type Fields.";}
		else
		{



$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM keeper where EmpId='$c'"); 
$count=mysql_num_rows($sql);

if($count<='0'){
mysql_query("INSERT INTO keeper VALUES ('$a','$k', '$b', '$c','$d', '$e', '$f','$g','$h','$i')"); 
 $message= "You successfully added to the database...."; }
 else
$message="sorry! EmpId must be unique";
mysql_close($db);
}
include('regkeeper_2.php');
?>