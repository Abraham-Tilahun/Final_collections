<?php
	include("config.php");  
 session_start();
if(isset($_SESSION['validuser']))
 {
  $mail=$_SESSION['validuser'];
 } 
 else {
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
        <li class="current"><a href="technitian.php">Home</font></a></li>
        <li><a href="addapproveditem.php">Approve Material Status</font></a>
		<ul>
		<li><a href="addapproveditem.php">New Material Status</font></a></li>
        <li><a href="approveditemforreturn.php">Approve For Return</font></a></li>
		</ul>
		</li>
        <li><a href="../logout.php" onClick="isConfirmlog();">Log Out</font></a></li>
        
      </ul>
    </div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
<div id="menubar1">
	<ul id="menu1">
	    <li><a href="service.php"><font color="#CCCCCC">Our Service</font></a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">DBU-Store Mgt</font></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="360">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                <img width="200" height="175" src="images/BestImage.jpg"/> 
				 </th>
              </tr>
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
              <tr>
                <th width="230" height="347" colspan="2" scope="row"><marquee direction="up">
                  </marquee>
                    <marquee direction="up">
                    <p>&nbsp;</p>
                    </marquee></th>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div>
	  
          
            	 
            </div>
			<!--close sidebar_item--> 
        </div>
			
			
			
          
        </div><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->	
	
	 		
	
	 
	  <div id="content">
        <div class="content_item">
	  
	  <form action='inssertapproveditem.php' method='post'>
    <table width="405" height="124" bordercolor="#CCCCCC" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic;">
	 <tr>
          <th width="685" height="66" scope="row" >&nbsp;&nbsp;&nbsp;Confirm Item Status here... </th>
        </tr><br/><br /><br/><br /><br />
          <tr>
	       <th align="right" scope="row" >Item Name:</th>
		   <td >
           <input type="text" name="ItemName"  pattern="\D{3,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required />
           </td>
	     </tr>
           <tr>
	       <th align="right" scope="row" >Item Id:</th>
		   <td >
           <input type="text" name="Itemid"  pattern="\d{3,15}" title="Please Fill The Item Name" onKeyPress="return isNumberKey(event)" required />
           </td>
	     </tr>
        <tr>
          <th align="right" scope="row">Quantity</th>
          <td><input name="Qauntity" type="text" id="Qauntity" /></td>
        </tr>
		<tr>
          <th align="right" scope="row">ItemStatus</th>
          <td valign="bottom" background="1"><label>
              <select name="ItemStatus" id="ItemStatus">
                <option>Approved</option>
                <option>Rejected</option>
              </select>
            </label></td>
          </tr>
          <th height="55" colspan="2" align="center" valign="bottom" scope="row"><label>
            <input name="Add" type="submit" id="Add" value="Add" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
            <input type="reset" name="Submit2" value="Cancel" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
          </label></th>
        </tr>
      </table></form>
	</div>
	  </div>
	  
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
