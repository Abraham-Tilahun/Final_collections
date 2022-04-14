<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title> Aksum University property Administration system</title>
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
      <img src="images/Ak.jpg" alt="image1" width="120" height="98"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="userpage.php">Home</a></li>
        <li><a href="viewitem.php">View Item </a></li>
        <li class="current"><a href="usearchitem.php">Search Item </a></li>
        <li><a href="requestonline.php">item Request</a></li>
		<li><a href="return_item_2.php">item return</a></li>
		<li><a href="cancelreq.php">Cancel Request </a></li>
        <li><a href="viewownloan.php">View Own Loan </a></li>
		<li style="float:right"><a class="active" href="login.php" style="height:20px;line-height:20px;"><img src="menubanner_files/css3menu3/register2.png" alt=""/>Logout</a></li>
        
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
			<div id="menubar1">
	
	
	  <ul id="menu">
        
        <li></li>
        <li></li>
        <li></li>
	    <li></li>
	    <li><a href="ufeedback.php">Feedback </a></li>
	  </ul>
	  <ul id="menu">
        
        <li></li>
        <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li><a href="return.php">ViewMessage </a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
          <th width="212" bgcolor="#330066" scope="row"><span class="style17">users Principles </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="384">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                    <marquee direction="up">
                      1.Raise requests for issue of inventory items using the standard requestform.
                      <p>2. Raise requests for approval of disposal using the standard disposal form.</p>
                      <p>3.view an item before sending request to the store. </p>
                      <p>4.remember their request id given by the store manager </p>
                      <p>&nbsp;</p>
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
	
	 
	  <div id="content">
        <div class="content_item">
		  <?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select ItemName from new_item";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
	   <form action="usearchitem.php " method="post">
      <table width="399">
        <tr>
          <th width="194" height="62" align="right" valign="bottom" scope="row">Item Name </th>
          <th width="195" align="left" valign="bottom" scope="row"><label>
          <select name="cb" id="b">
		  <?php
		  while($row=mysql_fetch_array($res)){
echo "<option value=".$row['ItemName'].">".$row['ItemName']."</option>";
}
   ?>    
          </select>
          </label></th>
        </tr>
        <tr>
          <th height="39" colspan="2" scope="row"><label>
            <input name="Submit" type="submit" class="style8" value="Search" />
          </label></th>
        </tr>
      </table></form>
	  <?Php
	 include('usrch_item.php');
	 ?></div>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19"align="center">Copyright©2017 Aksum University property Administration system</h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
