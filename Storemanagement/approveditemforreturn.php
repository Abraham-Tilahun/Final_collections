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
        <li ><a href="technitian.php">Home</a></li>
        <li><a href="addapproveditem.php">Approve New Material Status </a></li>
        <li  class="current"><a href="approveditemforreturn.php">Approved For Return </a></li>
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
		
		<table width="495"  border="2" bordercolor="#3399FF">
        <tr>
          <th width="485" height="66" scope="row"><img src="images/adddd.jpg" alt="" width="110" height="53" />Item here... </th>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>
        <!--close content-->
      </p>
	  
	  <form action='inssertapproveditemforreturn.php' method='post'>
      <table width="330" align="center"  bordercolor="#FFCC99">
          <th width="179" align="right" scope="row">Item Name </th>
          <td width="135"><label>
            <input name="ItemName" type="text" id="ItemName" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">ReturnedItemId </th>
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
                <option>Rejected</option>
              </select>
            </label></td>
			
          </tr>
		   <tr>
          <th align="right" scope="row">EmpId</th>
          <td><input name="Emp" type="text" id="Emp" /></td>
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
