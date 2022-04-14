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
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../login.php');
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online ticket booking system for Hibret Hotel cinema</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="../images/App Icon.ico"/>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	
	function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    return false;
   }
   else
   {
    alert(window.location='../login.php');
   }
  }
  </script>
  
 

<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body>
	<table  width="910"  align=center >
	
	<tr>
	<td style="background:url('../images1/wrapsper-bg.png');" width=910 height=150 >
	<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" >logout</a>'.'</font>';
echo'<br>';

?>	
		
		
		
		
		</td>
		</tr>
	
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		
						
				<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/dashboard.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li>  
		<li class="item first" id="eight"><a href="search_news.php" class="main current"><span class="outer"><span class="inner settings">search_news</span></span></a></li>
		      <li class="item first" id="eight"><a href="delate.php" class="main current"><span class="outer"><span class="inner settings">delate_news</span></span></a></li>
    <li class="item first" id="one"><a href="profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	
				<li class="item first" id="four"><a href="../../cinemapayment/admin/message.php" class="main"><span class="outer"><span class="inner media_library"> Message</span></span></a></li>
	
	<li class="item first" id="one"><a href="/cinema ticket/cinemapayment/admin/movie.php" class="main current"><span class="outer"><span class="inner newsletter">Add Movie</span></span></a></li>
	</ul>
</div>
</td>
</tr>
<tr>
<td id="table1">

		
		<form action="" method="post">
			
					<table cellpadding="1" cellspacing="1" id="table2">
				<thead>
					<tr>
						<th  style="border-left: 1px solid #C1DAD7" width="15%"> Name </th>
						<th width="15%"> Email </th>
						<th width="20%"> Subject </th>
						<th width="40%"> Content </th>
						<th width="10%"> Action </th>
						<hr>
					</tr>
				</thead>
				<tbody>
				<?php
			
				$result = mysql_query("SELECT * FROM message");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['name'].'</td>';
						echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['email'].'</div></td>';
						echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['subject'].'</div></td>';
						echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['content'].'</div></td>';
						echo '<td style="border-left: 5px solid #C1DAD7;"><div align="center"><a href="#" id="'.$row['email'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
						echo '</tr>';
					}
				?> 
				</tbody>
			</table>
			</form>
		</td>
		</tr>
		<tr>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,&copy;2009/2017, HibretHotelCinema @DEBRE TABOR UNIVERSITY! All RIghts Reserved.</p>
		</td>
		</tr>
		</table>
		<script src="js/jquery.js"></script>
  <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are You Sure you want to delete?"))
		  {

 $.ajax({
   type: "GET",
   url: "deletemessage.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
		</body>
		</html>