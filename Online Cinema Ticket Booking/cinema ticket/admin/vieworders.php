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
 <script>
alert('please login');
alert(window.location='/111/login.php');
</script>
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
	<div >	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td>
	<img src="staff.php" alt="" width=910 height=105>
	<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px ></font>';
?>		</td>
	  </tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="eight"><a href="addproduct.php" class="main current"><span class="outer"><span class="inner settings">addmovie</span></span></a></li> 
		<li class="item first" id="one"><a href="searchmovie.php" class="main current"><span class="outer"><span class="inner reports">searchmovie</span></span></a></li>   
    <li class="item first" id="one"><a href="staffpro.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	<li class="item first" id="one"><a href="product.php" class="main current"><span class="outer"><span class="inner newsletter">veiw movie</span></span></a></li>
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
<img src="image11/60.jpg" alt="" width=150 height=300/>
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
<form  method='POST' action='vieworders.php'>
 <table borde1="0">
   <tr><td>&nbsp;</td>
      <td align="right">
	  <td>
	  </td>
	  
   </tr>
</table>
</form>
<table borde1="0">
<tr><td>
	  <?php
if (isset($_REQUEST['display'])) // Find Book button was clicked
{
$result = mysql_query("SELECT * FROM order ");
echo "<table border=1>";
echo"<tr>";
echo"<th>seatNo </th>";
echo"<th>film_name </th>";
echo"<th>price </th>";
echo"<th>date</th>";
echo"<th>time</th>";
echo"</tr>";
while($row=MYSQL_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row[0]."</td>"."<td>".$row[3]."<td>".$row[4]."</td>"."<td>".$row[6]."<td>".$row[7]."</td>";
echo "</tr>";
}
echo "</table>";


 
  

mysql_close($conn);
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
