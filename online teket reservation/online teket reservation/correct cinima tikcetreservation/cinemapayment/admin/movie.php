<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head><?php
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
  <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
  
  
  
  
<script>

</script>
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
	<div class="container_16" id="wrapper">	
	<table  width="930"  align=center >
	
	<tr>
	<td style="background:url('../images1/wrapsper-bg.png');" width=930 height=150 >
	<img src="../image/Capture.PNG">
		<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();">logout</a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px ></font>';
?>	
		</td>
		</tr>
		<tr>
		<td width=930px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="eight"><a href="movie.php" class="main current"><span class="outer"><span class="inner settings">Products</span></span></a></li>
		<li class="item first" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  
		
    <li class="item first" id="one"><a href="profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass1.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>
</td>
</tr>
<tr>
<td id="table1">

		<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> 
		
			
			
			<a rel="facebox" href="addproduct.php"><b>Add Product</b></a>
			</div>
		<form action="" method="post">
			<div id="view3">
			
					<table cellpadding="4" cellspacing="8" id="table2" >
					
							<tr>
						
							<th> Total_seat </th>
							<th> Free Seat Left </th>
							     <th> movie_type </th>
								<th  style="border-left: 1px solid #C1DAD7"> Movie Name </th>
								<th> MOVIE-SEEN DATE</th>
								<th> Price </th>
								<th> Description </th>
								<th> Image </th>
								<th> Action </th>
								<hr>
							</tr>
							
						
						
					
						<?php
						
							$result = mysql_query("SELECT * FROM products");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr >';
									
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['total_seat'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['freeseatleft'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['movie_type'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['MovieName'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;">'.$row['movieseendate'].'</td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['movie_price'].'</div></td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><div align="left">'.$row['movie_description'].'</div></td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><a rel="facebox" href="editmovieimage.php?movie_id='.$row['movie_id'].'"><img src="../images/upload/'.$row['movie_photo'].'" width="80" height="50"></a></td>';
									echo '<td style="border-left: 5px solid #C1DAD7;"><div align="center"><a rel="facebox" href="editproductetails.php?movie_id='.$row['movie_id'].'">edit</a> | <a href="#" movie_id="'.$row['movie_id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
<font color=white size=4px ><p align=center>GROUP 7,&copy;2009/2017, HibretHotelCinema @DEBRE TABOR UNIVERSITY! All RIghts Reserved</p>
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
var del_id = element.attr("movie_id");

//Built a url to send
var info = 'movie_id=' + del_id;
 if(confirm("Are You Sure you want to delete?"))
		  {

 $.ajax({
   type: "GET",
   url: "deletemovie.php",
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