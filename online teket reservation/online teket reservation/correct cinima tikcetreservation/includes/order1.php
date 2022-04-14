<?php   
session_start();
include("includes/db.php");	
 //echo "User".$_SESSION['user'];
?>

 
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../111/login.php');
 </script>
 
  <?php

$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'");
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
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
a{
color:black;
text-decoration:none;
} 
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
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="logout.php" onClick="isConfirmloggg();">logout</a>'.'</font>';

?>

</td>
</tr>
<tr>
<td >
 <div id="topnav" >

			<div class="shell">
				<ul>
				 <li><a href="index.php" title="index">home</a></li>
				<li><a href="singup.php" title="Register">Register</a></li>
                  <li><a href="login.php" title="Login">Login</a></li>
					<li><a href="bank.php" title="">createaccount</a></li>
					<li><a href="desktop.php" title="">view seat info</a></li>
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
<form  method='POST' action='order1.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td colspan=3 align=center><font color=black> order form
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text"  name="name" required="required" value="" size='20%' id="txt_fname" placeholder='name'onkeypress="return letter_validate(event);"></input></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>film_name:</td><td><input type="text" name="finame" value="" size='20%' required="required" id="txt_mo" placeholder='film_name' onkeypress="return letter_validate(event);"/></td></tr>
<tr><td><font color=red> * </font><font color=black>price:</td><td><input type="text" name="price"  size='20%' required="required" id="price" placeholder="Amount Birr" onkeypress="return number_validate(event);"/></td></tr>
<tr><td><font color=red> * </font><font color=black>date</td><td><input type="text" name="date" id="date" size='20%' required="required"  placeholder='date'onkeypress="return number_validate(event);"/></td></tr>

<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset'class="button_example"  value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain'])){
$fname=$_POST['name'];
$name=$_POST['finame'];
$price=$_POST['price'];
$date=$_POST['date'];
$query="INSERT INTO orders(name,finame,price,date)";
$query.="values ('{$fname}','{$name}','{$price}','{$date}');";
$result=mysql_query($query);
if(!$result){
 echo"<p  class='wrong'> unseccesfull!!!</p>";
}
else{
 echo"<p  class='wrong'> unseccesfull!!!</p>";
echo "<script>window.location='';</script>";
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

  
  







