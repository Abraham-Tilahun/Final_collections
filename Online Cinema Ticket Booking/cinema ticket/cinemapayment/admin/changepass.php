
<?php
	include("../includes/db.php");

  
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
  alert(window.location='../login.php');
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
	<link rel="icon" type="image/ico" href="../images/App Icon.ico"/>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
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
    alert(window.location='../login.php');

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
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();">logout</a>'.'</font>';
echo'<p align=left>'.'<font color=white size=15px >	<img src="../image/Capture.PNG">
</font>';

?>
	
		
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		
<l		<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/dashboard.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li> 
		     
    <li class="item first" id="one"><a href="../../admin/manager/profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	<li class="item first" id="one"><a href="../../cinemapayment/admin/message.php" class="main current"><span class="outer"><span class="inner media_library">Message</span></span></a></li>
					<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/reserver information.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li>  
		      <li class="item first" id="eight"><a href="delate.php" class="main current"><span class="outer"><span class="inner settings">delete_news</span></span></a></li>

	<li class="item first" id="one"><a href="/cinema ticket/cinemapayment/admin/movie.php" class="main current"><span class="outer"><span class="inner newsletter">Add Movie</span></span></a></li>
	   
	  
    </ul>
</div>
</td>
</tr>
<tr>
<td >

		<form  method='POST' action='changepass.php' onsubmit='return formValidation()'>
<table align=center style="border:1px solid black; border-radius:50px;margin-top:35px;box-shadow:15px 25px 10px black;" width="500" height="400px">
<tr><td colspan=3 align=center><font color=black> Change password 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Old Password:</td><td><input type="password" name="password" id='old' pattern="\w{8,50}"required x-moz-errormessage=" Please Enter the OldPassword above 8 character" title="Please Enter the OldPassword above 8 character"    placeholder='OldPassword'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>New Password
	</td><td><input type="password" name="pass" id='new' required x-moz-errormessage="Please Enter the NewPassword above 8 character" title=" Please Enter the NewPassword above 8 character" pattern="\w{8,50}" placeholder='NewPassword'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Confirm New password</td><td><input type="password" name="rpass" id='confi' pattern="\w{8,50}" required x-moz-errormessage="Please Enter the ConfrimPassword above 8 character" title="Enter the ConfrimPassword above 8 character" placeholder='ConfrimPassword'></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="update" class="button_example" value="update" Onclick="return check1(this.form);"/>
<input type='reset' class="button_example" value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['update']))
{
$user_id=$_SESSION['mail'];
$password = $_POST['password'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];

$query="select * from user where password='{$password}' and email='{$user_id}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
if($pass==$rpass){
$query="update user set password='{$pass}',	re_typepassword='{$rpass}' 	 where  email='{$user_id}' ";
$result=mysql_query($query);
}
else{
echo"<p  class='wrong'> New Password AND Confirm Password Not Match!</p>";
}
if(!$result)
{
die("Query update is failed" .mysql_error());
}
else
{

echo"<p  class='success'> Update password is succesfull! </p>";
 echo'<meta content="5;changepass.php" http-equiv="refresh" />';

}
}
else
{

echo"<p  class='wrong'> Wrong Old Password!</p>";
 echo'<meta content="5;changepass.php" http-equiv="refresh" />';

}
}
?>

</table>
		<tr>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,&copy;2009/2017, HibretHotelCinema @DEBRE TABOR UNIVERSITY! All RIghts Reserved.</p>
		</td>
		</tr>
		</table>
</body>
</html>