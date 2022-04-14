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
$today=date('Y-m-d');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="shortcut icon" href="images/DbuLogo.jpg">
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
      <img src="../images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->


	<div id="menubar">
      <ul id="menu">
         <li class="current"><a href="userpage.php">Home</a></li>
           <li><a href="#">Request Online </a>
         <ul>
        <li><a href="requestonline.php">Request Online </a></li>
		<li><a href="cancelreq.php">Cancel Request </a></li>
        <li><a href="uviewrequest.php">view sent Request </a></li>
        </ul>
        </li>
        <li><a href="#">Item Transaction </a>
        <ul>
        <li><a href="usearchitem.php">Search Item </a></li>
        <li><a href="transeferitem.php">Transfer Item </a></li>
         <li><a href="chreturnitem.php">ReturnItem </a></li>
        <li><a href="confirmitemrequset.php">Requested Items </a></li>
        </ul></li>
        <li><a href="viewownloan.php">View User Loan </a></li>
        <li><a href="../logout.php" onClick="isConfirmlog();">Log Out </a></li>
        
      </ul>
    </div>
<!--close menubar-->	
    
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
<table border="0px" bgcolor="white" width='700'>
<tr><td bgcolor=#c53b1c height="30px" width='800' colspan='2' align="center">ChangePassword</td></tr>

<td border=0 valign="top" height="500"  width="100"style="border-bottom:1px solid #f6b45f;margin-top:0.5%;">
<script type='text/javascript'>
function formValidation(){
//assign the fields
        
	var old = document.getElementById('old');
	var neww = document.getElementById('neww');
	var confi = document.getElementById('confi');

if(lengthRestriction(old, 4, 30,"for your oldpassword")){
if(lengthRestriction(neww, 4, 30,"for your newpassword")){
if(lengthRestriction(confi, 4, 30,"for your Confirmpassword")){
	return true;
	}}
	}
	
	
	

return false;
		
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter Above " +min+ "  characters" +helperMsg);
		elem.focus();
		return false;
	}
}


	</script>






<form action="ChangePass.php" method="post" onsubmit='return formValidation()'>
<fieldset>
<legend><h4>Change password</h4></legend>
Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id='old' placeholder='OldPassword'><br><br>
New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id='neww' placeholder='NewPassword'><br><br>
Confirm New password:&nbsp;<input type="password" name="rpass" id='confi' placeholder='ConfrimPassword'><br>
<p align="center"><input type="submit" name="update" value="update" Onclick="return check(this.form);"/>&nbsp;&nbsp;
<input type='reset' value='clear'></p><br><br>
<p align="center"><img src="images/LOCK.png" height="150" width="350"></p>
</fieldset>
</form>	
	<?php
if(isset($_POST['update']))
{
$password = $_POST['password'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
//define("db_server","localhost");
//define("db_user","root");
define("db_pass","");
//define("db_name","epcsdb");
$connect=mysql_connect("localhost","root","");
if(!$connect){
die("error connection to db server".mysql_error());
}
$dbselect=mysql_select_db("dbu", $connect);
if(!$dbselect){
die("error inselecting db ".mysql_error());
}
$query="select * from accou where password='{$password}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
if($pass==$rpass){
$query="update register set password='{$pass}' where password='{$password}' ";
$result=mysql_query($query);
}
else{
echo"<script language='javascript'>";
echo"alert('New Password AND Confirm Password Not Match!')";
echo"</script>";
}
if(!$result)
{
die("Query update is failed" .mysql_error());
}
else
{
echo"<script language='javascript'>";
echo"alert('Update password is succesfull!')";
echo"</script>";
}
}
else
{
echo"<script language='javascript'>";
echo"alert('Wrong Old Password')";
echo"</script>";
}
}
?>

</table>
</td> 
<tr>
<td border=1 align="center"height="2"  colspan=3 > 
<font color=white ><p>TK&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>


</body>
</html>
  
  







