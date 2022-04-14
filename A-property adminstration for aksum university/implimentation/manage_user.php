<?php
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if (isset($_POST['Submit'])) {
$uname=$_POST["un"];
$qry="select * from accou where username='$uname'";
$results = mysql_query($qry) or die(mysql_error());
$row=mysql_fetch_array($results);
$count=mysql_num_rows($results);
if($count>0){
$stat=$row['status'];
if($stat=='enable')
{
$sql="update accou set status='Disable' WHERE username='$uname' ";
  echo 'your account is disabled';
  include('manageuser.php');
	} 
	elseif($stat=='Disable')
	{
	$sql="update accou set status='enable' WHERE username='$uname' ";
 echo 'your account is enabled';
 include('manageuser.php');
	}
	}
			else {
			echo 'there is no account with this username';
			include('manageuser.php');
			}
			
			
			}
	
?>