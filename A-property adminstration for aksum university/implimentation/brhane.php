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
	    <li><a href="passward.php">Changepassword </a></li>
		<li><a href="storemanregisterproperty.php"> register property </a></li>  
		<li><a href="search property.php">search propperty </a></li>
		<li><a href="Generat_report.php">Generate report </a></li>
		<li><a href="Transfer property.php">Transfer property</a></li>
		<li style="float:right"><a class="active" href="login.php" style="height:20px;line-height:20px;"><img src="menubanner_files/css3menu3/register2.png" alt=""/>Logout</a></li>
      </ul>
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
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style10">Store_man Page </span></th>
        </tr>
      </table>
	 
          
            	 
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
		
	  <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="width:600px; height:500px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="search" method="POST" action="srch_item.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:30px;"> 
 <div style="float:left;" ><strong><font color="white" size="5px">Search property Form</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
<a href="storeman page.php" title="Close"><img src="images/back.png"></a></div> 
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
			<table id="contentbox">
		<tr>
			<td id="content">
				<div id="report">
			Which Type of report do you want?
				<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">Registered property</option>
					<option value="4">Transfer property</option>
					
				</select>
				<br /><br />
						  
				<div id="div1" style="display:none;"></div>	
				<div id="div2" style="display:none;">
					<form action="" method="post" >
						<center><h3>Register_property:</h3></center> 
						<?php 
						echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
	$sel=mysql_query("SELECT * FROM new_item ");
			echo '<table align="center" style="width:100px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">ItemName.</th>
			<th bgcolor="#336699"><font color="white" size="2">ptype</th> 
			<th bgcolor="#336699"><font color="white" size="2">ItemId</th>
			<th bgcolor="#336699"><font color="white" size="2">price</th>
			<th bgcolor="#336699"><font color="white" size="2">Qauntity</th>
			<th bgcolor="#336699"><font color="white" size="2">model</th>
			</tr>';
			$rowcolor=0;
			$sel=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$sel."&nbsp;</font>property are registered";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
print ("<tr>");	
print ("<td><font size='2'>" . $row['ItemName'] . "</td>");	 
print ("<td><font size='2'>" . $row['ptype'] . "</td>");		
print ("<td><font size='2'>" . $row['ItemId'] . "</td>");	
print ("<td><font size='2'>" . $row['price'] . "</td>");	
print ("<td><font size='2'>" . $row['Qauntity'] . "</td>");	
print ("<td><font size='2'>" . $row['model'] . "</td>");	
  print ("</tr>");
  }

	?>
		</form>
				</div>		
				<div id="div4" style="display:none;">
					<form action="" method="post">
					<u><center><h2>Transfer_property</h2s></center></u>
						<?php
         echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';						
	$sel=mysql_query("SELECT * FROM transferproperty");
			echo '<table style="width:500px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">prop_name.</th>
			<th bgcolor="#336699" ><font color="white" size="2">prop_quantity</th>
			<th bgcolor="#336699" ><font color="white" size="2">prop_type</th>
			<th bgcolor="#336699" ><font color="white" size="2">prop_model</th>
			<th bgcolor="#336699" ><font color="white" size="2">prop_number</th>
			</tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$sel."&nbsp;</font> Totaltransferproperty";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
print ("<tr>");
print ("<td><font size='2'>" . $row['prop_name'] . "</td>"); 
print ("<td><font size='2'>" . $row['prop_quantity'] . "</td>");
print ("<td><font size='2'>" . $row['prop_type'] . "</td>");
print ("<td><font size='2'>" . $row['prop_model'] . "</td>");
print ("<td><font size='2'>" . $row['prop_number'] . "</td>");
  print ("</tr>");
  }

						
						
								?>
					</form>
<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2017 Aksum University property administrator System </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>
