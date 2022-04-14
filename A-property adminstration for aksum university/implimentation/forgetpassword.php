
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
  <title>Aksum University property Administration system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script type="text/javascript" src="calendar.js"></script>
  <script>
</script>
</head>
  <style type="text/css">
<script language="JavaScript">
			<!--
			function isNumberKey(evt)
			{
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
				
                return false +  alert("Please Enter Only Number for  phone");
			 return true;
			}
			//-->
    
			</script>
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
    <!--close header-->
<div id="menubar">
   <ul id="menu">
     <li><a href="index.php" style="height:24px;line-height:24px;"><img src="menubanner_files/css3menu3/home1.png" alt=""/>Home</a></li>
	<li ><a href="about.php"style="height:24px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="menubanner_files/css3menu3/service1.png" alt=""/>Aboutus</a></li>
	<li><a href="newss.php" style="height:24px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="menubanner_files/css3menu3/contact1.png" alt=""/>News</a></li>
	<li><a href="cntct.php" style="height:24px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="menubanner_files/css3menu3/blue_circle - phone.png" alt=""/>Contactus</a></li>
	<li style="float:right"><a class="active" href="login.php" style="height:20px;line-height:20px;"><img src="menubanner_files/css3menu3/register2.png" alt=""/>LOGIN</a></li>
       
      </ul>
    </div><!--close menubar-->	
    
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
</table> 
</script></body>
			<table width="215" height="150">
              <tr>
                <th width="250" height="30" bgcolor="#808080" scope="row"><span class="style17">USERS LOGIN PAGE</span></th>
              </tr>
            </table>
			<p>&nbsp;</p>
			
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->	
	<div>
     <div>
      <ul class="slideshow">
	     <li><img width="975" height="275" src="images/BREE.jpg"/></li>
      </ul>   	 
	 </div>
	 </div>
	 
	  <div id="content1">
        <div class="content_item">
		  <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:550px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="forgetpassword" method="POST" action="forgetpassword.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#FFFF00; padding:5px; height:30px;"> 
 <div style="float:center;" ><strong><font color="white" size="5px">Search Password Your Account</font></strong></div>
 </div>
  <table width="350" align="center" height="150px">
  <tr>
    <td colspan="12"><div style="font-family:Arial, Helvetica, sans-serif; color:#none; font-size:20px;">
	<table cellpadding="10" align="center"cellspacing="10">
</div></td>
  </tr>  <table>
    <tr><td><font color="red">*</font>ID:</td><td><input type="text" name="User_id" required x-moz-errormessage="Enter Your ID" ></td></tr>
	 <tr><td><font color="red">*</font>Email Address:</td><td><input type="text" name="email_address" required ="email_address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,40}$" required=" required" Enter easily memoraizable wordplaceholder="Enter Your Email"></td></tr></td>
	<tr><td><font color="red">*</font>User Name: </td><td><input type="text" name="username" required x-moz-errormessage="Enter Your Username" > </td></tr>
	 <tr><td> </td><td><input type="submit" name="forget" class="button_example" value="Submit"><input type="reset" value="Clear" /> </td></tr>
 </table>
  </form>	
   		 <?php
	 if(isset($_POST['forget']))
	   { 
	   $con=mysql_connect('localhost','root','');
      mysql_select_db('storem');
   $User_id=$_POST['User_id'];
   $email_address=$_POST['email_address'];
   $username=$_POST['username'];
   $sql="SELECT * FROM  accou where  email_address='$email_address' AND username='$username'AND  User_id='$User_id' ;"; 
   $result_set=mysql_query($sql);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{
$User_id=$row[0];
$username=$row[4];
$email_address=$row[2];
echo"<font color='red'>"."your password 	 is"."&nbsp; &nbsp;".$username."&nbsp; &nbsp;"."".isset($password)."</font>";
echo'<meta content="10;login.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="10;forget.php" http-equiv="refresh" />';
}
}

?>
          <p>&nbsp;</p>
        </div>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	<!--close sidebar-->
</body>
</html>

