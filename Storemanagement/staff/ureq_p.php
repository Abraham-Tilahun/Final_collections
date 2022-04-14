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
  <style type="text/css">
<!--
.style8 {color: #000000; font-weight: bold; font-style: italic;}
.style15 {color: #00FFFF;
	font-size: x-large;
}
.style17 {color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
	font-size: medium;
}
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="../images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->


	<div id="menubar">
      <ul id="menu">
         <li class="current"><a href="userpage.php">Home</a></li>
           <li><a href="#">Request Online </a>
         <ul>
        <li><a href="requestonline.php">Request Online </a></li>
		<li><a href="cancelreq.php">Cancel Request </a></li>
        <li><a href="uviewrequest.php">view sent Request </a></li>
        </ul>
        </li>
        <li><a href="#">Item Transaction </a>
        <ul>
        <li><a href="usearchitem.php">Search Item </a></li>
        <li><a href="transeferitem.php">Transfer Item </a></li>
         <li><a href="chreturnitem.php">ReturnItem </a></li>
        <li><a href="confirmitemrequset.php">Requested Items </a></li>
        </ul></li>
        <li><a href="viewownloan.php">View User Loan </a></li>
        <li><a href="../logout.php" onClick="isConfirmlog();">Log Out </a></li>
        
      </ul>
    </div>><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>News</h2>
            <fieldset>
			poly store adds many items to satisfy its customer as such as possible.ploy store expandes its service to three institus like institute of Ietchnology(IOT),Institutes of textile ,garment and fashion design and agriculture.poly store managment have good system to serve its customer.it works as it expected. poly store added different items currently.
			</fieldset>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Mission</h2>
			<fieldset>
            <p class="style8">Our Mission is to give efficient service to our customers and to </p>
            <h3>&nbsp;</h3>
			</fieldset>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar-->
        <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>Vission</h2>
			<fieldset>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
			</fieldset>
        </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      </div><!--close sidebar_container-->
      <table width="495">
        <tr>
          <th width="485" height="66" scope="row"><img src="images/adddd.jpg" alt="" width="110" height="53" />Item here... </th>
        </tr>
      </table>
      
      <p><?php echo $message;?>&nbsp;</p>
      <form action='ureq_p.php' method='post'>
      <table width="330">
        <tr>
          <th width="179" align="right" scope="row">Item Name </th>
          <td width="135"><label>
            <input name="ItemName" type="text" id="ItemName" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Item Id </th>
          <td><label>
            <input name="Itemid" type="text" id="Itemid" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Price</th>
          <td><label>
            <input name="price" type="text" id="price" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Quantity</th>
          <td><input name="Qauntity" type="text" id="Qauntity" /></td>
        </tr>
        <tr>
          <th align="right" scope="row">Model</th>
          <td><input name="model" type="text" id="model" /></td>
        </tr>
        <tr>
          <th height="55" colspan="2" align="center" valign="bottom" scope="row"><label>
            <input name="Add" type="SEND" id="Add" value="Add" />
            <input type="reset" name="Cancel" value="Cancel" />
          </label></th>
        </tr>
      </table></form>
      <p>&nbsp;        </p>
	</div>
	<!--close site_content-->
	<!--close content_grey-->
  </div>
  <!--close main-->
  <!--close footer-->
</body>
</html>
