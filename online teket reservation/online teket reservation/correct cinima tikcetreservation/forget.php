<?php
	include("includes/db.php");
?>
<html>
<head>
	<title>Online ticket booking system</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    
 	 
</head>
<body bgcolor="black">


<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="singup.php" title="Register">Register</a>
<a href="index.php" title="Login">home</a>
<a href="login.php" title="Register">login</a>
<a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>
</td>
</tr>
<tr>
<td >
<img src="image/11.PNG" width=900 height=200>

</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 
<h2><big style="color:geern" ><font size=3>Information</font></big></h2><br>
		
 	<a href="contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

	
	</td>
<td valign="top" id="tad" style=" background-color:white;">	
<div align="center">
<!-------------- -->
<table border=0 width="500" >
<tr>
<td>
<form action="forget.php" method="POST" onsubmit='return formValidation()'>
<br><br>
<table align=center style="border:1px solid black; border-radius:50px;margin-top:35px;box-shadow:15px 25px 10px black;" width="500" height="400px">
<tr bgcolor="#000000"><th colspan="2"><font color="#ffffff" style="text-decoration:underline;">Do You forget Your Password?</font></th></tr>
<tr>
<td>
<label>Email</label>
</td>
<td>
<input type="text" name="email" title="email" id='email' required/>
</td>
</tr>
<tr>
<td>
<label>Last Name.</label>
</td>
<td>
<input type="text" onKeyPress="return isNumberKey(event)" name="Lname" title="Last Name" id="lname" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="view" value="View" class="button_example"/>&nbsp;&nbsp;
<input type="reset" value="Clear" class="button_example"/>
</td>
</form>
<<?php
 if(isset($_POST['view']))
  {
   $email=$_POST['email'];
   $lname=$_POST['Lname'];
   $sql="SELECT * FROM user where email='$email' AND Lname='$lname';"; 
   $result_set=mysql_query($sql,$conn);
   if(!$result_set)
   {
   die("Query failed".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{
while($row=mysql_fetch_array($result_set))
{
$fname=$row[1];
$lname=$row[2];
$password=$row['password'];
echo"<p class='success'><img src='image/tick.png'>&nbsp;"."Hi"."&nbsp; &nbsp;".$fname."&nbsp; &nbsp;".$lname."&nbsp;&nbsp;"."your password is:".$password."</p>";
echo'<meta content="10;login.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="10;forget.php" http-equiv="refresh" />';
}
}
mysql_close($conn);
?>
</td></tr>
</table>
</table>
</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top><font size=3>Advertise</font></h3></p><a href="http://www.habesha.com" target=_blank>
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
