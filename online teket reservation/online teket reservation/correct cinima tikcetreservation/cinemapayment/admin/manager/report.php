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
 
  
 <script language="javascript" src="datetimepicker.js"></script>

<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />


<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

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
<td>
<a href="report1.php" >Report </a>
</td>
</tr>
<tr>
<td height=500px valign=top id="table1">

<div style="width:600px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:5%;">
<div style="background-color:#ff3300; height:40px; margin-bottom:10px;">
Weekly and Monthly Report

</div>
<br /><br />

<form action="salesreport.php" method="post">
<table >
<tr>
<td>
From:<input class="mine_text_field_7" name="dayfrom" id="txtfrom1" required="required"  type="text" placeholder='From'/>
                                    <a href="javascript:NewCssCal('txtfrom1','yyyymmdd')"><img src="images1/Calendarsmall.png" width="20" height="21" border="0" /></a>
</td><td>
	To:	<input class="mine_text_field_7" name="dayto" id="txtfrom" required="required"  type="text" placeholder='To'/>
                                    <a href="javascript:NewCssCal('txtfrom','yyyymmdd')"><img src="images1/Calendarsmall.png" width="20" height="21" border="0" /></a>							
									
						</td><td>			
									

<input name="" type="submit" value="Search" class="button_example" /></td></tr></table></form>
<br />
</div>
		</form>

			
		
		</td>
		</tr>
		<tr>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
		</td>
		</tr>
		</table>
		
		</body>
		</html>