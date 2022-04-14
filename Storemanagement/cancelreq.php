<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style8 {color: #000000; font-weight: bold; font-style: italic;}
-->
  </style>
  <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
<!--sa calendar-->	
	<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style15 {color: #00FFFF;
	font-size: x-large;
}
.style18 {color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
	font-size: medium;
}

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
        <li ><a href="userpage.php">Home</a></li>
        <li><a href="usearchitem.php">Search Item </a></li>
        <li><a href="requestonline.php">Request Online </a></li>
		<li class="current"><a href="cancelreq.php">Cancel Request </a></li>
        <li><a href="viewownloan.php">View Own Loan </a></li>
        
   
		<li><a href="login.php">logout</a></li>
        
      </ul>
    </div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
                 <body bgcolor=#9494B8>
</body><div id="menubar1">
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
	<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select EmpId from request";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
	  <form action="cancelreq.php " method="post">
      <table width="399">
        <tr>
          <th height="63" colspan="2" align="center" valign="bottom" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th width="194" height="41" align="right" valign="bottom" scope="row">Employee Id </th>
          <th width="195" align="left" valign="bottom" scope="row"><label><br />
              <input name="eid" type="text" id="EmpId" />
          </label></th>
        </tr>
        <tr>
          <th height="39" colspan="2" align="center" scope="row"> <input name="Send" type="submit" class="w4em" id="Send" value="View" /></th>
        </tr>
      </table>
      <p>&nbsp;</p>
	  </form>
	  <?Php
	 include('cancel_req.php');
	 ?></div>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	<ul id="footer">
       
        <li class="style9  style18">
          <h2 class="style19"align="center">Copyright©2015 Debre Berhan University Store Management System </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
