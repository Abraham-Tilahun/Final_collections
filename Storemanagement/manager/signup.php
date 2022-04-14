<?php
	include("config.php");  
 session_start();
if(isset($_SESSION['validuser']))
 {
  $mail=$_SESSION['validuser'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['validuser'];

$result=mysql_query("select * from accou where username='$user_id'")or die(mysql_error());
$row=mysql_fetch_array($result);
$empid=$row['EmpId'];
$result1=mysql_query("select * from user where EmpId='$empid'")or die(mysql_error());
$row1=mysql_fetch_array($result1);
$empname=$row1['FirstName'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

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
<script type='text/javascript'>

 function check()
  {
if(document.getElementById("select").value =='--select--')
   {
    alert('Please Select Role !!'); 
    document.getElementById("select").focus();
    return false;
   }
  }
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
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="../images/last2.png" alt="image1" width="1202" height="118"/></div>

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
       <li><a href="../logout.php"onClick="isConfirmlog();">logout</a></li>
        
      </ul>
    </div><!--close menubar-->
    <div id="site_content">
      <div class="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_item">
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
        <div id="log" align="center">
        <form action='sinup.php' method='post'>
         <table width="495" bordercolor="#CCCCCC" align="center" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic;"><br /><br /><br /><br /><br /><br />
        <tr>
           <th height="45"  bgcolor="#669999" colspan="2" valign="middle" scope="row" style="font-family:'Times New Roman', Times, serif; font-size:25px; border-radius:30px; font-style:italic;">
           Create New account Here
          </th>
        </tr>
         <tr>
          <th width="179" align="right" scope="row">Username</th>
          <td width="135"><label>
            <input name="uname" type="text" id="uname" pattern="\w{2,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required/>
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Password</th>
          <td><label>
            <input name="pword" type="text" id="pword" pattern="\w{8,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required />
          </label></td>
        </tr>
       <tr>
	       <th align="right" scope="row" >Emp ID:</th>
		   <td ><select name="empid" style="width:140px;"  maxlength="5" required>
		   <?php


$result=mysql_query("select * from user")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['EmpId'].">".$row['EmpId']."</option>";
}
?>
                </select></td>
	     </tr>
        <tr>
          <th align="right" scope="row">Account Type</th>
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
          <th align="right" scope="row">Status</th>
          <td><input name="stat" type="text" id="stat" value="Active" readonly="readonly"  /></td>
        </tr>
          <th height="55" colspan="2" align="right" valign="middle" scope="row"><label>
            <input type="submit" name="Submit" value="Create" />
            <input type="reset" name="Submit2" value="Cancel" />
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
