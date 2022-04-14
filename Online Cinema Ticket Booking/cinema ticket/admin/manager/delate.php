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

<html >
<head>
<title>Online cinema ticket booking system</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body bgcolor="black">
	<div>	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td >
		<img src="admin.php" alt="" width=910 height=150>
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';

?>	
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
	
				<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/reserver information.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li>  
						<li class="item first" id="four"><a href="../../cinemapayment/admin/message.php" class="main"><span class="outer"><span class="inner media_library"> Message</span></span></a></li>

		<li class="item first" id="eight"><a href="search_news.php" class="main current"><span class="outer"><span class="inner settings">search_news</span></span></a></li>
		<li class="item first" id="eight"><a href="add_news.php" class="main current"><span class="outer"><span class="inner settings">add_news</span></span></a></li>
		       	<li class="item first" id="one"><a href="/cinema ticket/cinemapayment/admin/movie.php" class="main current"><span class="outer"><span class="inner newsletter">Add Movie</span></span></a></li>

    <li class="item first" id="one"><a href="profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>
</td>

</tr>
</table>

</tr>
</table>
<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
<tr>
<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('image11/main/blue.jpg');height:400;">
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
<form action="delate.php" method="post">
id:<input type="text" name="dell"placeholder=" id"><br>
<center> <input type="submit" value="Delete" name="delelets"></center>
</form>
</body>
</html>
<?php
if(isset($_POST['delelets']))
{
$delete=$_POST['dell'];
$sql="delete from items where row_id= '$delete'";
$res=mysql_query($sql);
if($res){
echo "<script>alert('sucessfully !!');</script>";
}
else{
echo "<script>alert(' unsucessfully !!');</script>";
}
}
?>


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
		<td>
		</td>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITYD.</p>
		</td>
		</tr>
		</table>
		</body>
		</html>


  
  







