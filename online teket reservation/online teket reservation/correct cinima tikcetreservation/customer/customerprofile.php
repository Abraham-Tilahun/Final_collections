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
<body bgcolor="red">

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
<td>
 <div id="topnav" >

			<div class="shell">
				<ul>				<li><a href="veiwreg.php" title="">veiwregistration</a></li>
				<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/dashboard1.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li>  
				<li><a href="changepass.php" title="">changepass</a></li>
					<li><a href="bank.php" title="">creataccount</a></li>
					<li><a href="/cinema ticket/cinemapayment/order.php" title="">order</a></li>
				<li><a href="customerprofile.php" title="">update profile</a></li>
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
<h2><big style="color:geern"><font size=4>Additional Information</font></big></h2><br>
		
 	<a href="/cinema ticket/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="/cinema ticket/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="center" id="idd" style=" background-color:white;">	

&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp update profile form
<div align="center">
<form  method='POST' action='customerprofile'>
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:15px 25px 10px black;" width="450" height="300px">
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
<form action='/cinema ticket/customer/customerprofile.php' method='POST'>
<table border='0' id='updt'>
<tr><td><font color=black>Fname:</td><td><input type='text'name='select' value='$r1'></td></tr><br/>
<tr><td><font color=black>Lname:</td><td><input type='text'name='fname' value='$r2'></td></tr><br/>
<tr><td><font color=black>Gender:</td><td><input type='text'name='lname' value='$r3'></td></tr><br/>
<tr><td><font color=black>E-mail:</td><td><input type='text'name='email'value='$r4'></td></tr><br/>
<tr><td><font color=black>City:</td><td><input type='text'name='city'value='$r9'></tr></td><br/>
<tr><td><font color=black>Mobile:</td><td><input type='text'name='mobile'value='$r7'></tr></td><br/>
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
  if($update)
  echo "<script>alert('sucessfully !!');</script>";
 

  }
  else{
  }
  ?>  
</fieldset>
</table>
	

</div>
</div>

</td>
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
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITY.</p>
</td>
</tr>

</table>
</body>
</html>
