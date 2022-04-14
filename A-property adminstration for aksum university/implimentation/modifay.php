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
.container {
    overflow: hidden;
    background-color: #F5FFFA;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: #F5FFFA;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: Black;
    padding: 14px 16px;
 
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: #F5FFFA;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F5FFFA;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 14px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color:green;
}

.dropdown:hover .dropdown-content {
    display: block;
	font-size: 14px
}

 
  </style>
</head>

<body>
  
	<div id="menubar">
      <ul id="menu">
        <li><a href="adminpage.php">Home</a></li>
		<div class="dropdown">
		 <div class="dropdown-content">	
		  </div>
        </div>
		<li><a href="ViewUser.php">ViewUser</a></li>
        <li><a href="view_fedback.php">view fedback</a></li>
		<div class="dropdown"><button class="dropbtn" color="black"><b></b>Manage user account</button>
		 <div  style="float:right" class="dropdown-content">
		  <a href="register.php">Register New Employee</a></li>
		 <a href="Accountmanage.php">Edit Employee Account </a>
		  </div>
        </div>
		<div style="float:right">
		<div class="dropdown"><button class="dropbtn" color="black"><b></b><img width="15" height="15" src="images/default.png"/></button>
		 <div  style="float:right" class="dropdown-content">
		  <a href="passchange.php">Change Password</a>
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
</table></body>
			<div id="menubar1">
	  <table width="220" height="36">
        <tr>
          <th width="212" bgcolor="#none" scope="row"><span class="style17"> System AdministrationPage </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          
        </div>    	 
            </div>
			
        </div>
        </div>
      </div>
	   <div id="content">
        <div class="content_item">
		 
	    <p>&nbsp;</p>
		<?php
		include("modifyuser.php");
		?>
		</div>
	  </div>
	  
	  
	  
	  
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
