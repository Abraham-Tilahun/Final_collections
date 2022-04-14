

<?php
	include("../../includes/db.php");

  
 session_start();


//$mail=$_POST['mail'];
//$pass=$_POST['pass'];
if(isset($_SESSION['SESS_MEMBER_ID']))
 {
  $mail=$_SESSION['SESS_MEMBER_ID'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../../login.php');
 </script>
 <?php
 }
 ?>
 <?php
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Masiyas Electronic Shopping</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="../../images/App Icon.ico"/>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../febe/style.css" type="text/css" media="screen" charset="utf-8">
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	
	function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    alert(window.location='../../login.php');

   }
   else
   {
    return false;

   }
  }
  </script>
  
 

<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body>
	<table  width="910"  align=center >
	
	<tr><td style="background:url('../images1/wrapsper-bg.png');" width=910 height=150 >
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../../logout.php" onClick="isConfirmloggg();">logout</a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px >Manager</font>';
?>		
		
		
		
		
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="manager.php" class="main"><span class="outer"><span class="inner dashboard1">Order</span></span></a></li>
		<li class="item first" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  
		<li class="item first" id="eight"><a href="product.php" class="main current"><span class="outer"><span class="inner settings">Products</span></span></a></li>        
    		<li class="item first" id="eight"><a href="report.php" class="main current"><span class="outer"><span class="inner reports">Report</span></span></a></li> 
<li class="item first" id="one"><a href="profile.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>			
			<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
	
</div>
</td>
</tr>
<tr>
<td id="table1">

	<div align="center">

<form  method='POST' action='profile.php' onsubmit='return formValidation()'>
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:15px 25px 10px black;" width="450" height="300px">
<tr><td colspan=3 align=center><font color=black> Please Edit Your Profile details 
</td></tr>
<tr><td align=center>
	
</form>
<?php
$user_id=$_SESSION['mail'];
$query="select * from user where email='$user_id'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not added".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];
$r6=$row[6];
$r7=$row[7];
$r8=$row[8];
$r9=$row[9];

}
echo"
<form action='profile.php' method='POST'>
<table border='0' valign='top' id='updt'>
<tr><td><font color=black>Fname:</td><td><input type='text'name='select' value='$r0'></td></tr><br/>
<tr><td><font color=black>Lname:</td><td><input type='text'name='fname' value='$r1'></td></tr><br/>
<tr><td><font color=black>Gender:</td><td><input type='text'name='lname' value='$r2'></td></tr><br/>
<tr><td><font color=black>E-mail:</td><td><input type='text'name='email'value='$r3'></td></tr><br/>
<tr><td><font color=black>City:</td><td><input type='text'name='city'value='$r8'></tr></td><br/>
<tr><td><font color=black>Mobile:</td><td><input type='text'name='mobile'value='$r6'></tr></td><br/>
<tr><td colspan=2 align=center><input type='submit' class='button_example' name='update' value='update'></tr></td></table>";
}

?>
 <?php
  if(isset($_POST['update']))
  {
  $select=$_POST['select'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pass=$_POST['city'];
  $rpass=$_POST['mobile'];
  $update = mysql_query("update user set Name='{$select}',Lname='{$fname}',
  email='{$email}',city='{$pass}',Mobile='{$rpass}' where email='{$email}'") or die(mysql_error());
  echo"<p  class='success'> Successful! </p>";

  }
  ?>

</table>
	

</div>
</div>
		
			
			
				
		
		
		
		
		</td>
		</tr>
		<tr>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
		</td>
		</tr>
		</table>
		
</body>
</html>