
<?php
	require_once('auth.php');
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
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li ><a href="adminpage.php">Home</a></li>
        <li><a href="reguser.php">Register User </a></li>
        <li><a href="regkeeper.php">Register Kepper </a></li>
		<li class="current"><a href="manageuser.php">Manage User </a></li>
        <li><a href="deleteuser.php">Delete User </a></li>
        <li><a href="viewreport.php">View Report </a></li>
       <li><a href="login.php">logout</a></li>
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
var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
clock24_48332.daylight('ET'); clock24_48332.refresh();
</script></body>
            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
				<!---   <table width="212" height="384" bgcolor="#669933">
               <tr>
                 <th height="28" colspan="2" bgcolor="#666666" scope="row"><p> </p>
   <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                     1.Raise requests for issue of inventory items using the standard requestform.
                       <p>2. Raise requests for approval of disposal using the standard disposal form.</p>
                       <p>3.view an item before sending request to the store. </p>
                       <p>4.remember their request id given by the store manager </p>
                       <p>&nbsp;</p>
                   </marquee>
                     </p></th>----!>
					  <table width="212" height="384" bgcolor="#669933">
               <tr> 
               </tr><br><br><br>
                 <th width="230" height="50" colspan="2" scope="row" bgcolor="#FF6633"><h1><blink >Well Come to Our Official Website</blink></h1><img width="200" height="175" src="images/BestImage.jpg"/><br />
               
             </table>
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
	    <form action="manage_user.php " method="post">
</p>
	  <p>&nbsp;</p>
	  <table width="556" height="124">
          <tr>
            <th height="28" colspan="2" align="center" valign="bottom" scope="row"><?php echo $message;?>&nbsp;</th>
          </tr>
          <tr>
            <th width="278" height="28" align="right" valign="bottom" background="1" scope="row">User Name </th>
            <td width="262" valign="bottom" background="1"><label>
              <input name="un" type="text" id="un" />
            </label></td>
          </tr>
          <tr>
            <th height="28" align="right" valign="bottom" background="1" scope="row">Status</th>
            <td valign="bottom" background="1"><label>
              <select name="sel" id="sel">
                <option>Enable</option>
                <option>Diable</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <th height="28" colspan="2" scope="row"><label>
              <input type="submit" name="Submit" value="Ok" />
            </label></th>
          </tr>
</table>
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
