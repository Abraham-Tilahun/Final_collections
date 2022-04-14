<?php
session_start();
include("date.php");
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
  .container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: Black;
    padding: 14px 16px;
 
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: green;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
  </style>

</head>

<body>
  <div id="menubar">
      <ul id="menu">
       <li><a href="Departmenthead page.php">Home</a></li>
		<div class="dropdown">
		 <div class="dropdown-content">	
		  </div>
        </div>
		<li><a href="Requestpurchase.php">Request property</a></li>
		<li><a href="Request_dis.php">Request disposal </a></li>
		<li><a href="View_disposal.php">View Disposal</a></li>
		<li><a href="View request.php">View Request</a></li>
		<li ><a href="Notification_department.php">Notification 
		</a></li>
	   <div style="float:right">
		<div class="dropdown"><button class="dropbtn" color=""><b></b><img width="15" height="15" src="images/default.png"/></button>
		 <div  style="float:right" class="dropdown-content">
          <a href="Change-password.php">Change Password</a>		 
		  <a href="login.php"/>Logout</a>
		  </div>
        </div>		
		</div>
		</div>
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
             <body bgcolor=#9494B8>
<h3>Calender</h3>
	  <script src="css/calander.js" language="javascript" type="text/javascript"></script> 
          <br><br><br><br><br><br><br>
	 <h3
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
</table> </body>
			<div id="menubar1">
	  <ul id="menu">
        
        <li></li>
        <li></li>
        <li></li>
	    <li></li>
	  </ul>
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="	#none" scope="row"><span class="style17">Departmenthead Page</span></th>
        </tr>
      </table>
	  <div class="sidebar">
          
        </div>
            </div>
			
        </div>
          
        </div>
      </div>
	  <div id="content">
	    <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:700px; height:600px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
  <form id="form1" name="Disposal property" method="POST" action="request_disposal_dip.php" onsubmit="return validateForm()">
   <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:30px;"> 
   <div style="float:left;" ><strong><font color="white" size="5px">Disposal property</font></strong></div>
   <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
  <a href="userpage.php" title="Close"><img src="images/back.png"></a></div> 
    </div>
     <table width="350" align="center" height="150px">
     <tr>
    <td colspan="10"><div style="font-family:Arial, Helvetica, sans-serif; color:#none; font-size:18px;">
	<table cellpadding="5" align="center"cellspacing="10">
</div></td>
  </tr>  
     <br>
		  <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> User Id:</td>
		 <td><input type="User_id" name="User_id" size="35" required x-moz-errormessage="User_id" ></td>
	     </tr>
	      <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Item Name:</td>
		 <td><input type="Item_name" name="Item_name" size="35" required x-moz-errormessage="Item_name" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Item Id:</td>
		 <td><input type="ItemId" name="Item_id" size="35" required x-moz-errormessage="ItemId" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Qauntity:</td>
		 <td><input type="qauntity" name="Qauntity" size="35" required ="qauntity" ></td>
	     </tr>
		 <tr>
		 <td class='para1_text' width="220px"><font color="red">*</font> Date:</td>
		 <td><input type="text"  name="Req_Date" id="Req_Date" size="35" onclick="ds_sh(this);" placeholder="Req_Date" autocomplete="off">
	     </tr>
		  <tr>
            <th height="30" colspan="2" align="center" scope="row"><label>
             <input type="submit" name="Send" value="Send" />
             <input type="reset" name="Submit2" value="Cancel" />
            </tr>
</table> 
  </form>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
</body>
</html>
