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
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="images/last2.png" alt="image1" width="1202" height="118"/></div>

    <!--close header-->
<div id="menubar">
      <ul id="menu">
         <li class="current"><a href="manager.php">Home</a></li>
		 <li><a href="signup.php">Create Account </a></li>
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
    </div    ><!--close menubar-->
    <div id="site_content">
      <div class="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_item">
            <script src="http://24timezones.com/js/swfobject.js" language="javascript"></script>
            <script src="http://24timezones.com/timescript/maindata.js.php?city=815322" language="javascript"></script>
            <table>
              <tr>
                <td><div id="flash_container_tt4fe051beada2d"></div>
                    <script type="text/javascript">
var flashMap = new SWFObject("http://24timezones.com/timescript/clock_digit_12.swf", "main", "160", "80", "7.0.22", "#FFFFFF", true)
flashMap.addParam("movie", "http://24timezones.com/timescript/clock_digit_12.swf");
flashMap.addParam("quality", "high");
flashMap.addParam("wmode", "transparent");
flashMap.addParam("flashvars", "color=blueblack&logo=1&city=815322");
flashMap.write("flash_container_tt4fe051beada2d");
      </script></td>
              </tr>
              <tr>
                <td style="text-align: center; font-weight: bold"><a href="http://24timezones.com/world_directory/addis_ababa_local_time.php" target="_blank" title=" " style="text-decoration: none"> </a></td>
              </tr>
            </table>
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
        <li class="show"><img width="990" height="450" src="images/BestImage.jpg"/></li>
       <li><img width="990" height="450" src="images/best desktop.jpg"/></li>
	   <li><img width="990" height="350" src="images/laptop.jpg"/></li>
	   <li><img width="990" height="350" src="images/laptopp.jpg"/></li>
		<li><img width="990" height="350" src="images/Best divider.jpg"/></li>
		<li><img width="990" height="350" src="images/Best-Desktop.jpg"/></li>
		<li><img width="990" height="350" src="images/best-office-chair.jpg"/></li>
		<li><img width="990" height="350" src="images/Best chair.jpg"/></li>
		<li><img width="990" height="350" src="images/Besst Divider.jpg"/></li>
		<li><img width="990" height="350" src="images/speaker 2.jpg"/></li>
		<li><img width="990" height="350" src="images/Multi-socket-divider.jpg"/></li>
      </ul>   	 
  </div>
      <div id="content">
          <table width="495" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">
        <tr>
          <th width="485" height="66" class="style9" scope="row">Create Your account  here... </th>
        </tr>
      </table>
      <p>
        <!--close content-->
      </p>
      <form action='sinup.php' method='post'><table width="330" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">
        <tr>
          <th width="179" align="right" scope="row">Username</th>
          <td width="135"><label>
            <input name="uname" type="text" id="uname"  />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Password</th>
          <td><label>
            <input name="pword" type="text" id="pword" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">FirstName</th>
          <td><label>
            <input name="fname" type="text" id="fname" />
          </label></td>
        </tr>
		 <tr>
          <th align="right" scope="row">LastName</th>
          <td><label>
            <input name="lname" type="text" id="lname" />
          </label></td>
        </tr>
		 <tr>
          <th align="right" scope="row">EmpId</th>
          <td><label>
            <input name="eid" type="text" id="eid" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">type</th>
          <td><label>
          <select name="type" id="type">
            <option>Manager</option>
            <option>keeper</option>
            <option>staff</option>
			<option>Clerk</option>
			<option>Technitian</option>
          </select>
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">status</th>
          <td><input name="stat" type="text" id="stat" /></td>
        </tr>
          <th height="55" colspan="2" align="right" valign="middle" scope="row"><label>
            <input type="submit" name="Submit" value="Create" />
            <input type="reset" name="Submit2" value="Cancel" />
          </label></th>
        </tr>
      </table>
      </form>
      </div>
      <ul id="menu">
        <li class="style9  style18">
          <h2 class="style19">Copyright©2013 Debre Berhan University Store Management System </h2>
        </li>
      </ul>
      <!--close sidebar_container-->
    </div>
    <!--close sidebar-->
</body>
</html>
