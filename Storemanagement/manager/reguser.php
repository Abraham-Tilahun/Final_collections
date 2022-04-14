
<?php 
session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php 
} 
 ?>
 <script language="javascript">
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='manager.php');
   
   }
   else
   {
     return false;
   }
  }
  </script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <script language='Javascript'>
			  function isNumberKey(evt){
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				 return true;
			  }
		</script>
		    <script language='Javascript'>
			  function isText(e){
				 var keyCode = e.which ? e.which : event.keyCode
				 if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))
					return true;
				 return false;
			  }
		</script>
<head>
  <title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
   <link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : '../src/loading.gif',
      closeImage   : '../src/closelabel.png'
    })
  })
</script>
<script language="javascript">
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='manager.php');
   
   }
   else
   {
     return false;
   }
  }
  </script>
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
      <img src="../images/last2.png" alt="image1" width="1201" height="118"/></div>

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
       <li><a href="../logout.php" onClick="isConfirmlog();">logout</li>
        
      </ul>
    </div><!--close menubar-->
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
             <body bgcolor=#9494B8>
</body>
<script language="javascript" src="../datetimepicker.js"></script>
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
      <div class="content_item" align="center">
	  <form action='register_user.php' method='post'>
	  <table width="556" height="371"  align="left" valign="middle" bordercolor="#CCCCCC" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic; padding-left:30px; "><br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <tr>
          <th height="45"  bgcolor="#669999" colspan="2" valign="middle" scope="row" style="font-family:'Times New Roman', Times, serif; font-size:25px; border-radius:30px; font-style:italic;">
           New User Registration Form
          </th>
        </tr>
        <tr>
          <th width="272" height="17" align="right" scope="row">First Name </th>
          <td width="268"><label font style="Times New Roman", Times, serif;>
            <input name="FirstName" type="text" id="FirstName" onKeyPress="return isText(event)" pattern="\D{3,15}" title="Please Fill The First Name" required/>
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Middle Name </th>
          <td><label>
            <input name="MiddleName" type="text" id="MiddleName" onKeyPress="return isText(event)" required/>
          </label></td>
        </tr>
        <tr>
          <th height="22" align="right" scope="row">Laste Name </th>
          <td><label>
            <input name="LastName" type="text" id="LastName" onKeyPress="return isText(event)" required/>
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Employee Id </th>
          <td><label>
            <input name="EmployeeId" type="text" id="EmployeeId" pattern="\w{2,15}" title="Please Enter The Employee Id"  required/>
          </label></td>
        </tr>
        <tr>
          <th height="20" align="right" scope="row" >Gender</th>
          <td><label>
            <select name="Gender" id="Gender" required>
            <option selected="selected">--select--</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <th height="26" align="right" scope="row">Birth Date </th>
          <th height="26" align="left" scope="row"><input class="mine_text_field_7" name="date" id="txtfrom" size="20"  readonly="readonly" type="text" placeholder='Birth date' required/>
<a href="javascript:NewCssCal('txtfrom','yyyymmdd')"><img src="images/at.png" width="20" height="21" border="0" /></a></th>
        </tr>
        <tr>
          <th height="20" align="right" scope="row">Address</th>
          <td><label>
            <input name="Address" type="text" id="Address" required onKeyPress="return isText(event)" />
          </label></td>
        </tr>
        <tr>
          <th height="19" align="right" scope="row">Phone Number </th>
          <td><label>
            <input name="PhoneNumber" type="text" id="PhoneNumber" pattern="\d{2,10}" title="Please Enter The Employee Id"onKeyPress="return isNumberKey(event)" required />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Salary</th>
          <td><label>
            <input name="Salary" type="text" id="Salary" onKeyPress="return isNumberKey(event)" required/>
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">Depatment</th>
          <td><label>
            <input name="department" type="text" id="department" onKeyPress="return isText(event)" required/>
          </label></td>
        </tr>
        
        <tr>
          <th height="28" colspan="2" scope="row"><label>
            <input type="submit" name="Submit" value="Register" style="font-family:'Times New Roman', Times, serif; font-size:18px; font-style:italic;'" />
          </label>
            <label>
            <input type="reset" name="Submit2" value="Cancel" style="font-family:'Times New Roman', Times, serif; font-size:18px; font-style:italic;'"/>
          </label></th>
        </tr>
		
      </table>
	  </form>
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
