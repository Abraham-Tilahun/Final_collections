<?php
	include("../includes/db.php");

  
 session_start();	
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
		<li class="item first" id="eight"><a href="addproduct.php" class="main current"><span class="outer"><span class="inner settings">addmovie</span></span></a></li>
		<li class="item first" id="four"><a href="vieworders.php" class="main"><span class="outer"><span class="inner media_library">veiworders</span></span></a></li>  
		<li class="item first" id="one"><a href="delmovie.php" class="main current"><span class="outer"><span class="inner reports">delate movie</span></span></a></li> 
<li class="item first" id="one"><a href="searchmovie.php" class="main current"><span class="outer"><span class="inner reports">searchmovie</span></span></a></li>  
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>
</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/engineer.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
<form  method='POST' action='' onsubmit='return formValidation()'>
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:15px 25px 10px black;" width="450" height="300px">
<tr><td colspan=3 align=center><font color=black> Please Edit Your Profile details 
</td></tr>
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
<form action='/cinema ticket/admin/staffpro.php' method='POST'>
<table border='0' valign='top' id='updt'>
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
