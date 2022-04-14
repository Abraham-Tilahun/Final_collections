<?php
	include("includes/db.php");	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online ticket booking system</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  
  <style>
</style>	 
</head>
<body bgcolor="red">

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>
</td>
</tr>
<tr>
<td >
<img src="image/11.PNG" width=900 height=100>

</td>
</tr>
<tr>
<td >
 <div id="topnav" >

			<div class="shell">
				<ul>
				<li><a href="singup.php" title="Register">Register</a></li>
                  <li><a href="login.php" title="Login">Login</a></li>
					<li><a href="order1.php" title="">order</a></li>
					<li><a href="bank.php" title="">Account_Form</a></li>
					<li><a href="semsungRef.php" title="">print</a></li>
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
<h2><big style="color:geern" >Information</big></h2><br>
		
 	<a href="contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
<form  method='POST' action='veiwseat.php'>
 <table borde1="0">
   <tr><td>&nbsp;</td>
      <td align="right">
	  pleace click tha display button</td>
	  </tr>
	  <tr>
	  <td>
	  </td>
	  <td>
	  <input type = "submit" name = "display" id='display' value = "display"></td>
	  
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
echo"</tr>";
while($row=MYSQL_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row[0].""."</td>"."<td>".$row[4].""."</td>";
echo "</tr>";
}
echo "</table>";
echo"<table borde1='2' align='center'><tr><td>";
 echo '<font color="green">total number of seat is 1000';
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
<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('images/Habesha1.gif');height:400;">
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
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>Group 4&copy; 2008 COPY RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>
