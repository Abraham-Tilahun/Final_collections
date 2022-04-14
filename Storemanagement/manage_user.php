<?php
	if (isset($_POST['Submit'])) {
	$uname=$_POST["un"];
	$status=$_POST["sel"];
	//header('location: manageuser.php');
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
if($status=='Diable'){
$qry="select * from accou where username='".$uname."' and status='active'";
$results = mysql_query($qry,$con) or die(mysql_error());


$count=mysql_num_rows($results);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count>'0'){
$sql="update accou set status='inactive' WHERE username='$uname' ";
$res=mysql_query($sql) or die("query error".mysql_error());
 $message="you have out of a member";
//if(!$results) {
		
		
		//include("log.php");
	} 
	else 
	{
	$message= "<center> the Username is already bloched  </center>";
			//mysql_query("UPDATE accou SET status='inactive' WHERE username=$uname");
			}
			}
			
elseif($status=='Enable'){
$qry="select * from accou where username='".$uname."' and status='inactive'";
$results = mysql_query($qry,$con) or die(mysql_error());


$count=mysql_num_rows($results);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){

//if(!$results) {
		
		$message= "<center>the Username is already amember  </center>";
		//include("log.php");
	} 
	else 
	{
	
	$sql="update accou set status='active' WHERE username='$uname' ";
$res=mysql_query($sql) or die("query error".mysql_error());
 $message="you have a member";
			//mysql_query("UPDATE accou SET status='inactive' WHERE username=$uname");
			}
			}
	
	
	}
	
	include('manageuser_2.php');

?>