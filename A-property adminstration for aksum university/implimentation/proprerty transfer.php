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
      
<img src="images/Aku.jpg" alt="well come to property administration system" width="1188" height="120"/></div>
    <!--close header-->

	<div id="menubar">
      <ul id="menu">
	    <li><a href="store manpage.php">Home</a></li>
		<li><a href="Changepassword.php">Changepassword </a></li>
        <li class="current"><a href="storemanregisterproperty.php">property register</a></li> 
        <li><a href="Search property.php">Search property</a></li>
		<li><a href="Generate report.php">Generate report </a></li>
		<li><a href="Transfer property.php">Transfer property</a></li>
		<li style="float:right"><a class="active" href="login.php" style="height:20px;line-height:20px;"><img src="menubanner_files/css3menu3/register2.png" alt=""/>Logout</a></li>
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
</table> </body>
			<div id="menubar1">
	  <ul id="menu">
	  </ul>
	  
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style17">Store man Page</span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
           <table width="222" height="384">
              <tr>
                <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p><marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                  <li><img width="200" height="200" src="images/demu.jpg"/></li>.</marquee></p></th>
              </tr>
              </tr>
             
            </table>
            
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
	    <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="width:600px; height:500px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="transfer property.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Transfer property</font></strong></div>
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
	     <td class='para1_text' width="220px"><font color="red">*</font> prop_name:</td>
		 <td><input type="prop_name" name="prop_name" required x-moz-errormessage="prop_name" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> prop_type:</td>
		 <td><input type="prop_type" name="prop_type" required x-moz-errormessage="prop_type" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> prop_serialcode:</td>
		 <td><input type="prop_serialcode" name="prop_serialcode" required ="prop_serialcode" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> prop_quantity:</td>
		 <td><input type="prop_quantity" name="prop_quantity" required ="prop_quantity" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>prop_quality:</td>
		 <td><input type="prop_quality" name="prop_quality" required ="prop_quality" ></td>
	     </tr>
	      <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> prop_model:</td>
		 <td><input type="prop_model" name="prop_model" required ="prop_model" ></td>
	     </tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="Transfer" value="Transfer property" class="button_example"/></td>
	<td><input type="reset" name="Submit2" value="Cancel" class="button_example" /></td>
  </tr>
</table> 
  </form>
	  </div>
	  
	  
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center" color="green">Copyright©2017 Aksum University property Administration system</h2>
        </li>
</ul>
</body>
</html>
