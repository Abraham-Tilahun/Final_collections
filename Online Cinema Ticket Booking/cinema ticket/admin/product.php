<?php
	include("../includes/db.php");

  
 session_start();

if(isset($_SESSION['SESS_MEMBER_ID']))
 {
  $mail=$_SESSION['SESS_MEMBER_ID'];
 } else {
 ?>

 <script>
  //alert('You Are Not Logged In !! Please Login to access this page');
   //alert(window.location='../login.php');
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

<html>
<head>

<title>Online cinema ticket booking system</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body bgcolor="black">
	<div>	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td>
	<img src="staff.php" alt="" width=910 height=110>
		<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px ></font>';
?>	  </td>
	  </tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
	
		 <li ><a href="addproduct.php"><span class="outer"><span class="inner settings">add movieAnnouncement</span></span></a></li>
		 
		<li ><a href="searchmovie.php"><span class="outer"><span class="inner settings">search movie</span></span></a></li>
<li class="item first" id="one"><a href="/cinema ticket/reservation/seatreservation/admin/dashboard2.php" class="main current"><span class="outer"><span class="inner reports">veiw orders</span></span></a></li>        
    <li class="item first" id="one"><a href="staffpro.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>
</td>

</tr>
</table>
<table  width="907" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
<tr>
<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="//">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
		
			
			
		
		<form action="" method="post">
			<div id="view3">
			
					<table cellpadding="4" cellspacing="8" id="table2" >
					
							<tr>
						
							<th> film_id</th>
								<th  style="border-left: 1px solid #C1DAD7"> Name </th>
								<th> Time </th>
								<th> date </th>
								<th> birr </th>
								<th> Image </th>
							
							</tr>
							
						
						
						
						
						
						
						
						
					
						<?php
						
							$result = mysql_query("SELECT * FROM movie");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr >';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['film_id'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['film_name'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['time'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['date'].'</td>';
								   echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['birr'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><a rel="facebox" href="editproductimage.php?film_id='.$row['film_id'].'"><img src="../images/upload/'.$row['film_image'].'" width="90" height="50"></a></td>';
									echo '</tr>';
								}
							?> 
					
	  </form>
  </table>
			</td>
			
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
		<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>GROUP 7 &copy;2009/2017 HibretHotelCinema &reg;All RIghts Reserved @DEBRE TABOR UNIVERSITY.</p>
</td>
</tr>

</table>
		
		</table>
</body>
		</html>