<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

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
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li ><a href="adminpage.php">Home</a></li>
        <li><a href="reguser.php">Register User </a></li>
        <li><a href="regkeeper.php">Register Kepper </a></li>
		<li><a href="manageuser.php">Manage User </a></li>
        <li class="current"><a href="deleteuser.php">Delete User </a></li>
        <li><a href="viewreport.php">View Report </a></li>
       <li><a href="login.php">logout</a></li>
      </ul>
    </div><!--close menubar-->
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <script src="http://24timezones.com/js/swfobject.js" language="javascript"></script>
<script src="http://24timezones.com/timescript/maindata.js.php?city=815322" language="javascript"></script>
<table><tr><td><div id="flash_container_tt4fe051beada2d"></div><script type="text/javascript">
var flashMap = new SWFObject("http://24timezones.com/timescript/clock_digit_12.swf", "main", "160", "80", "7.0.22", "#FFFFFF", true)
flashMap.addParam("movie", "http://24timezones.com/timescript/clock_digit_12.swf");
flashMap.addParam("quality", "high");
flashMap.addParam("wmode", "transparent");
flashMap.addParam("flashvars", "color=blueblack&logo=1&city=815322");
flashMap.write("flash_container_tt4fe051beada2d");
</script></td></tr><tr><td style="text-align: center; font-weight: bold">
<a href="http://24timezones.com/world_directory/addis_ababa_local_time.php" target="_blank" title=" " style="text-decoration: none">
</a></td></tr></table>
            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<!---   <table width="212" height="384" bgcolor="#669933">
               <tr>
                 <th height="28" colspan="2" bgcolor="#666666" scope="row"><p> </p>
   <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                     1.Raise requests for issue of inventory items using the standard requestform.
                       <p>2. Raise requests for approval of disposal using the standard disposal form.</p>
                       <p>3.view an item before sending request to the store. </p>
                       <p>4.remember their request id given by the store manager </p>
                       <p>&nbsp;</p>
                   </marquee>
                     </p></th>----!>
					  <table width="212" height="384" bgcolor="#669933">
               <tr> 
               </tr><br><br><br>
                 <th width="230" height="50" colspan="2" scope="row" bgcolor="#FF6633"><h1><blink >Well Come to Our Official Website</blink></h1><img width="200" height="175" src="images/BestImage.jpg"/><br />
               
             </table>
			 <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar--><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->	
	
	 
	  <div id="content">
	  <form action="deleuserr.php " method="post">
	    <p>&nbsp;        </p>
	    <p><?php echo $message;?>&nbsp;</p>
	    <p>
	      <?php
if(isset($_POST['Submit'])){
	$a=$_POST['slct'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select * from accou where EmpId='$a'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else
while($row=mysql_fetch_array($res)){
//$aa=$row['EmpId'];
$bb=$row['FirstName'];
$cc=$row['LastName'];
$dd=$row['username'];
echo 'EmpId:';
echo '<input name="uname"  type="text" value="'. $a .'" />';
echo '<br>';

echo 'First Name:';
echo '<input name="b"  type="text" value="'. $bb .'" />';
echo '<br>';

echo 'Last Name:';
echo '<input name="bb"  type="text" value="'. $cc .'" />';
echo '<br>';
echo 'User Name:';
echo '<input name="cc"  type="text" value="'. $dd.'" />';
echo '<br>';
echo '<input name="ok" type="submit" value="Delete"  />';
}
//header("location: deleteuser.php");
}
?>
        </p>
	    <p>&nbsp;</p>
	    <p>&nbsp;  </p>
	  </form>
	  </div>
	  <?Php
	 //include('srch_deluser.php');
	 ?>
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2015 Debre Berhan University Store Management System </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
