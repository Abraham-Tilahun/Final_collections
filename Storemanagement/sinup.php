<?php
session_start();

if(!isset($__SESSION['Submit']))
//$d=$_POST["type"];
//header("location: login.php");
$a=$_POST["uname"];
$b=$_POST["pword"];
$c=$_POST["fname"];
$d=$_POST["lname"];
$e=$_POST["eid"];
$f=$_POST["type"];
$g=$_POST["stat"];
    if(!strlen($_POST["uname"])||!strlen($_POST["pword"])||!strlen($_POST["fname"])||!strlen($_POST["lname"])
||!strlen($_POST["eid"])||!strlen($_POST["type"])||!strlen($_POST["stat"])){
$message="You Need To Fill All The Required Field/s.";
}
elseif(!is_numeric($_POST["eid"]))
   {
     $message="Please, You need to enter numbers only on the id Field.";
	 
	    }
		elseif($_POST['fname']==strval(intval($_POST['fname']))||$_POST['lname']==strval(intval($_POST['lname']))
		||$_POST['stat']==strval(intval($_POST['stat']))){
		$message="Please Enter Characters In The FirstName,LastName,type Fields.";
				}
		else{
$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM user where EmpId='$e'"); 
$count=mysql_num_rows($sql);

if($count<='0'){
mysql_query("INSERT INTO account VALUES ('$a','$b','$c','$d','$e','$f','$g')"); 
 $message= "You successfully added to the database...."; }
 else
$message="sorry! EmpId must be unique";
mysql_close($db);
}
include('signup_2.php')
?>