
<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
.style8 {color: #000000; font-weight: bold; font-style: italic;}
-->
  </style>
  
  
<!--sa nivo slider-->
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
<!--sa calendar-->	
	<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">


function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="images/last2.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	
	<div id="menubar">
      <ul id="menu">
        <li ><a href="keeperpage.php">Home</a></li>
        <li><a href="additem.php">Add Item </a></li>
        <li><a href="viewreq.php">View Request </a></li>
        <li class="current"><a href="approvereq.php">Approve Request </a></li>
		<li><a href="viewuloan.php">View User Loan </a></li>
        <li><a href="chreturnitem.php">Check Return Item </a></li>
        <li><a href="searchitem.php">Search Item </a></li>
		<li><a href="login.php">logout</a></li>
		
		
		<li><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="105" height="23">
            <param name="movie" value="button1.swf" />
            <param name="quality" value="high" />
            <embed src="button1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="105" height="23" ></embed>
          </object></li>
        
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
	    <li><a href="about.php">View Message </a></li>
	  </ul>
	   
	
	  <div class="sidebar">
          <div class="sidebar_item">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <p>Number of vistors:      </p>
            <ul id="menu">
        
        <li>
          <table width="166" height="169">
            <tr>
              <th width="156" colspan="2" scope="row">&nbsp;</th>
              </tr>
          </table>
          </li>
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
		  <form action='approved.php' method='post'>
		    <table width="368" height="154">
              <tr>
			  <?
			    $id=$_GET['id'];
			$result = mysql_query("SELECT * FROM request WHERE ItemId = $id");

			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="empid" value="'. $row['EmpId'] .'">'; 
		?>
                <th width="206" align="right" scope="row">user name </th>
                <td width="146"><label>
                  <input name="u" type="text" id="u" />
                  <br />
                </label></td>
              </tr>
              <tr>
                <th align="right" scope="row">password</th>
                <td><label>
                  <input name="p" type="password" id="p" />
                  <br />
                  <br />
                </label></td>
              </tr>
              <tr>
                <th align="right" scope="row">borrowed date </th>
                <td><label>
                  <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly="readonly" />
                  <br />
                  <br />
                </label></td>
              </tr>
              <tr>
                <th colspan="2" align="center" scope="row"><label>
                  <input name="a" type="submit" id="a" value="Approved" />
                </label></th>
              </tr>
            </table>
		    <p>&nbsp;</p>
		  </form>
	  <?Php
	//include('approve_req.php');
	 //include('approve_request.php');
	 ?></div>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19">Copyright©2013 Bahir Dar University Store Management System </h2>
        </li>
      </ul>
	<!--close sidebar-->
</body>
</html>
