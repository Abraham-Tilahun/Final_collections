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
<table border=0 width="500" bgcolor="#FFFFFF" style="border-bottom:1px solid #f6b45f" >
<tr><td bgcolor=#c53b1c height="25px">Login Page</td></tr>
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
<form action="login.php" method="post" > 
<fieldset style=" border-color:#FFFFFF; height:415; width:976; align="center"">
<legend >WEL COME TO LOGIN</legend>


<br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username:<input type="text" name="mail" value="" size="20%" id="txt_username" placeholder="Username" align="middle" font style="Times New Roman", Times, serif; font size=16px;></input><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:<input type="password" name="pass" value="" size="20%" id="txt_password" placeholder="Password" align="middle"></input><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Role:<select  name='select' id='select' align="middle">
<option selected="selected">--select--</option>
<option>manager</option>
<option>staff</option>
<option>Clerk</option>
<option>Keeper</option>
<option>Technitian</option>
</select> <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='login' name='submitMain' align="middle" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove" Onclick="return check(this.form);"/>
<input type='reset' value='Reset' align="middle" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forget.php"><font color="#3399FF" >Forgot Your Password ? </font></a><br><br> 

</td></tr>
	
</form>
<?php
 if(isset($_POST['submitMain']))
 {
  $acc=$_POST['select'];
   $user =$_POST['mail'];
   $_SESSION['mail']=$_POST['mail'];
   $password=$_POST['pass'];
    $_SESSION['pass']=$_POST['pass'];
   $sql = "SELECT * FROM accou WHERE 	username= '{$user}' AND password= '{$password}' AND type='{$acc}';";
    $result = mysql_query($sql); 
		$rowCheck = mysql_num_rows($result);
		if($rowCheck == 0){
	echo "<p class='wrong'><br />User Name/Password could not be verfied please try again.</p>";
	echo' <meta content="4;login.php" http-equiv="refresh" />';	
	}
   //$result_set=mysql_query($query);
{
		$row=mysql_fetch_array($result);
        $status=$row['status'];
		$username = $row['EmpId'];
		 if($row['type']=='Manager'){ 
		 if($status=='active'){
		$_SESSION['validuser']=$username;
		$_SESSION['type'] = $row['type'];
		//$link = "UPDATE User_Account SET`Last_Loged_date`=NOW() WHERE UserName='$username'";
		//$res = mysql_query($link) or die(mysql_error());
         echo "<script>window.location='Manager/manager.php';</script>";
			} 
			else{
		echo'<p class="wrong"> Your Account is not active !!!</p>';                                
		   echo' <meta content="6;login.php" http-equiv="refresh" />';	
		}
		}	
			else if($row['type']=='clerk'){
          if($status=='active'){	
		$_SESSION['validuser']=$username;
		$_SESSION['type'] = $row['type'];
		//$link = "UPDATE User_Account SET`Last_Loged_date`=NOW() WHERE UserName='$username'";
		//$res = mysql_query($link) or die(mysql_error());
         echo'  <meta content="1;clerk/clerk.php" http-equiv="refresh" />';
			}
			else{
		echo'  <p class="wrong"> Your Account is not active </p>';                                
		   echo' <meta content="6;login.php" http-equiv="refresh" />';	
		   
		}
		}
			else if($row['type']=='staff'){
          if($status=='active'){	
		$_SESSION['validuser']=$username;
		$_SESSION['type'] = $row['type'];
		//$link = "UPDATE User_Account SET`Last_Loged_date`=NOW() WHERE UserName='$username'";
		//$res = mysql_query($link) or die(mysql_error());
         echo'  <meta content="1;staff/userpage.php" http-equiv="refresh" />';
			}
			else{
		echo' <p class="wrong"> Your Account is not active</p>';                                
		   echo' <meta content="6;login.php" http-equiv="refresh" />';	
		}
		}
			else if($row['type']=='keeper'){
          if($status=='active'){	
		$_SESSION['validuser']=$username;
		$_SESSION['type'] = $row['type'];
		//$_SESSION['SESS_MEMBER_ID']=$confirmation;
		//$link = "UPDATE User_Account SET`Last_Loged_date`=NOW() WHERE UserName='$username'";
		//$res = mysql_query($link) or die(mysql_error());
         echo'  <meta content="1;keeper/keeperpage.php" http-equiv="refresh" />';
			}
			else{
		echo' <p class="wrong"> You have no account you must register first to login.</p>';                                
		   echo' <meta content="6;login.php" http-equiv="refresh" />';	
		}
		}
			else if($row['type']=='technitian'){
          if($status=='active'){	
		$_SESSION['validuser']=$username;
		$_SESSION['type'] = $row['type'];
		//$_SESSION['SESS_MEMBER_ID']=$confirmation;
		//$link = "UPDATE User_Account SET`Last_Loged_date`=NOW() WHERE UserName='$username'";
		//$res = mysql_query($link) or die(mysql_error());
         echo'  <meta content="1;technitian/technitian.php" http-equiv="refresh" />';
			}
			else{
		echo' <p class="wrong"> You have no account you must register first to login.</p>';                                
		   echo' <meta content="6;login.php" http-equiv="refresh" />';	
		}
		}
		
		else {
		echo'<br>';
       echo'  <p class="wrong">Check Your username or/and Password</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}
		}
    ?>
}
</fieldset>
</table>
  <!--close sidebar_container-->
    </div>
<div id="footer">
<table width="1200" align="left">
		<tr><th height="30" width="1200" align="center" bgcolor="#000000">Copyright??2015 DebreBerhan University Store Management System
		</th></tr>
   	</table>
	</div>

	<!--close sidebar-->

</body>
</html>



  
  







