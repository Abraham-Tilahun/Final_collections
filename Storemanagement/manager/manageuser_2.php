<?php   
 //session_start();
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
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
   <link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : '../src/loading.gif',
      closeImage   : '../src/closelabel.png'
    })
  })
</script>
<script language="javascript">
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='manager.php');
   
   }
   else
   {
     return false;
   }
  }
  </script>
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
         <li class="current"><a href="manager.php">Home</a></li>
        <li><a href="#">Manage User </a>
		<ul>
		<li><a href="reguser.php">Register User </a></li>
         <li><a href="manageuser.php">Manage User Status </a></li>
        <li><a href="deleteuser.php">Delete User </a></li>
		<li><a href="viewuser.php">View User </a></li>
		</ul>
		</li>
		 <li><a href="#">Request Transaction </a>
		<ul>
	     <li><a href="approvereq.php">Approve Request </a></li>
		  <li><a href="viewreq.php">View Request </a></li>
		</ul>
		</li>
        <li><a href="viewreport.php">View Report </a></li>
		<li><a href="viewcomment.php">View Comment </a></li>
       <li><a href="../logout.php"onClick="isConfirmlog();">logout</a></li>
        
      </ul>
    </div><!--close menubar-->
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
         <div id="menubar1">
	<ul id="menu1">
	    <li><a href="service.php"><font color="#CCCCCC">Our Service</font></a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
<th align="center" width="250px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">DBU-Store Mgt</font></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="360">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                <img width="200" height="175" src="images/BestImage.jpg"/> 
				 </th>
              </tr>
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
              <tr>
                <th width="230" height="347" colspan="2" scope="row"><marquee direction="up">
                  </marquee>
                    <marquee direction="up">
                    <p>&nbsp;</p>
                    </marquee></th>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
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
	  <form action="manage_user.php " method="post">
	    <table width="356" height="124" bordercolor="#CCCCCC" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic;"><br /><br /><br /><br /><br /><br />
          <tr>
            <th height="28" colspan="2" align="center" valign="bottom" scope="row">&nbsp;</th>
          </tr>
           <tr>
	       <th align="right" scope="row" >User Name:</th>
		   <td ><select name="un" style="width:140px;"  maxlength="5">
		   <?php


$result=mysql_query("select * from accou ")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['username'].">".$row['username']."</option>";
}
?>
                </select></td>
	     </tr>
          <tr>
            <th height="28" align="right" valign="bottom" background="1" scope="row">Status</th>
            <td valign="bottom" background="1"><label>
              <select name="sel" id="sel">
                <option>Enable</option>
                <option>Disable</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <th height="28" colspan="2" scope="row"><label>
              <input type="submit" name="Submit" value="Ok" />
            </label></th>
          </tr>
</table>      <p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; font-style:italic;"><?php echo $message ?></p>
	  </form>
      </div></div
	  
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
