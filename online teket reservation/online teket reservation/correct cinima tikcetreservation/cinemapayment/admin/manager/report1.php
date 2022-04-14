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
<a href="report.php" >Weekly and Monthly Report </a>
</td>
</tr>
<tr>
<td height=500px valign=top id="table1">



<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=500, height=300, left=200, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:504px;
margin:0 auto;
}
</style>

<div id="print_content">

  
  
<table width="635" style="margin-right:-20%;margin-top:50px;" border="1" align="left" cellpadding="0" cellspacing="0" >
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;">
              		<th width="164"><div align="center">BrandName</div></th>
					<th width="164"><div align="center">image</div></th>
					<th width="108"><div align="center">Model</div></th>
					<th width="113"><div align="center">product_price</div></th>
					<th width="136"><div align="center">Quantity</div></th>
					<th width="136"><div align="center">Quantity_Left</div></th>
					<th width="136"><div align="center">Sold</div></th>
					
            </tr>
          </thead>
          <tbody>
         <?php
			   					
								

								
								$result = mysql_query("SELECT * FROM products");
								
								
								
								

								while($row3 = mysql_fetch_array($result))
								  {
									$q=$row3['qantity'];
   $ql=$row3['qanleft'];
   $sum=$q-$ql;
									
									echo '<td><div align="center">'.$row3['BrandName'].'</div></td>';
									echo '<td ><img src="../../images/upload/'.$row3['product_photo'].'" width="80" height="50"></td>';

									echo '<td><div align="center">'.$row3['model'].'</div></td>';
									echo '<td><div align="center">'.$row3['product_price'].'</div></td>';
									echo '<td><div align="center">'.$row3['qantity'].'</div></td>';
								    echo '<td><div align="center">'.$row3['qanleft'].'</div></td>';
									echo '<td><div align="center">'.$sum.'</div></td>';
								    echo '</tr>';
							
								  }
			  
			  ?>
			   <tr>
								<td colspan="4"><div align="right">Total</div></td>
									
									  <div align="center">
									    <?php


$result1 = mysql_query("SELECT sum(qantity) FROM products");
while($row = mysql_fetch_array($result1))
{
$k=$row['sum(qantity)'];
    echo'<td><div align="center">' .$row['sum(qantity)'].'</td>';
	
 }
$r = mysql_query("SELECT sum(qanleft) FROM products");
while($ro = mysql_fetch_array($r))
{
$l=$ro['sum(qanleft)'];
    echo'<td><div align="center">' .$ro['sum(qanleft)'].'</td>';
	
 }

 $sum=$k-$l;
    echo'<td><div align="center">' .$sum.'</td>';

?>
							          </div>
									  </td>
									  
									  
									  
					  
									  
									  
									  
			</tr>
          </tbody>
	
</table>
</div>
 <div style="margin-left:90%; width:60px;  text-align:center;">  <a href="javascript:Clickheretoprint()">Print</a></div>	

			
		
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