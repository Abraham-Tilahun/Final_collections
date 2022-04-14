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
</body>
	
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style17">store man Principles </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="384">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                     <marquee direction="up" scrollamount="3" behavior="alternate">
                      1-Receipt of Inventory Facilities
                      <p>2-Prepares reports by collecting, analyzing, and summarizing informatio</p>
                      <p>3-Manage staff, preparing work schedules and assigning specific </p>
                      <p>4-Maintains quality service by establishing and enforcing organization standards.</p>
                      <p>5-Maintains a safe and clean store environment by developing and   publishing evacuation routes; determining and documenting locations of   potentially dangerous materials and chemicals</p>
                      <p>6-Prepares reports by collecting, analyzing, and summarizing information.</p>
                    </marquee>
                    </p></th>
              </tr>
             
            </table>
            
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
	  <form action="searchitem.php " method="post">
      <table width="495">
        <tr>
          <th width="281" height="74" align="right" valign="bottom" scope="row">Item_Name </th>
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
          <h2 class="style19">Copyright©2017 Aksum University property Administration system </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
