<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <style type="text/css">
  #whole {
	height: 800px;
	width: 1100px;
}
  #header {
	height: 140px;
	width: 900px;
	background-color: #666;
}
  #menubar {
	height: 40px;
	width: 900px;
	background-color: #999;
	color: #999;
}
  #main {
	height: 450px;
	width: 900px;
	padding-top: -15px;
	margin-top: -15px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	background-color:#F79709;
}
  #left {
	height: 450px;
	width: 190px;
	float: left;
	background-color: #FCC;
}
   #center {
	height: 450px;
	width: 700px;
	margin-left: 010px;
	background-color: #FFF;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	padding-left: 10px;
}
.sidebar {
	height: 300px;
	width: 185px;
}
  #right {
	float: right;
	height: 450px;
	width: 190px;
	background-color: #CCC;
}
  #footer {
	height: 80px;
	width: 900px;
	background-color: #699;
	margin-top: -15px;
	padding-top: -15px;
}
 #right3 {
	height: 200px;
	width: 200px;
}
#searh {
	height: 300px;
	width: 600px;
	background-color: none;
}
#footer {
	height: 75px;
	width: 900px;
	background-color: #699;
	margin-top: -15px;
	padding-top: -15px;
}
  </style>
  <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
  body,td,th {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #000;
}
  </style>
  <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
  </head>
   <body bgcolor="#adb9bc">
   <?php
include"connection.php";
$sql="SELECT* FROM studclearform ";
if(isset($_POST['search'])){
	$search_term=mysql_real_escape_string($_POST['search_box']);
	$sql.="WHERE Student_id='{$search_term}' ";
	$sql.="OR Fname='{$search_term}'";
 }
$query=mysql_query($sql)or die(mysql_error());
?>
  <center>
  <div id="whole">
  <div id="header"><img src="IMAGE2/uogone1.jpg" width="897" height="140" /></div>
   <div id="menubar"><center>
    <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="#" style="background:#191970"><font color="#191970">HOME</font></a> </li>
      <li><a href="clearhome.php" style="background:#191970"><font color="#FFFFFF" face="Times New Roman, Times, serif">HOME</a> </li>
      
      <li><a href="habtitruenew1.php"  style="background:#191970"><font color="#FFFFFF">Search</font></a></li>
      <li><a href="#"  style="background:#191970"><font color="#FFFFFF">VIEW</font></a>
        
      </li>
      
      <li><a href="addcomment.php"style="background:#191970" ><font color="#FFFFFF" face="Times New Roman, Times, serif">AddComment</font></a></li>
      <li><a href="logout2.php"style="background:#191970" ><font color="#FFFFFF" face="Times New Roman, Times, serif">Logout</font></a></li>
      <li><a href="#" style="background:#191970"><font color="#09F"><font color="#191970" face="Times New Roman, Times, serif">HOME</font></a> </li>
    </ul>
    </center>
    <a href="studloginmain.php"></a>
  </div>
   <div id="main">
     <div id="center">
      <p style="text-align: justify;">&nbsp;</p><div class="wpcf7" id="wpcf7-f2951-p870-o1"><form action="commentinscode.php" method="post" class="wpcf7-form">
 <h4>   If you have any comment regarding to the Clearance system you can write it </h4>       
            <table width="250" height="305">
            <th align="center" bgcolor="#8080C0" colspan="4"><input type="text"  class="wpcf7-form-control  wpcf7-submit"  id="comment"/></th>
            <tr><td width="101" height="48">Departement</td><td width="288">
            <input type="text" name="Department" /></td></tr>
     <tr><td height="44">College</td><td>
            <input type="text" name="College" /></td></tr>
            <tr><td height="44">Subject</td><td>
            <input type="text" name="Subject" /></td></tr>       
          <tr><td height="103">Message</td><td>
            <span class="wpcf7-form-control-wrap your-message"><textarea name="Message" class="wpcf7-form-control  wpcf7-textarea" cols="25" rows="5"></textarea></span></td></tr>  
<th align="center" bgcolor="#8080C0" colspan="4"><input type="submit" value="Send" class="wpcf7-form-control  wpcf7-submit"  id="send"/></th></table>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></p>
  </div>
  <div id="footer"> <center>
    
	      <a href="clearhome.php">Home</a> | <a href="abut.php">About Us</a> | <a href="admreg1.php">Registration</a> | <a href=""news.php>News</a>  | <a href="contactmain.php">Contact Us</a>| <a href="comment.php">Comment</a></center><br /><p  style="text-align:center;">&copy; Copyright 2016 - 2020  <a href="/about"> menberu,getachew,lincho yonas and  wobshet </a> unless otherwise noted | All Rights Reserved.</p>
  </div> 
   </div>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
  </body>
  </html>
</div>
