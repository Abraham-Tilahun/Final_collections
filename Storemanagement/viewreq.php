<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style9 {color: #006600}
.style15 {
	color: #00FFFF;
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
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->
<div id="menubar">
      <ul id="menu">
         <li class="current"><a href="manager.php">Home</a></li>
        <li><a href="#">Manage User </a>
		<ul>
		<li><a href="reguser.php">Register User </a></li>
         <li><a href="manageuser.php">Manage User Status </a></li>
        <li><a href="deleteuser.php">Delete User </a></li>
		<li><a href="viewuser.php">View User </a></li>
		</ul>
		</li>
		 <li><a href="#">Request Transaction </a>
		<ul>
	     <li><a href="approvereq.php">Approve Request </a></li>
		  <li><a href="viewreq.php">View Request </a></li>
		</ul>
		</li>
        <li><a href="viewreport.php">View Report </a></li>
		<li><a href="viewcomment.php">View Comment </a></li>
       <li><a href="login.php">logout</li>
        
      </ul>
    </div><!--close menubar-->	
    
	<div id="site_content">
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
           <body bgcolor=#9494B8>
<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<table border="0" bgcolor=#0000FF cellspacing=2 cellpadding=4 class="clock24st" style="line-height:50px; line-width:215px; padding:0;">
<tr><td bgcolor=#000000 class="clock24std" style="font-family:bold; font-size:26px;"><a href=" ">
</a>
<b><a href="http://www.24webclock.com/" style="text-decoration:none;"><span class="clock24s" id="clock24_48332" style="color:white;"></b> </span></a></td></tr>
</table>
<script type="text/javascript">
//var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
//clock24_48332.daylight('ET'); clock24_48332.refresh();
</script></body>
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
	   <div id="content">
        <div class="content_item">
		  <form action='view_req.php' method='post'>
	    <p>&nbsp;</p>
	    </form>
		<?php
		include("view_req.php");
		?></div>
	  </div>
	  
	  
	  
	  
	  <!--close sidebar_container-->
</div>
	  <ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2015 Debre Berhan University Store Management System </h2>
        </li>
      </ul>
	  <!--close sidebar-->

</body>
</html>
