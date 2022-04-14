<?php
	include("../../includes/db.php");

  
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
  alert(window.location='../../login.php');
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
	<link rel="icon" type="image/ico" href="../../images/App Icon.ico"/>
	
	
  <script src="lib/jquery.js" type="text/javascript"></script>

  <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
 
  
 

<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
	
	
	function isConfirmlogg()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    alert(window.location='../../login.php');

   }
   else
   {
    return false;

   }
  }
  </script>

	</head>
	<body>
	<div class="container_16" id="wrapper">	
	<table  width="910"  align=center >
	
	<tr>
	<td style="background:url('../images1/wrapsper-bg.png');" width=910 height=150 >
	<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../../logout.php" onClick="isConfirmlog();">logout</a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px >Manager</font>';
?>	
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="manager.php" class="main"><span class="outer"><span class="inner dashboard1">Order</span></span></a></li>
		<li class="item first" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  
		<li class="item first" id="eight"><a href="product.php" class="main current"><span class="outer"><span class="inner settings">Products</span></span></a></li>        
    		<li class="item first" id="eight"><a href="report.php" class="main current"><span class="outer"><span class="inner reports">Report</span></span></a></li> 
<li class="item first" id="one"><a href="profile.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>			
			<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>
</td>
</tr>
<tr>
<td id="table1">

		
		<form action="" method="post">
			
					<table cellpadding="4" cellspacing="8" id="table2" >
					
							<tr>
							
							<th> Quantity </th>
							<th> Quantity-left </th>
							     <th> Model </th>
								<th  style="border-left: 1px solid #C1DAD7"> Brand Name </th>
								<th> Product_Name </th>
								<th> Price </th>
								<th> Description </th>
								<th> Image </th>
								
								<hr>
							</tr>
							
						
						
					
						<?php
						
							$result = mysql_query("SELECT * FROM products");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr >';
									
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['qantity'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['qanleft'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['model'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['BrandName'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['product_name'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['product_price'].'</div></td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['product_ingredients'].'</div></td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><img src="../../images/upload/'.$row['product_photo'].'" width="80" height="50"></td>';

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
var del_id = element.attr("product_id");

//Built a url to send
var info = 'product_id=' + del_id;
 if(confirm("Are You Sure you want to delete?"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
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