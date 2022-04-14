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
.style8 {color: #000000; font-weight: bold; font-style: italic;}
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
        <li ><a href="technitian.php">Home</a></li>
        <li class="current"><a href="addapproveditem.php">Approve New Material Status </a></li>
        <li><a href="approvedforreturn.php">Approved For Return </a></li>
		<li><a href="loginstore.php">logout</li>
        
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
		
		<table width="495">
        <tr>
          <th width="485" height="66" scope="row"><img src="images/adddd.jpg" alt="" width="110" height="53" />Item here... </th>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>
       <?php echo $message;?> <!--close content-->
      </p>
	  
	  <form action='inssert_item.php' method='post'>
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
          <th align="right" scope="row">Quantity</th>
          <td><input name="Qauntity" type="text" id="Qauntity" /></td>
        </tr>
		<tr>
          <th align="right" scope="row">ItemStatus</th>
          <td valign="bottom" background="1"><label>
              <select name="ItemStatus" id="ItemStatus">
                <option>Approved</option>
                <option>RejectedOudated</option>
              </select>
            </label></td>
          </tr>
        <tr>
          <th height="55" colspan="2" align="center" valign="bottom" scope="row"><label>
            <input name="Add" type="submit" id="Add" value="Add" />
            <input type="reset" name="Submit2" value="Cancel" />
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
