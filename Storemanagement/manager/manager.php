<?php
	include("config.php");  
 session_start();
if(isset($_SESSION['validuser']))
 {
  $mail=$_SESSION['validuser'];
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

$user_id=$_SESSION['validuser'];

$result=mysql_query("select * from accou where username='$user_id'")or die(mysql_error());
$row=mysql_fetch_array($result);
$empid=$row['EmpId'];
$result1=mysql_query("select * from user where EmpId='$empid'")or die(mysql_error());
$row1=mysql_fetch_array($result1);
$empname=$row1['FirstName'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="shortcut icon" href="images/DbuLogo.jpg">
<head>
  <title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
   <link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : '../src/loading.gif',
      closeImage   : '../src/closelabel.png'
    })
  })
</script>
<script language="javascript">
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='manager.php');
   
   }
   else
   {
     return false;
   }
  }
  </script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="shortcut icon" href="images/DbuLogo.jpg">
<head>
<title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/image_slide.js"></script>  
   <link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : '../src/loading.gif',
      closeImage   : '../src/closelabel.png'
    })
  })
</script>
<script language="javascript">
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='manager.php');
   
   }
   else
   {
     return false;
   }
  }
  </script>
  <style type="text/css">
<!--
.style10 {
	color: #009933;
	font-size: 36px;
}
.style13 {
	color: #006666;
	font-size: 18px;
}
.style14 {font-style: italic; color: #00FFFF; font-weight: bold; }
.style17 {color: #00FFFF; font-size: 14px; }
.style18 {color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
	font-size: medium;
}
-->
  </style>
</head>
<body bgcolor="#66CC99">
<!---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--->
<div id="header">
<!---<img src="images/dbu2.jpg" alt="Image Not Found" width="260" height="120"/>-->
<img src="images/last2.png" alt="Image Not Found" height="120" width="1200"  align="middle"/>
</div>
    <!--close header-->
<div id="menubar">
      <ul id="menu" style="font-color:white">
         <li class="current"><a href="manager.php">Home</a></li>
         <li><a href="signup.php">Create Account</a></li>
        <li><a href="#">Manage User </a>
		<ul>
		<li><a href="reguser.php">Register User </a></li>
         <li><a href="manageuser.php">Manage User Status </a></li>
        <li><a href="deleteuser.php">Delete User </a></li>
		<li><a href="viewuser.php">View User </a></li>
		</ul>
		</li>
		  <li><a href="viewreq.php">View Request </a></li>
        <li><a href="viewreport.php">View Report </a></li>
		<li><a href="viewcomment.php">View Comment </a></li>
       <li><a href="../logout.php"onClick="isConfirmlog();">logout</a></li>
        
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
	<div id="advert">
<table  >
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">DBU-Store Mgt</font></th>
</tr>
<tr>
<td><br><br><center><img width="200" height="175" src="images/BestImage.jpg"/></center></td>
</tr>
</table>

<table border="0">
<tr>
<th width="250px" bgcolor="#336699" height="25px"><font face="arial" color="white" size="2">Related Links</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="http://www.dbu.edu.et">DBU Site</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="site.php">Site Map</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="https://mail.google.com/a/dbu/edu.et">Web Mail</a></td>
</tr>
</table>
</div>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->	
	<div>
      <ul class="slideshow">
        <li class="show"><img width="990" height="450" src="images/BestImage.jpg"/></li>
       <li><img width="990" height="450" src="images/best desktop.jpg"/></li>
	   <li><img width="990" height="350" src="images/laptop.jpg"/></li>
	   <li><img width="990" height="350" src="images/laptopp.jpg"/></li>
		<li><img width="990" height="350" src="images/Best divider.jpg"/></li>
		<li><img width="990" height="350" src="images/Best-Desktop.jpg"/></li>
		<li><img width="990" height="350" src="images/best-office-chair.jpg"/></li>
		<li><img width="990" height="350" src="images/Best chair.jpg"/></li>
		<li><img width="990" height="350" src="images/Besst Divider.jpg"/></li>
		<li><img width="990" height="350" src="images/speaker 2.jpg"/></li>
		<li><img width="990" height="350" src="images/Multi-socket-divider.jpg"/></li>
      </ul>   	 
  </div>
		<table bgcolor="#663300" height="200" width="985">
		<tr bgcolor="#FF0000" align="center"><th bgcolor="#FFCC33"><blink>&nbsp;&nbsp;<font size="+2" color="#0033FF" face="MONOtype Corsiva">Well come to Manager Page</font></blink></th></tr>
		<th bgcolor="#FFFFFF" height="415">
	      <p>  Store Management systems allow companies to record and track materials and customer information. Accurate material management allows companies to use this information for market planning, purchasing studies, sales and marketing reporting, inventory, future marketing etc. Moreover, company value is increased when the materials management information system is accurate.</p>
		  
		  <div class="content_image">
		    <img src="images/content_image1.jpg" alt="image1"/>
	      </div>
		  <p>The Debre Berhan University store   office is the back bone of the University by managing any activities related to materials available on the University.</p>
		  <br style="clear:both"/></div>
		  </th>
		  <tr bgcolor="#006600">
		   </tr>
		  </table>
	  <!--close sidebar_container-->
    </div>
<div id="footer">
<table width="1200" align="left">
		<tr><th height="30" width="1200" align="center" bgcolor="#000000">Copyright©2015 DebreBerhan University Store Management System
		</th></tr>
   	</table>
	</div>

	<!--close sidebar-->
</body>
</html>
