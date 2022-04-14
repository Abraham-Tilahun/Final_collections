<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head>
<?php   
session_start();
include("db.php");	
 //echo "User".$_SESSION['user'];
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
	<title>Online ticket booking system for Hibret Hotel cinema</title>
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
<em></em>
</td>
</tr>
<tr bgcolor="burlywood">
<td >
 <div id="topnav" >

			<div class="shell">
				<ul>
				<li><a href="veiwreg.php" title="">veiw registration</a></li>
				<li><a href="customerprofile.php" title="">update profile</a></li>
				<li><a href="changepass.php" title="">changepassword</a></li>
					<li><a href="bank.php" title="">create account</a></li>
					<li><a href="../cinemapayment/order.php" title="">order</a></li>
				<li><a href="../reservation/seatreservation/admin/dashboard1.php" title="">seatInfo</a></li>
				<li><a href="../reservation/seatreservation/admin/dashboard.php"title="">seatInfoADMIN</a></li>
				<li><a href="../reservation/seatreservation/index.php" title="">RESERVE</a></li>


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
<h2><font size=3>additional Information</font></h2><br>
		
 	<a href="/cinema ticket/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="/cinema ticket/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
	   	   <a href="../cinemapayment/feedback.php"1.php"><img src="images1/widget-arrow.png" width="15" />FeedBack</a>

</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
<form  method='POST' action='veiwseat.php'>
 <table borde1="0">
   <tr><td>&nbsp;</td>
      <td align="right">
			  DEAR COSTMERS WELL COME OUR Hibret hotel cinema privete organization.<nl>our service is provided 7 days per the week<nl>
			  note every body how has an account of this website and have anacount of commercial<nl>
			  Bank of Ethiopia can acces full services.if somedody have not any account ,she/he can not access the service.</td>
	  </tr>
	  <tr>
	  <td>
	  </td>
	  <td>
	  <!--<input type = "submit" name = "display" id='display' value = "display"></td>-->
	  
   </tr>
</table>
</form>
<table borde1="0">
<tr><td>
	  <?php
if (isset($_REQUEST['display'])) // Find Book button was clicked
{
$result = mysql_query("SELECT * FROM orders ");
echo "<table border=1>";
echo"<tr>";
echo"<th>seatNo </th>";
echo"<th>date</th>";
echo"<th>time</th>";
echo"</tr>";
while($row=MYSQL_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row[0].""."</td>"."<td>".$row[6]."<td>".$row[7]."</td>";
echo "</tr>";
}
echo "</table>";
echo"<table borde1='2' align='center'><tr><td>";
 echo '<font color="green">total number of seat is 1600';
echo"</tr>";
echo"</table>";

 
  

mysql_close($conn);
}
?>   
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top></h3></p><a href="http:
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('images/Habesha1.gif');height:400;">
<img src="image11/58.jpg" alt="" width=150 height=300/>
<img src="image11/02.jpg" alt="" width=150 height=300/>
</marquee>
</td>
</tr>
<tr>
</tr>
</table>

<div id="footer">
	<p></p>
	<!--<a href="index.php"><img src="xres/images/11.png" class="logo" alt="HIBRET HOTEL CINEMA" /></a>-->
	<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>GROUP 7,&copy;2009/2017, HibretHotelCinema &reg; All RIghts Reserved<br>
 </p>
</td>
</tr>
</div>

</table>
</body>
</html>
