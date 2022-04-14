<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if(isset($_POST['update']))
{
$password = md5($_POST['password']);
$pass = md5($_POST['pass']);
$rpass = md5($_POST['rpass']);
define("db_pass","");
$query="select * from accou where password='{$password}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
if($pass==$rpass){
$query="update accou set password='{$pass}'where password='{$password}' ";
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
} </style>
</head>

<body>
  <div id="menubar">
      <ul id="menu">
        <li><a href="collegedean page.php">Home</a></li>
		<div class="dropdown">
		 <div class="dropdown-content">	
		  </div>
        </div>
		<li><a href="request_purchas.php">Request purchase</a></li>
		<li><a href="Approve Prchase.php">View Request purchase</a></li>
	    <li><a href="purchase.php">View Request property</a></li>
		<li><a href="View_disposal1.php">View Request Disposal</a></li>
		<li ><a href="Notification_collegehead.php">Notification</a></li>
		<div style="float:right">
		<div class="dropdown"><button class="dropbtn" color=""><b></b><img width="15" height="15" src="images/default.png"/></button>
		 <div  style="float:right" class="dropdown-content">
          <a href="Change_password.php">Change Password</a>		 
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
        
	   <br><br><br><br><br>
	 <h3
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
</table> </body>
			<div id="menubar1">

	  <ul id="menu"><!--<li><a href="feedback.php">Feedback </a></li> -->
	    </ul>
	 
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style17">Collegehead page  </span></th>
        </tr>
      </table>   	 
            </div>
        </div>
        </div>
      </div>
	  
	  <div id="content">
<html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:600px; height:500px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

 <form id="form1" name="Changepassword" method="POST" action="" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:30px;"> 
 <div style="float:left;" ><strong><font color="white" size="5px">Change Password</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
<a href="Departmenthead page.php" title="Close"><img src="images/back.png"></a></div> 
 </div>
 <br> <br> <br>
  <table width="350" align="center" height="150px">
  <p><font size="4px">Old Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id='old'placeholder='OldPassword'><br><br>
<p><font size="4px">New Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id='new' placeholder='NewPassword'><br><br>
<p><font size="4px">Confirm New password:</font>&nbsp;<input type="password" name="rpass" id='confi' placeholder='ConfrimPassword'><br>
<p align="center"><input type="submit" name="update" value="Change" Onclick="return check(this.form);"/>&nbsp;&nbsp;
<input type='reset' value='Reset'></p><br><br>
</table> 
  </form>
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
