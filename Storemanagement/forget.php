<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="shortcut icon" href="images/DbuLogo.jpg">
<link href="../../../xampp/htdocs/Storemanagement/css/style.css" rel="stylesheet" type="text/css" />
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
.style10 {
	color: #009933;
	font-size: 36px;
}
.style13 {
	color: #006666;
	font-size: 18px;
}
.style14 {font-style: italic; color: #00FFFF; font-weight: bold; }
.style17 {color: #00FFFF; font-size: 14px; }
.style18 {color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
	font-size: medium;
}
-->
  </style>
</head>
<body bgcolor="#66CC99">
<!---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--->
<div id="header">
<!---<img src="images/dbu2.jpg" alt="Image Not Found" width="260" height="120"/>-->
<img src="images/last2.png" alt="Image Not Found" height="120" width="1200"  align="middle"/>
</div>
    <!--close header-->

	<div id="menubar">
      <ul id="menu">
            <li class="current"><a href="index.php">Home</font></a></li>
        <li><a href="about.php">About Us </font></a></li>
        <li><a href="cntct.php">Contact Us</font></a></li>
        <li><a href="login.php">Login</font></a></li>
        
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
<body bgcolor="#FFFFFF">
<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<table border="0" bgcolor="#336633"cellspacing=2 cellpadding=4 class="clock24st" style="line-height:50px; line-width:215px; padding:0;">
<tr><td bgcolor="#336600" class="clock24std" style="font-family:bold; font-size:26px;"><a href=" ">
</a>
<b><a href="http://www.24webclock.com/" style="text-decoration:none;"><span class="clock24s" id="clock24_48332" style="color:white;"></b> </span></a></td></tr>
</table>
<script type="text/javascript">
//var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
//clock24_48332.daylight('ET'); clock24_48332.refresh();
</script></body>
<div id="advert">
<table  >
<tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">DBU-Store Mgt</font></th>
</tr>
<tr>
<td><br><br><center><img width="200" height="175" src="images/BestImage.jpg"/></center></td>
</tr>
</table>

<table border="0">
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
</table>
</div>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->
<?php

if(isset($_POST["reset"])){

$email=$_POST['email'];
$newpass=md5($_POST["newpass"]);
$repass=md5($_POST["repass"]);

//$pattern="/[\w\.]{6,}\@[a-zA_Z]{3,}\.[a-zA-Z\.]{2,}[^\.]$/";
if(empty($_POST["newpass"]) || empty($_POST["email"]) || empty($_POST["repass"])){
$error="please,Fill the required field ";
		   echo $error;
Header("forget.php?fill=$error");
}
elseif(!$email)
{
$error="Inavalid email address please try again";
   echo $error;
Header("forget.php?email=$error");
}

 elseif(strlen($_POST['newpass'])<=6 && strlen($_POST['repass'])<=6)
    {
		$error="please,Enter long password";
		   echo $error;
Header("forget.php?long=$error");
		}
		elseif(strcmp(($_POST['newpass']),($_POST['repass']))!=0)
    {
		$error="Password Not match";
        echo $error;
Header("location:forget.php?match=$error");		
}
else{


$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con) or die("unable to connect :".mysql_error());

$sql="select username from accou where username='$email'";
$res=mysql_query($sql) or die("error".mysql_error());
/*  */
if(mysql_num_rows($res)==0) 
{
$error="No such Email founds";
echo $error;
header("location:forget.php?msg=$error");
}
else{

$sqll="update accou set password='$newpass' where username='$email'";
$res=mysql_query($sqll) or die("unable to change".mysql_error());
	//echo '"You have reset your Password successfuly";'
	header("location:login.php?reset=$congra");

}

}
}
else
{
?>
      <div id="content">
      <div class="content_item">
<form action='forget.php' method="POST">
<center>

 <br /><br/><br/><br/><br/>
  <table width="556" height="371"  align="left" valign="middle" bordercolor="#CCCCCC" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic; padding-left:30px; ">
 <h3 align="center">Please Fill The Following Details</h3>
 <tr><td>Employee Id:</td><td><input type="text" name="empid" style="width: 180px; margin-left: 8px; border: 3px double #CCCCCC; padding:5px 10px;"></td><td><?php if(isset($_GET['empid']))echo $_GET['empid'] ?></td></tr>
 <tr><td width="180">UserName:</td> 
 <td width="180"><input name="email" type ="text" style="width: 180px; margin-left: 8px; border: 3px double #CCCCCC; padding:5px 10px;"></td><td width="513" ><?php if(isset($_GET['email']))echo $_GET['email'] ?></td></tr>
<tr><td>New Password:</td><td><input type="text" name="newpass" style="width: 180px; margin-left: 8px; border: 3px double #CCCCCC; padding:5px 10px;"></td><td><?php if(isset($_GET['long']))echo $_GET['long'] ?></td></tr>
<tr><td>Repeat Password:</td><td><input type="text" name="repass" style="width: 210px; margin-left: 4px; border: 3px double #CCCCCC; padding:5px 10px;"> </td><td><?php if(isset($_GET['match']))echo $_GET['match'] ?></td></tr>
   <tr><td><input type="submit" value="Reset"name="reset"> </td><td><?php if(isset($_GET['fill']))echo $_GET['fill'] ?></td></tr>
<tr><td><?php if(isset($_GET['msg']))echo $_GET['msg'] ?></td></tr>
</table>
</center>
</form>
</td>
</tr>
</table></div></div>
</body>
</html>
<?PHP }
//include("myfooter.php");
?>
