<?php
	if (isset($_POST['Submit'])) {
	$uname=$_POST["un"];
	$status=$_POST["sel"];
	//header('location: manageuser.php');
$config=mysql_connect("localhost","root","");
if(!$config){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$config);
if($status=='Disable'){
$qry="select * from accou where username='".$uname."'";
$results = mysql_query($qry,$config) or die(mysql_error());


$count=mysql_num_rows($results);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count>'0'){
$sql="update accou set status='inactive' WHERE username='$uname' ";
$res=mysql_query($sql) or die("query error".mysql_error());
$message='<div align="center" ><strong><font color="green" font-size="+2">The UserName becomes Inactive!!!</font></strong></div>';
//$message="The Account becomes Inactive!!!";
//if(!$results) {
		
		
		//include("log.php");
	} 
	else 
	{
	$message='<div align="center" ><strong><font color="red" font-size="+2"> The Username is already blocked!! </font></strong></div>';
	//$message= "<center> The Username is already blocked!!  </center>";
			//mysql_query("UPDATE accou SET status='inactive' WHERE username=$uname");
			}
			}
			
elseif($status=='Enable'){
$qry="select * from accou where username='".$uname."' and status='inactive'";
$results = mysql_query($qry,$config) or die(mysql_error());
$count=mysql_num_rows($results);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){

//if(!$results) {
		$message='<div align="center" ><strong><font color="red" font-size="+2">the User Status is Already Active!!! </font></strong></div>';
		//$message= "<center>the User Status is Already Active!!!  </center>";
		//include("log.php");
	} 
	else 
	{
	
	$sql="update accou set status='active' WHERE username='$uname' ";
	//$message='<div align="center" ><strong><font color="Green" font-size="+2">The Account Activated Successfully!!!</font></strong></div>';
$res=mysql_query($sql) or die("query error".mysql_error());
$message='<div align="center" ><strong><font color="Green" font-size="+2">The User is Activated !!!!</font></strong></div>';
			//mysql_query("UPDATE accou SET status='inactive' WHERE username=$uname");
			}
			}
	
	
	}
	
	include('manageuser_2.php');

?>