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
      <img src="images/Aku.jpg" alt="well come to property administration system" width="1300" height="120"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
      <li><a href="storemanpage.php">Home</a></li>
		<li><a href="Manage account.php">Manage account</a></li>
       <li class="current"><a href="storemanregisterproperty.php">property register</a></li> 
        <li><a href="Search property.php">Search property</a></li>
		<li><a href="Generate report.php">Generate report </a></li>
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
          <th width="204" bgcolor="#228B22" scope="row"><span class="style17">Store man Principles </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="384">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p>
				<marquee behavior="scroll" direction="" onmouseover="this.stop();" onmouseout="this.start();">
                   
                 
        <ul class="slideshow">
       <li class="show"><img width="975" height="350" src="images/ss.jpg"/></li>
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
            
            <p>:      </p>
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
	  
	    <form  method='post'>
		<table width="556" height="371">
		
        <tr>
          <th height="95" colspan="2" valign="top" scope="row"><p><img src="images/bof_02.jpg" alt="" width="61" height="20" />register new property here..<img src="images/newuser.png" alt="" width="48" height="48" /></p>
           <!-- <p><?php echo $message;?>&nbsp;</p> -->
          </th>
        </tr>
        <tr>
          <th width="272" height="17" align="right" scope="row">prop_name </th>
          <td width="268"><label>
            <input name="propname" type="text" id="propname" />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">prop_type </th>
          <td><label>
            <input name="proptype" type="text" id="proptype" />
          </label></td>
        </tr>
        <tr>
          <th height="22" align="right" scope="row">prop_serialcode </th>
          <td><label>
            <input name="prop_serialcode" type="text" id="prop_serialcode" />
          </label></td>
        </tr>
        <tr>
          <th height="17" align="right" scope="row">prop_quantity </th>
          <td><label>
            <input name="propquantity" type="text" id="propquantity" />
          </label></td>
        </tr>
		<tr>
          <th height="17" align="right" scope="row">prop_quality </th>
          <td><label>
            <input name="propquality" type="text" id="propquality" />
          </label></td>
        </tr>
		<tr>
          <th height="17" align="right" scope="row">prop_expirydate </th>
          <td><label>
		  		  <input type="text" name="propexpirydate" onclick="ds_sh(this);" placeholder="propexpirydate" autocomplete="off" required />

         
          </label></td>
        </tr>
		<tr>
          <th height="17" align="right" scope="row">prop_model </th>
          <td><label>
            <input name="propmodel" type="text" id="propmodel" />
          </label></td>
        </tr>
          <th height="28" colspan="2" scope="row"><label>
            <input type="submit" name="Submit" value="Register" />
          </label>
            <label>
            <input type="reset" name="Submit2" value="Cancel" />
          </label></th>
        </tr>
      </table>
	
	  <?php
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());

if(isset($_POST['Submit'])){

$propname=$_POST["propname"];
$type=$_POST["proptype"];
$propserialcode=$_POST["prop_serialcode"];
$propquantity=$_POST["propquantity"];
$propquality=$_POST["propquality"];
$propsource=$_POST["propexpirydate"];
$propexpirydate=$_POST["propmodel"];

mysql_query("INSERT INTO register_property(prop_name,prop_type,prop_serialcode,prop_quantity,prop_quality,prop_expirydate,prop_model) 
VALUES ('$propname', '$type', '$propserialcode','$propquantity', '$propquality', '$propsource', '$propexpirydate')"); 
echo "register seccussfully";


}

?>				
	   </div>
	  
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center" color="green">Copyright©2017 Aksum University property Administration system </h2></h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
