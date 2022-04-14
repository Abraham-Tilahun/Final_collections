<?php
//session_start();

if(!isset($_SESSION['Submit']))
//header('location: Index.php');
$name=$_POST["uname"];
$Iid=md5($_POST["pword"]);
$pr=$_POST["empid"];
$Qaun=$_POST["type"];
$mod=$_POST["stat"];
if(!strlen($_POST["uname"])||!strlen($_POST["pword"])||!strlen($_POST["empid"])||!strlen($_POST["type"])
||!strlen($_POST["stat"])){
$message="You Need To Fill All The Required Field/s.";
}

		elseif($_POST['type']==strval(intval($_POST['stat']))){
		$message="Please Enter Characters In The Account Status Field.";
				}
		else{
		

$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM accou where EmpId='$pr'");//VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
$count=mysql_num_rows($sql);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){

$insert=mysql_query("INSERT INTO `accou` VALUES ('', '$name', '$Iid', '$pr','$Qaun', '$mod')"); 
if(!$insert){
//$message='<div align="center" ><strong><font color="red" font-size="+2">Employee Id Must Be Unique!!</font></strong></div>';
}
else{
$message='<div align="center" ><strong><font color="Green" font-size="+2">The Account Created Successfully!!!</font></strong></div>';
}
}

mysql_close($db);
}
include('signup_2.php');

?>