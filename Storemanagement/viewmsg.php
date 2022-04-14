<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>IOT store managment system</title>
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
.style17 {	color: #FFFFFF;
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
      <img src="images/last2.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="adminpage.php">Home</a></li>
        <li><a href="reguser.php">Register User </a></li>
        <li><a href="regkeeper.php">Register Kepper </a></li>
		<li><a href="manageuser.php">Manage User </a></li>
        <li><a href="deleteuser.php">Delete User </a></li>
        <li><a href="viewreport.php">View Report </a></li>
       <li><a href="login.php">logout</a></li>
      </ul>
    </div><!--close menubar-->
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <script src="http://24timezones.com/js/swfobject.js" language="javascript"></script>
<script src="http://24timezones.com/timescript/maindata.js.php?city=815322" language="javascript"></script>
<table><tr><td><div id="flash_container_tt4fe051beada2d"></div><script type="text/javascript">
var flashMap = new SWFObject("http://24timezones.com/timescript/clock_digit_12.swf", "main", "160", "80", "7.0.22", "#FFFFFF", true)
flashMap.addParam("movie", "http://24timezones.com/timescript/clock_digit_12.swf");
flashMap.addParam("quality", "high");
flashMap.addParam("wmode", "transparent");
flashMap.addParam("flashvars", "color=blueblack&logo=1&city=815322");
flashMap.write("flash_container_tt4fe051beada2d");
</script></td></tr><tr><td style="text-align: center; font-weight: bold">
<a href="http://24timezones.com/world_directory/addis_ababa_local_time.php" target="_blank" title=" " style="text-decoration: none">
</a></td></tr></table>

            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="menubar1">
	
	
	  <ul id="menu">
        
        <li></li>
        <li></li>
        <li></li>
	    <li></li>
	    <li><a href="feedback.php"></a></li>
	  </ul>
	  <ul id="menu">
        
        <li></li>
        <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li class="current"><a href="viewmsg.php">View Message </a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="212" height="36">
        <tr>
          <th width="204" bgcolor="#330066" scope="row"><span class="style17">Principles of admin </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="384">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p>
                    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                      1-Oversee activities directly related to making products or providing services.
                      </p>
                    <p>2-Direct and coordinate activities of businesses or departments concerned   with the production, pricing, sales, or distribution of products.</p>
                      <p>3-Manage staff, preparing work schedules and assigning specific duties.</p>
                      <p>4-Establish and implement departmental policies, goals, objectives, and   procedures, conferring with board members, organization officials, and   staff members as necessary.</p>
                      <p>Determine staffing requirements, and interview, hire and train new employees, or oversee those personnel processes.</p>
                    </marquee>
                  </p></th>
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
            <ul id="menu">
        
        <li></li>
	  </ul>
			
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
	<div>
      <ul class="slideshow">
        <li class="show"><img width="975" height="350" src="images/home4.jpg"/></li>
       <li><img width="975" height="350" src="images/home1.jpg"/></li>
		<li><img width="975" height="350" src="images/home3.jpg"/></li>
		<li><img width="975" height="350" src="images/home.jpg"/></li>
		<li><img width="975" height="350" src="images/home2.jpg"/></li>
      </ul>   	 
	 </div>
	 
	  <div id="content1">
        <div class="content_item">
         
		  <form action='viewmsg.php' method='post'>
		  </form>
            <?Php
	 include('view_msg.php');
	 ?>
		  
		  
        </div>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2013 Bahir Dar University Store Management System </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
