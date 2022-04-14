<?php   
session_start();
include("db.php");	
 if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
 }
 else{
 
?>

<script>
alert('please login');
alert(window.location='/cinema ticket/login.php');
</script>
<?php
}

?>
<?php
$transum=$_SESSION['SESS_MEMBER_ID'];
?>
 
 
  <?php

$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'");
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>
<html>
<head>
	<title>Online ticket booking system</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    	 
</head>
<body bgcolor="">

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr bg color="green">
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.youtube.com" target="_blank"><img src="images/youtube.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>

</td>
</tr>
<tr>
<td >
<img src="customer.PNG" width=900 height=200>
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';

?>

</td>
</tr>
<tr bgcolor="burlywood">
<td >
 <div id="topnav" >

			<div class="shell">
				<ul>
				<li><a href="veiwreg.php" title="">veiwregistration</a></li>
				<li><a href="customerprofile.php" title="">update profile</a></li>
				<!--<li><a href="veiwseat.php" title="">veiw seat</a></li>-->
					<li><a href="\cinema ticket\reservation\seatreservation\index.php">Reservation</a></li>
					<li><a href="/cinema ticket/cinemapayment/order.php" title="">order</a></li>
				<li><a href="/cinema ticket/reservation/seatreservation/admin/dashboard1.php" title="">veiw seat</a></li>

				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		
</div>
</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 
<h2><font size=4>Additional Information</font></h2><br>
		
 	<a href="/111/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact</a><br>
	   <a href="/111/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
		<form  method='POST' action=''>
<table align=center style="border:1px solid black; border-radius:50px;margin-top:35px;box-shadow:15px 25px 10px black;" width="500" height="400px">
<tr><td colspan=3 align=center><font color=black> Change password 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Old Password:</td><td><input type="password" name="password"   placeholder='OldPassword'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>New Password
	</td><td><input type="password" name="pass"  placeholder='NewPassword'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Confirm New password</td><td><input type="password" name="rpass" placeholder='ConfrimPassword'></td></tr>

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
			<h2><p valign=top>Advertise</h3></p><a href="http://">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/58.jpg" alt="" width=150 height=300/>
<img src="image11/02.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/57.jpg" alt="" width=150 height=300/>
<img src="image11/59.jpg" alt="" width=150 height=300/>
<img src="image11/62.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>
		</tr>
		<tr>
		<td>
		</td>
		
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITY.</p>
		</td>
		</tr>
		</table>
		</body>
		</html>
