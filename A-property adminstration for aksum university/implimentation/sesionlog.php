
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	//unset($_SESSION['un']);
	//unset($_SESSION['fname']);
    //unset($_SESSION['lname']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Aksum university property administration </title>
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
.style10 {font-style: italic; color: #00FFFF; font-weight: bold; }
.style11 {	color: #0000CC;
	font-size: 12px;
}
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="images/Ak.jpg" alt="image1" width="120" height="98"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
       <li class="current"><a href="index.php">HOME</a></li>
		<li><a href="about.php">ABOUT US</a></li>
        <li><a href="newss.php">NEWS</a></li>
        <li><a href="cntct.php">CONTACT US</a></li>
		 <li><a href="help.php">HELP</a></li>
        <li><a href="login.php">LOGIN</a></li>
       
      </ul>
    </div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
 <body bgcolor=#9494B8>
<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<table border="0" bgcolor=#0000FF cellspacing=2 cellpadding=4 class="clock24st" style="line-height:50px; line-width:215px; padding:0;">
<tr><td bgcolor=#000000 class="clock24std" style="font-family:bold; font-size:26px;"><a href=" ">
</a>
<b><a href="http://www.24webclock.com/" style="text-decoration:none;"><span class="clock24s" id="clock24_48332" style="color:white;"></b> </span></a></td></tr>
</table>
<script type="text/javascript">
var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
clock24_48332.daylight('ET'); clock24_48332.refresh();
</script></body>
            
			 
      </ul>
			<table width="200" height="250">
              <tr>
                <th width"200" height="30" bgcolor="#330033" scope="row"><span class="style10">USERS LOGIN PAGE</span></th>
              </tr>
            </table>
			<p>&nbsp;</p>
			<div id="menubar1">

	  
			</div>
			
			
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->	
	<div>
      <ul class="slideshow">
        <li class="show"><img width="975" height="350" src="images/pcms1.jpg"/></li>
       <li><img width="975" height="350" src="images/homi.jpg"/></li>
		<li><img width="975" height="350" src="images/hom.jpg"/></li>
		<li><img width="975" height="350" src="images/pc.jpg"/></li>
		<li><img width="975" height="350" src="images/ss.jpg"/></li>
      </ul>   	 
	 </div>
	 
	  <div id="content1">
        <div class="content_item">
		
		  <form  method='post'>
		  
		  <table width="367" height="98">
            <tr>
              <th height="50" scope="row"><img src="images/key.jpg" alt="" width="150" height="100" /></th>
            </tr>
          </table>
		  
		  <table width="392" height="124">
            
            <tr>
              <th width="238" align="right" scope="row">User Name </th>
              <td width="142"><label>
               
				<input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
              </label></td>
            </tr>
            <tr>
              <th align="right" scope="row">Password</th>
              <td><label>
               <input type="password" name="password" id="password" placeholder="Password" required>
              </label></td>
            </tr>
			
            <tr>
              <th height="30" colspan="2" align="right" scope="row">
			   <h2>you are not login please login again!!</h2></br>
			  <label>
                <input type="submit" name="Submit" value="Login" />
              <a href="forgot_password.php">              forgot password...</a></label></th>
            </tr>
			<tr>
          </table>
		    <p>&nbsp;</p>
		  </form>
		  <?php
			 if (isset($_POST['Submit'])){
// username and password sent from form 
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('storem');
$myusername=$_POST ['username']; 
$mypassword=$_POST['password']; 
$jobType=$_POST['usertype'];
if(! $con )
{  die('Could not connect: '. mysql_error());
}
else
 {
    echo "<font color='red'><h1>user name and password are not match. please fill again </h1> </font>"; 
	} 

/*UserName,Password,
administration,employee*/

$query = "SELECT * FROM accou WHERE username='$myusername' AND password='$mypassword' AND type='$jobType'";

								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									$id=$row["User_id"];
									if( $num_row > 0 ) {
									
									if($jobType=="staff")
									{
									$_SESSION['id']=$id;
									header('location:userpage.php');
									}
									else if($jobType=="admin")
									{
										$_SESSION['id']=$id;
										header('location:adminPage.php');


								}
								else if($jobType=="Admin")

									{
											$_SESSION['id']=$id;
											header("location:adminhomepage.php");
									}
									else if($jobType=="keeper")

									{
											$_SESSION['id']=$id;
											header('location:keeperpage.php');

									}
									else if($jobType=="clerk")

									{
											$_SESSION['id']=$id;
											header('location:clerkpage.php');


									}
									
									
								
								else{
								
										echo 'you are not registered';	
								
								}
									}
									
									
									
									
									
							}
							?>
			 
          <p>&nbsp;</p>
        </div>
	  </div>
	  <ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2017 Aksum University property Administration system </h2>
        </li>
      </ul>
	  <!--close sidebar_container-->
    </div>
	<!--close sidebar-->
</body>
</html>

