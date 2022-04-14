<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Aksum University property Administration system</title>
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

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="adminpage.php">Home</a></li>
        <li><a href="register.php">register user</a></li>
		<li><a href="Accountmanage.php">Accountmanage</a></li>
		<li><a href="ViewUser.php">ViewUser</a></li>
        <li><a href="view_fedback.php">view_fedback</a></li>
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
			<div id="menubar1">
	
	
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
                    <marquee direction="up" scrollamount="3" behavior="alternate">
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
	<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select EmpId from accou";
$res=mysql_query($sql) or die("query error".mysql_error());

   ?>
	 
	  <div id="content"><form action="srch_deleteuser.php " method="post">
	    <table width="556" height="34">
          <tr>
            <th height="42" colspan="2" align="center" valign="bottom" scope="row"><label>User here... </label></th>
          </tr>
          <tr>
            <th width="278" height="47" align="right" valign="bottom" scope="row">Employee Id </th>
            <td width="262" valign="bottom"><select name="slct" id="slct">
              <?php

		  while($row=mysql_fetch_array($res)){
echo "<option value=".$row['EmpId'].">".$row['EmpId']."</option>";
}
   ?>
            </select></td>
          </tr>
          <tr>
            <th height="28" colspan="2" scope="row"><label>
              <input type="submit" name="Submit" value="View"/>
            </label></th>
          </tr>
        </table>
	  </form>
	  </div>
	  <?Php
	 //include('srch_deleteuser.php');
	 ?>
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2017 Aksum University property Administration system </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
