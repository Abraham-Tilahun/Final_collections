<?php
session_start();
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
<img src="images/Aku.jpg" alt="well come to property administration system" width="1188" height="120"/></div>
    <!--close header-->

	<div id="menubar">
      <ul id="menu">
         <li><a href="store manpage.php">Home</a></li>
	     <li><a href="Changepassword.php">Changepassword </a></li>
		 <li class="current"><a href="storemanregisterproperty.php">property register</a></li>   
		 <li><a href="search property.php">search propperty </a></li>
		 <li><a href="report.php">Generate report </a></li>
		 <li><a href="Transfer property.php">Transfer property</a></li>
		 <li style="float:right"><a class="active" href="login.php" style="height:20px;line-height:20px;"><img src="menubanner_files/css3menu3/register2.png" alt=""/>Logout</a></li>
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
			<div id="menubar1">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#228B22" scope="row"><span class="style10">store man Principles </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="384">
              <tr>
                <th height="100" colspan="2" bgcolor="#999999" scope="row"><p>
				<marquee behavior="scroll" direction="" onmouseover="this.stop();" onmouseout="this.start();">
                   
                 
        <ul class="slideshow">
       <li class="show"><img width="975" height="350" src="images/pc.jpg"/></li>
       <li><img width="975" height="350" src="images/pcz.jpg"/></li>
		<li><img width="975" height="350" src="images/seyoman.jpg"/></li>
		<li><img width="975" height="350" src="images/homi.jpg"/></li>
		<li><img width="975" height="350" src="images/hom.jpg"/></li>
      </ul>   	 
	 </div>
                    </marquee>
                  </p></th>
              </tr>
              <tr>
                <th width="230" height="347" colspan="2" scope="row"><marquee direction="">
                  </marquee>
                    <marquee direction="">
                    <p>&nbsp;</p>
                    </marquee></th>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            <ul id="menu">
        
        <li></li>
	  </ul>
			
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
        <div class="content_item">
		
	 <?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select ItemName from new_item";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
	  <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="width:600px; height:500px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="search" method="POST" action="searchitem.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Search property</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
<a href="../user.php" title="Close"><img src="..images/bof_02.jpg"></a></div> 
 </div>
  <table width="350" align="center" height="150px">
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
</div></td>
  </tr>  
  <br><br><br>
  <tr>
          <th width="281" height="74" align="right" valign="bottom" scope="row">Property Name </th>
          <th width="202" align="left" valign="bottom" scope="row"><label>
            <select name="sct">
			<?php
		  while($row=mysql_fetch_array($res)){
echo "<option value=".$row['ItemName'].">".$row['ItemName']."</option>";
}
   ?>    
            </select>
          </label></th>
        </tr>
        <tr>
          <th height="81" colspan="2" scope="row"><label>
            <input type="submit" name="Submit" value="Search" />
          </label></th>
        </tr>
      </table></form>
	  <?Php
	 include('srch_item.php');
	 ?>
	</div>
	  </div>
	  
</div>
<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2017 Aksum University property administrator System </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
