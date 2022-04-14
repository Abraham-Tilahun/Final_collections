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
<td >
 <div id="topnav" >

			<div class="shell">
					<li><a href="/cinema ticket/cinemapayment/order.php" title="">order</a></li>
				<li><a href="changepass.php" title="">change password</a></li>
					<li><a href="customerprofile.php" title="">update profile</a></li>
				<li><a href="/cinema ticket/reservation/seatreservation/admin/dashboard1.php" title="">veiw seat</a></li>
					<li><a href="/cinema ticket/cinemapayment/order.php" title="">order</a></li>
			
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		
</div>
</td>
</tr>

	</table>
		
	<table  width="900" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 
<h2><font size=4>Additional Information</font></h2><br>
		
 	<a href="/111/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a><br>
	   <a href="/111/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div valign="top">

<form  method='POST' action='order1.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 valign="top"> 
 <?php
if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $_SESSION['SESS_MEMBER_ID'];
  
 }
?>
<?php
$user_id=$_SESSION['SESS_MEMBER_ID'];
$res=mysql_query("select * from user where email='$user_id'");
$row=mysql_fetch_array($res);
$id=$row['IDNO'];
$fname=$row['Name'];
$lname=$row['Lname'];
$gender=$row['gender'];
$email=$row['email'];
$password=$row['password'];
$mobile=$row['mobile'];
$count=$row['country'];
echo "<center><h3><u> <b> view your registration  form</b></u></h3>";
echo "<table border=1>";
echo "<tr>";
echo "<th>IDNo</th>";
echo "<th>Name</th>";
echo "<th>Lname</th>";
 echo "<th>gender</th>";
 echo "<th>email</th>";
echo "<th > Password</th>"; 
echo "<th >mobile</th>";
echo "<th> Country </th>";
echo "</tr>";
echo "<td>".$id."</td>";
echo "<td>".$fname."</td>";
echo "<td>".$lname."</td>";
echo "<td>".$gender."</td>";
echo "<td>".$email."</td>";
echo "<td>".$password."</td>";
echo "<td>".$mobile."</td>";
echo "<td>".$count."</td>";
echo "</table>";
?>
</td>



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


  
  







