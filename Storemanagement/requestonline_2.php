<?php   
 //session_start();
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
         <li class="current"><a href="manager.php">Home</a></li>
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
    </div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <body bgcolor=#9494B8>
<script language="javascript" src="datetimepicker1.js"></script>
</body>
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
		   <form action="send_request.php " method="post">
      <table width="399">
        <tr>
          <th height="41" colspan="2" align="center" valign="bottom" scope="row"><?php echo $msg;?>&nbsp;</th>
        </tr>
        <tr>
          <th width="194" height="71" align="right" valign="bottom" scope="row">Employee Id </th>
          <th width="195" align="left" valign="bottom" scope="row"><label><br />
              <input name="EmployeeId" type="text" id="EmployeeId" value="'.$b.'" />
          </label></th>
        </tr>
        <tr>
          <th height="26" align="right" scope="row"><label>Item Id </label></th>
          <th height="26" align="left" scope="row"><p>
            <input name="Itemid" type="text" id="Itemid" />
          </p>
          </th>
        </tr>
        <tr>
          <th height="27" align="right" scope="row">Quantity</th>
          <th height="27" align="left" scope="row"><p>
            <input name="Qauntity" type="text" id="Qauntity" />
          </p>          </th>
        </tr>
        <tr>
          <th height="26" align="right" scope="row">Request Date </th>
          <th height="26" align="left" scope="row"><input class="mine_text_field_7" name="date" id="txtfrom" size="20"  readonly="readonly" type="text" placeholder='birth date'/>
<a href="javascript:NewCssCal('txtfrom','yyyymmdd')"><img src="images/at.png" width="20" height="21" border="0" /></a></th>
        </tr>
          <th height="39" colspan="2" scope="row"><input name="Send" type="submit" class="style8" id="Send" value="Send" />
          <input name="Cancel" type="reset" class="style8" id="Cancel" value="Cancel" /></th>
        </tr>
      </table>
      <p>&nbsp;</p>
	  </form></div>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	<div id="footer">
       
        <li class="style9  style18">
          <h2 class="style19"align="center">Debre Berhan University Store Management System </h2>
        </li>
</div>
	<!--close sidebar-->
</body>
</html>
