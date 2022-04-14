<?php
	include("../includes/db.php");

  
 session_start();


//$mail=$_POST['mail'];
//$pass=$_POST['pass'];
if(isset($_SESSION['SESS_MEMBER_ID']))
 {
  $mail=$_SESSION['SESS_MEMBER_ID'];
 } else {
 ?>
 <?php
 }
 ?>
 <?php
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>

<html >
<head>
<title>Online cinema ticket booking system</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
</head>
	<body bgcolor="black">
	<div>	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td>
	<img src="staff.php" alt="" width=910 height=150>
		<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px ></font>';
?>	
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="four"><a href="../reservation/seatreservation/admin/dashboard2.php" class="main"><span class="outer"><span class="inner media_library">veiworders</span></span></a></li>  
		<li class="item first" id="four"><a href="product.php" class="main"><span class="outer"><span class="inner media_library">veiw movie</span></span></a></li>  
<li class="item first" id="one"><a href="searchmovie.php" class="main current"><span class="outer"><span class="inner reports">searchmovie</span></span></a></li>        
    <li class="item first" id="one"><a href="staffpro.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>

</td>

</tr>
</table>
<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
<tr>
<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top></h3></p><a href="http://www.habesha.com">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<img src="image11/engineer.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
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

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"></td></tr><tr>
<tr><td colspan=3 align=center><font color=black>add movie 
</td></tr>
<tr><td>
  film_Id---<input name="pro_id" type="text" onKeyPress="return number_validate(event);" /></td></tr>
 <tr><td>film_name<input name="model" type="text" onKeyPress="return letter_validate(event);" /></td></tr>
	
	<tr><td>film_price    <input name="des" type="text" onKeyPress="return number_validate(event);" /></td></tr>
<tr><td>
<label><font color=red> </font> <font color=black>*time
<select name="time" id="time">
<option selected=selected></option>
<option >5:00 am</option>
<option >8:00 am</option>
<option >10:00 am</option>
<option >12:00 am</option>
<option >2:00 pm</option>

				</select>
</td></tr>
    
 <tr><td>film_Image: <input type="file" name="image" class="ed" required x-moz-errormessage="Please Browse Image " title="Please Browse Image "></td></tr>
 <tr><td>
    <input type="submit" name="Submit" value="save" id="button1" />
	</td></tr></table>
 
</form>
			
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
		<td>
		</td>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITY.</p>
		</td>
		</tr>
		</table>
		</body>
		</html>
