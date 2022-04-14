<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head>
<?php
	include("includes/db.php");

  
 session_start();



if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
  
 }
 else 
 {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
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
<a href="http://www.facebook.com" target=_blank ></a>
<a href="http://www.twitter.com" target="_blank"></a>
<a href="http://www.youtube.com" target="_blank"></a>
<a href="http://www.google.com" target="_blank"></a></p>

</td>
</tr>
<tr>
<td >
<img src="customer.PNG" width=900 height=100>
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
				<li><a href="veiwreg.php" title="">veiwregistration</a></li>
				<li><a href="customerprofile.php" title="">updateprofile</a></li>
				<li><a href="changepass.php" title="">change passwrd</a></li>
					<li><a href="bank.php" title="">create account</a></li>
					<li><a href="../cinemapayment/order.php" title="">order</a></li>
				<li><a href="../reservation/seatreservation/admin/dashboard1.php" title="">seatInfo</a></li>
				<li><a href="../help.php" title="">Help</a></li>


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
		
 	<a href="/cinema ticket/contact.php"><img src="../images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="/cinema ticket/aboutus.php"><img src="../images1/widget-arrow.png" width="15" />AboutUs</a>
	   	   <a href="../cinemapayment/feedback.php"1.php"><img src="../images1/widget-arrow.png" width="15" />FeedBack</a>

</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
<form  method='POST' action='veiwseat.php'>
 <table borde1="0">
   <tr><td>&nbsp;</td>
      <td align="right">
			 <div style="width:300px; height:400px; color:#000000;">
  <div align="justify">
  <br ><big><font color=red size=14px> Note: </font></big></br>
   <br /><strong>*Dear customers, before you reserve the ticket ,you should be agree the following terms:<br>
   
  <br ><strong>*The transaction payment only processed in commercial bank of Ethiopia.</strong></br>
     <br /><strong>*This website give service  for all customers who have an account  commercial Bank of Ethiopia.</strong></br><br>
       *The customer who is reserve ticket can not canceled &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;   </br><br>
	   
   *After reserve the ticket, customer must be handon the ticket when you came to the cinema&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; </br><br>
   
   *The children who are under age must not become to the cinema&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; </br>
   
   *Foods and drank(alcohol)  is not allowed in the cinema&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</br>
   *Unwannted sound is forbidden in the cinema&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</br><br>
   
   *Smooking  is forbidden;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</strong></br>
   
   <br/><strong>.</strong></br>
  </div>
</div>
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

<!--


<li><a href="../help.php" title="">help</a></li>
				<li><a href="changepass.php" title="">change password</a></li>
					<li><a href="customerprofile.php" title="">update profile</a></li>
				<li><a href="/cinema ticket/reservation/seatreservation/admin/dashboard1.php" title="">veiw seat</a></li>
					<li><a href="/cinema ticket/cinemapayment/order.php" title="">order</a></li>
			





-->

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
