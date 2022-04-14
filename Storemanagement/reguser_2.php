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
        <li ><a href="manager.php">Home</a></li>
        <li class="current"><a href="reguser.php">Register User </a></li>
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
            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="menubar1">
	
	
	  
	  <ul id="menu">
        
        <li></li>
        <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li><a href="kviewmsg.php">View Message</a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
          <th width="212" bgcolor="#330066" scope="row"><span class="style17">Clerk Page </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="360">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                 <img src="../storefinal/images/goods.jpg"  />
				 </th>
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
	    <form action='register_user.php' method='post'><table width="556" height="371">
        <tr>
          <th height="95" colspan="2" valign="top" scope="row"><p><img src="images/bof_02.jpg" alt="" width="61" height="20" /> new user here..<img src="images/newuser.png" alt="" width="48" height="48" /></p>
            <p><?php echo $message;?>&nbsp;</p>
          </th>
        </tr>
        <tr>
          <th width="272" height="17" align="right" scope="row">First Name </th>
          <td width="268"><label>
            <input name="FirstName" type="text" id="FirstName" />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Middle Name </th>
          <td><label>
            <input name="MiddleName" type="text" id="MiddleName" />
          </label></td>
        </tr>
        <tr>
          <th height="22" align="right" scope="row">Laste Name </th>
          <td><label>
            <input name="LastName" type="text" id="LastName" />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Employee Id </th>
          <td><label>
            <input name="EmployeeId" type="text" id="EmployeeId" />
          </label></td>
        </tr>
        <tr>
          <th height="20" align="right" scope="row">Gender</th>
          <td><label>
            <select name="Gender" id="Gender">
              <option>Male</option>
              <option>Female</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Age</th>
          <td><label>
            <input name="Age" type="text" id="Age" />
          </label></td>
        </tr>
        <tr>
          <th height="20" align="right" scope="row">Address</th>
          <td><label>
            <input name="Address" type="text" id="Address" />
          </label></td>
        </tr>
        <tr>
          <th height="19" align="right" scope="row">Phone Number </th>
          <td><label>
            <input name="PhoneNumber" type="text" id="PhoneNumber" />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Depatment</th>
          <td><label>
            <input name="department" type="text" id="department" />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Salary</th>
          <td><label>
            <input name="Salary" type="text" id="Salary" />
          </label></td>
        </tr>
        <tr>
          <th height="28" colspan="2" scope="row"><label>
            <input type="submit" name="Submit" value="Register" />
          </label>
            <label>
            <input type="reset" name="Submit2" value="Cancel" />
          </label></th>
        </tr>
      </table>
	
	  
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
