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
<tr bgcolor="green">
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.youtube.com" target="_blank"><img src="images/youtube.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>

</td>
</tr>
<tr>
<td >
<img src="customer.PNG" width=900 height=150>	
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';

?>
</td>
</tr>
<tr>
<td bgcolor="burlywood">
 <div id="topnav" >

			<div class="shell">
			<li><a href="changepass.php" title="">change password</a></li>
					<li><a href="customerprofile.php" title="">update profile</a></li>
					<li><a href="\cinema ticket\reservation\seatreservation\index.php">Reservation</a></li>
				<!--<ul><li><a href="\cinema ticket\reservation\seatreservationprint.php" title="">print</a></li>-->
					<li><a href="veiwreg.php" title="">veiwregistration</a></li>
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
<h2><big style="color:geern" ><font size=3>Information</font></big></h2><br>
		
 	<a href="/111/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="/111/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
<script type='text/javascript'>
function letter_validate(b)
 {
var value=(b.which)?
b.which:
b.keyCode
 return(value >31 && (value <48 || value > 57) || value==8);
}
function number_validate(e)
 {
var value=(e.which)?
e.which:
e.keyCode
 return!(value>=48 && (value <48 || value > 57));
}
	</script>
<form  method='POST' action='bank.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td colspan=3 align=center><font color=black> Bank Information 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text"  name="fname" r placeholder='Fname'onkeypress="return letter_validate(event);"></input></td></tr>

<tr><td><font color=red> * </font><font color=black>Last Name :
	</td><td><input type="text"  name="lname"  placeholder='Lname' onKeyPress="return letter_validate(event);"></input></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Account No :</td><td><input type="text" name="mobile"  placeholder="Account No" onKeyPress="return number_validate(event);"/></td></tr>
<tr><td><font color=red> * </font><font color=black>Amount Birr:</td><td><input type="text" name="cou"  placeholder="Amount Birr" onKeyPress="return number_validate(event);"/></td></tr>
<tr><td><font color=red> * </font><font color=black>Secret Key</td><td><input type="text" name="city"  placeholder='Secret Key'/></td></tr>

<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset'class="button_example"  value='clear'/></td></tr>
	
</form>
<?php
include("connection.php");
if(isset($_POST['submitMain']) )
{
$fname=$_POST['fname'];
$date=$_POST['lname'];
$mo=$_POST['mobile'];
$cou=$_POST['cou'];
$cit=$_POST['city'];
$query="INSERT INTO bank(fname,lname,accountnumber,amountbirr,security)";
$query.="VALUES ('{$fname}','{$date}','{$mo}','{$cou}','{$cit}');";
$result=mysql_query($query);
if(!$result){
echo"<p  class='wrong'><script>alert('unsuccesfull !!');</script></p>";
}
else{
echo"<script>alert('sucessfully !!');</script>";
}


mysql_close($conn);
}
?>
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
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
