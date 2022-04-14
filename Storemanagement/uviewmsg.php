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
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="userpage.php">Home</a></li>
        <li><a href="viewitem.php">View Item </a></li>
        <li><a href="usearchitem.php">Search Item </a></li>
        <li><a href="requestonline.php">Request Online </a></li>
		<li><a href="cancelreq.php">Cancel Request </a></li>
        <li><a href="viewownloan.php">View Own Loan </a></li>
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
		<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select EmpId from message";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
		
          <h1>&nbsp;</h1> <form action='uviewmsg.php' method='post'>
            
		    <table width="293">
              <tr>
                <th width="64" align="right" scope="row">EmpId</th>
                <td width="213"><label>
                  <input name="xx" type="text" id="vid" />
                </label></td>
              </tr>
              <tr>
                <th colspan="2" scope="row"><label>
                  <input type="submit" name="Submit" value="View" />
                </label></th>
              </tr>
            </table>
          </form>
		  <?Php
	include('uview_msg.php');
	 ?>
		  <h1>&nbsp;</h1> 
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
