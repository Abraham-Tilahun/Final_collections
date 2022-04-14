<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
<html>
<head>
<script type='text/javascript'>

 function check()
  {
   if(document.getElementById("txt_username").value =="")
   {
    alert('Please Enter user name !!'); 
    document.getElementById("txt_username").focus();
    return false;
   }
   if(document.getElementById("txt_password").value =="")
   {
    alert('Please Enter Password !!'); 
    document.getElementById("txt_password").focus();
    return false;
   }
  
  if(document.getElementById("select").value =='--select--')
   {
    alert('Please Select Role !!'); 
    document.getElementById("select").focus();
    return false;
   }
  }
</script>

<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/desktop/acer/ac.jpeg"
demo2 = new Image();
demo2.src="images/desktop/dell/dd.jpeg"
demo3 = new Image();
demo3.src="images/labtop/apple/images_030.jpeg"


demo4 = new Image();
demo4.src="images/labtop/dell/dl.jpeg"
demo5 = new Image();
demo5.src="images/labtop/dell/delllap.jpeg" 
demo6= new Image();
demo6. src="images/labtop/toshiba/toshiba-11q4-C655-S5335-cover-sm.jpg"
demo7=new Image();
demo7.src="images/labtop/apple/images_013.jpeg"
}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="shortcut icon" href="images/DbuLogo.jpg">
<head>
<title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/image_slide.js"></script> 
  <script type="text/javascript" src="validlogin.js"></script> 
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
        
      </ul>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
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
</body>
</td>
  
 <td>
<table border=0 width="500" bgcolor="#CCCCCC" style="border-bottom:1px solid #f6b45f" >
<tr><td  align="center"bgcolor="#CCCCCC" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:24px; font-style:italic; font-color:grey;"height="25px">Login Here</td></tr>
<tr>
<td>
	     <script type='text/javascript'>
function formValidation(){
//assign the fields
     
	var txt_username = document.getElementById('txt_username');
	
	if(emailValidator(txt_username,"check your e-mail format")){
	
	return true;
	}
return false;
		
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


	</script>
        <!---<div id="content_item" align="center">---->
        <div id="log" align="center">  
<form action="login.php" method="post" > <br /><br />
<table  bgcolor="#CCCCCC">
<tr align="center" valign="middle" bgcolor="#669999" bordercolor="#FF0000" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:24px; font-style:italic;"><th paddingleft="20" bordercolor="#333333" borderradius="12"><img src="images/login.gif"</th></tr></table>
<table style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:16px; font-style:italic; font-stretch:expanded; border-color:#FF0000; border:thin; border-width:medium; align="center" valign="middle"">
<tr><td>
User Name:<input type="text" name="mail" value="" size="20%" id="txt_username" placeholder="Username" align="middle"></input><br><br></td></tr>
<tr>
<td>
&nbsp;&nbsp;Password:<input type="password" name="pass" value="" size="20%" id="txt_password" placeholder="Password" align="middle"></input><br><br></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Role:<select  name='select' id='select' align="middle">
<option selected="selected">--select--</option>
<option>manager</option>
<option>staff</option>
<option>Clerk</option>
<option>Keeper</option>
<option>Technitian</option>
</select> <br><br></td></tr>
<tr><td><input type='submit' value='Login' name='submitMain' align="middle" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove" Onclick="return check(this.form);"/>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type='reset' value='Reset' align="middle" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
<br><br><br></td></tr>

<tr><td>
<a href="forget.php"><font color="#3399FF" >Forgot Your Password ? </font></a><br><br> 

</td></tr>
	</table>
</form>
</div>
</div>
<?php
 if(isset($_POST['submitMain']))
 {
  $acc=$_POST['select'];
   $user =$_POST['mail'];
   $_SESSION['mail']=$_POST['mail'];
   //$password=$_POST['pass'];
 $password=md5($_POST['pass']);
    $_SESSION['pass']=$_POST['pass'];
   $query = "SELECT * FROM accou WHERE 	username= '{$user}' AND password= '{$password}' AND type='{$acc}';";
   $result_set=mysql_query($query);
if(!$result_set){
die("query is failed".mysql_error());
}
if(mysql_num_rows($result_set)>0)
{

 if($acc=='manager')
{
$_SESSION['validuser']=$user;
echo "<script>window.location='manager/manager.php';</script>";
}
else if($acc=='staff')
{
$_SESSION['validuser']=$user;
echo "<script>window.location='staff/userpage.php';</script>";
}
else if($acc=='Clerk')
{
$_SESSION['validuser']=$user;
echo "<script>window.location='clerk/clerk.php';</script>";
}
else if($acc=='Keeper')
{
$_SESSION['validuser']=$user;
echo "<script>window.location='keeper/keeperpage.php';</script>";
}
else if($acc=='Technitian')
{
$_SESSION['validuser']=$user;
echo "<script>window.location='technitian/technitian.php';</script>";
}
}

else
   {
  echo '<div align="center" ><strong><font color="#FF0000">Role, User Name & Password Not Match !!</font></Strong></div>'; 
   }
//mysql_close($conn);
}
?>
</fieldset>
</table>
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



  
  







