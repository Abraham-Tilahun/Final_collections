<?php

include("connection.php");

include("includes/db.php");
 session_start();


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
					<li><a href="index.php" title="">order</a></li>
					<li><a href="laptop.php" title="">createaccount</a></li>
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
<form  method='POST' action='payment.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr>
<td colspan=2>
<h1 align=center>Payment form</h1>
</td></tr>
<tr><td>
<label>Account No
</label>
</td><td>
<input type="password" name="account" id="txt_acc"  required x-moz-errormessage="Please Enter your AccountNumber" title="Please Enter your AccountNumber"/>
</td></tr>


<tr><td>
<label>Pin No.

</label>
</td><td>
<input type="password" name="secu" id="txt_sec"  required x-moz-errormessage="Please Enter your Pin Number" title="Please Enter your Pin Number"/>
</td></tr>
<tr><td>

<label>Price.

</label>
</td><td>
<input type="text" name="price"  value="">
</td></tr>
<tr><td colspan=2 align=center>
<input type="submit" value="Confirm" name="submitMain" class="button_example" style="margin-left:130px;">
<div class="spacer"></div></td></tr>
</table>


</div>
<?php
$x=1;
if(isset($_POST['submitMain'])){
$a=$_POST['account'];
$amount=$_POST['price'];
$card=$_POST['secu'];
 $query = "SELECT * FROM bank where accountnumber= '{$a}'  AND security='{$card}';";
$result_set=mysql_query($query,$conn);
$count=mysql_num_rows($result_set);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if($count==0)
{
echo '<div align="center"><strong><font color="#FF0000">Please Try Again</font></Strong></div>';
echo'<meta content="5;payment.php" http-equiv="refresh" />';
}
else{

if(mysql_num_rows($result_set))
{

$result ="SELECT * FROM bank where accountnumber= '{$a}' AND security='{$card}';";
$re=mysql_query($result,$conn);

while($row = mysql_fetch_array($re))
  {
  if($row['amountbirr']<=$amount){
 $de = mysql_query("DELETE from orders WHERE price='$transnum'",$conn) or die(mysql_error());

   echo'<strong><center><font color="#FF0000">Your account balance is low</font></center></Strong>';
   echo'<meta content="10;order.php" http-equiv="refresh" />';

  }
  else{
  $value = mysql_query("UPDATE  bank set amountbirr='{$row['amountbirr']}'-'{$amount}' where accountnumber= '{$a}';",$conn);

  
 
if($x==1)  {
$query1 = "SELECT * FROM bank where fname= '{$tra}';";
 $result_set=mysql_query($query1,$conn1);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if(mysql_num_rows($result_set)>0)
{
$result1 = mysql_query("SELECT * FROM bank where fname= '{$tra}';",$conn);
while($row1 = mysql_fetch_array($result1))
  {
   $value = mysql_query("UPDATE  bank set amountbirr='{$row1['amountbirr']}'+'{$amount}' where fname= '{$tra}';",$conn);
}  	
}
}


}
}
}	   
else
   {
     
	  echo'<strong><center><font color="#FF0000">Please Try Aging!!</font></center></Strong>';
   }
   }
mysql_close($conn);

}
?>




</form>


</td>

</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>
