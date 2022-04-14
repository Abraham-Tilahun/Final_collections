<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head><?php
	include("../includes/db.php");
session_start();
 if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
 }
 else{
 
?>

<script>
alert('please login');
alert(window.location='/111/login.php');
</script>
<?php
}

?>
<?php
$transum=$_SESSION['SESS_MEMBER_ID'];
?>
 <?php
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>

<html >
<head>
<title>Online cinema ticket booking system</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
</head>
	<body bgcolor="black">
	<div>	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td>
	<img src="staff.php" alt="" width=910 height=150>
		<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px ></font>';
?>	
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="eight"><a href="addproduct.php" class="main current"><span class="outer"><span class="inner settings">addmovie</span></span></a></li> 
		<li class="item first" id="one"><a href="delmovie.php" class="main current"><span class="outer"><span class="inner reports">delate movie</span></span></a></li> 
<li class="item first" id="one"><a href="searchmovie.php" class="main current"><span class="outer"><span class="inner reports">searchmovie</span></span></a></li>        
    <li class="item first" id="one"><a href="staffpro.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="four"><a href="vieworders.php" class="main"><span class="outer"><span class="inner media_library">veiworders</span></span></a></li>  
	
</div>
</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>
<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<img src="image11/engineer.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
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
echo"<script>alert('new password and confirm password is not much !!');</script>";
}
if(!$result)
{
die("Query update is failed" .mysql_error());
}
else
{

echo"<script>alert('update password sucessfully !!');</script>";
 echo'<meta content="5;changepass.php" http-equiv="refresh" />';
}
}
else
{

echo"<script>alert('wrong old password !!');</script>";
 echo'<meta content="5;changepass.php" http-equiv="refresh" />';
}
}
?>
</fieldset>
</table>
	

<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/58.jpg" alt="" width=150 height=300/>
<img src="image11/02.jpg" alt="" width=150 height=300/>
<img src="image11/01.jpg" alt="" width=150 height=300/>
<img src="image11/57.jpg" alt="" width=150 height=300/>
<img src="image11/59.jpg" alt="" width=150 height=300/>
<img src="image11/62.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>
		</tr>
		<tr>
		<td>
		</td>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,&copy;2009/2017, HibretHotelCinema @DEBRE TABOR UNIVERSITY! All RIghts Reserved<br>
 .</p>
		</td>
		</tr>
		</table>
		</body>
		</html>
