
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
<title>Online Masiyas Electronic Shopping</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="../images/App Icon.ico"/>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
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
    alert(window.location='../login.php');

   }
   else
   {
    return false;

   }
  }
  </script>


<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body>
	<table  width="910"  align=center >
	
	<tr><td style="background:url('../images1/wrapsper-bg.png');" width=910 height=150 >
	<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();">logout</a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px >Shipping Assistant</font>';
?>
	
		
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="shop.php" class="main"><span class="outer"><span class="inner dashboard1">Order</span></span></a></li>
		<li class="item first" id="one"><a href="profile.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
       <li class="item first" id="one"><a href="changepass.php" class="main"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	   
	  
    </ul>
</div>
</td>
</tr>
<tr>
<td id="table1">

		
		<form action="" method="post">
			
			<table cellpadding="1" cellspacing="1" id="table1" border=1 class="display" id="log" class="jtable">
					
					<tr>
						<th  style="border-left: 1px solid #C1DAD7"> Confirmation Number </th>
						<th> Name </th>
						<th> Address </th>
						<th> Email</th>
						<th> Mobile No. </th>
						<th> Home Phone No.</th>
						<th> Street No.</th>
						<th> Branch</th>
						<th> Status</th>
						<th> Action </th><hr>
					</tr>
				
				<tbody>
				<?php
					
					$result = mysql_query("SELECT * FROM reservation ORDER BY firstname ASC");
					while($row = mysql_fetch_array($result))
						{
							echo '<tr class="record" id="'.$row['status'].'">';
							echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['confirmation'].'</td>';
							echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['firstname'].' '.$row['lastname'].'</td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['delivery_type'].''.$row['kifleketema'].'Kebele'.$row['kebele'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['email'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['mobileno'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['homephoneno'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['street'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['payment'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['status'].'</div></td>';
							echo '<td style="border-left: 5px solid #C1DAD7;"><div align="center">
							<a rel="facebox" href="vieworders.php?id='.$row['confirmation'].'" title="Click To View Orders">View Orders</a> | 
							<a rel="facebox" href="viewreport.php?id='.$row['confirmation'].'" title="Click To Print Orders">Print</a> | 
							<a rel="facebox" href="editstatus.php?id='.$row['reservation_id'].'">edit</a> |
							<a href="#" id="'.$row['confirmation'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
		</td>
		</tr>
		</table>
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
 if(confirm("Are you want to delete ? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
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