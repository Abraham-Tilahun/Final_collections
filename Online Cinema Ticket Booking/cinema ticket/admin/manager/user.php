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
<title>Online cinema ticket booking system for hibret hotel cinema</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="../images/App Icon.ico"/>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	
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
   var r = confirm('Are you sure');
   if(!r)
   {
    alert(window.location='user.php');
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
	<table  width="910"  align=center >
	
	<tr>
	<td style="background:url('../images1/wrapsper-bg.png');" width=910 height=150 >
		<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();">logout</a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px >Administration</font>';
?>	
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="eight"><a href="product.php" class="main current"><span class="outer"><span class="inner settings">Products</span></span></a></li>
		<li class="item first" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  
		
<li class="item first" id="one"><a href="user.php" class="main current"><span class="outer"><span class="inner reports">user</span></span></a></li>        
    <li class="item first" id="one"><a href="profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="one"><a href="changepass1.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
	</ul>
</div>
</td>
</tr>
<tr>
<td id="table1">

		
		<form action="" method="post">
			<div id="view3">
			
					<table cellpadding="4" cellspacing="8" id="table2" >
					
							<tr>
						
							<th> Name </th>
							<th> Gender </th>
							    
								<th > E-mail</th>
								<th> Mobile
							</th>
								<th> Country </th>
								<th> City </th>
									<th> action </th>
							
								<hr>
							</tr>
							
						
						
					
						<?php
$result = mysql_query("SELECT * FROM user");
while($row = mysql_fetch_array($result))
  { 
									
	$status=$row['status'];								
   $name=$row['Name'];
   $lname= $row['Lname'];
									$ge=$row['gender'];
								$mail=$row['email'];
									$mo=$row['Mobile'];
									$co=$row['country'];
									$city=$row['city'];
									
?> 
<tr>
<td><?php echo $name.$lname;?></td>
<td><?php echo $ge;?></td>
<td><?php echo $mail;?></td>
<td><?php echo $mo;?></td>	
<td><?php echo $co;?></td>
<td><?php echo $city;?></td>	
		<td><?php
						if(($status)=='0')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['email'];?>" onclick='isConfirmlog()'>
                        		<img src="deactivate.png" id="view" width="16" height="16" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
						if(($status)=='4')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['email'];?>" onclick='isConfirmlog()'> 
                       			 <img src="activate.png" width="16" id="view" height="16" alt="" onclick='isConfirmlog()'/>Activated</a>
                        <?php
						}
						if(($status)=='3')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['email'];?>" onClick="return confirm('Really you De-activate (<?php echo $email?>)');"> 
                       			 <img src="activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
						
						if(($status)=='2')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['email'];?>" onClick="return confirm('Really you De-activate (<?php echo $email?>)');"> 
                       			 <img src="activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
						
						
						if(($status)=='5')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['email'];?>" onclick='isConfirmlog()'>
                        		<img src="deactivate.png" id="view" width="16" height="16" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
						
						if(($status)=='6')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['email'];?>" onclick='isConfirmlog()'>
                        		<img src="deactivate.png" id="view" width="16" height="16" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
                        ?>
						</td>

		
		
		
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
?>

						</td>

		
		
		
		</tr>
						
						
						
						
						
						
						
						
					
					
			</form>
			
		</td>
		</tr>
		<tr>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>Group 7&copy; 2007/2017 &reg; RIGHT RESERVED@Debre TaborUniversity.</p>
		</td>
		</tr>
		</table>
		
		</body>
		</html>