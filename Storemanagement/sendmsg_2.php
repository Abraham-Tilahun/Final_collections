<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>OCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>IOT store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style9 {color: #006600}
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
        <li ><a href="keeperpage.php">Home</a></li>
        <li ><a href="additem.php">Add Item </a></li>
        <li class="current"><a href="viewreq.php">View Request </a></li>
        <li><a href="approvereq.php">Approve Request </a></li>
		<li><a href="viewuloan.php">View User Loan </a></li>
        <li><a href="chreturnitem.php">Check Return Item </a></li>
        <li><a href="searchitem.php">Search Item </a></li>
		<li><a href="login.php">logout</a></li>
        
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
//var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
//clock24_48332.daylight('ET'); clock24_48332.refresh();
</script></body>
            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="menubar1">
	
	
	  
	  <ul id="menu">
        
        <li></li>
        <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li><a href="kviewmsg.php">View Message</a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
          <th width="212" bgcolor="#330066" scope="row"><span class="style17">Clerk Page </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="360">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                 <img src="../storefinal/images/goods.jpg"  />
				 </th>
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
		
	    
		   
		  </p>
		  <p><?php echo $mess;?>&nbsp;</p>
		  <?php
				  if (isset($_GET['id']))
				  {
	
	
			$mes = $_GET['id'];
			
			
			echo '<form action="msg.php" method="post">';
			
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("dbu", $con);
			
		echo '<input name="id" type="text" value="'.$mes.'" readonly="readonly"/>';
		}
		?>
		
		  <table width="243" align="center">
            <tr>
              <th width="89" align="right" scope="row">Name:</th>
              <td width="168"><label>
			  
                <input name="n" type="text" id="n" />
                <br />
              </label></td>
            </tr>
            <tr>
              <th align="right" scope="row">E-mail:</th>
              <td><label>
                <input name="e" type="text" id="e" />
                <br />
                <br />
              </label></td>
            </tr>
            <tr>
              <th align="right" scope="row">Position:</th>
              <td><label>
                <input name="p" type="text" id="p" />
                <br />
                <br />
              </label></td>
            </tr>
            <tr>
              <th align="right" scope="row">Message:</th>
              <td><label>
                <textarea name="txt" cols="17" rows="3" class="show" id="txt" ></textarea>
                <br />
              </label></td>
            </tr>

            <tr>
              <th colspan="2" scope="row"><label>
                <input type="submit" name="Submit" value="Send" />
              </label></th>
            </tr>
          </table></form>
		   <?php
		//include("sendmsg.php");
		?>
		  <p>&nbsp;</p>
		  <p>&nbsp; </p>
        </div>
	  </div>
	  
	  
	  
	  
	   <p>
	     <!--close sidebar_container-->
  </p>
	   <p>&nbsp;	           </p>
</div>
	  <ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19">Copyright©2013 Bahir Dar University Store Management System </h2>
        </li>
      </ul>
	  <!--close sidebar-->

</body>
</html>
