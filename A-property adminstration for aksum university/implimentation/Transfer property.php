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
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 12px 14px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 14px;    
    border: none;
    outline: none;
    color: Black;
    padding: 12px 14px;
 
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: green;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 14px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #green;
}

.dropdown:hover .dropdown-content {
    display: block;
}
  </style>
</head>

<body>
  <div id="menubar">
      <ul id="menu">
        <li><a href="storemanpage.php">Home</a></li>
		<div class="dropdown">
		 <div class="dropdown-content">	
		  </div>
        </div>
        <li><a href="storemanregisterproperty.php"> Register property</a></li> 
		<li><a href="Generat_report.php">Generate report </a></li>
		<li><a href="Transfer property.php">Search property</a></li>
		<li><a href="barcode.php">barcode</a></li>
		<div style="float:right">
		<div class="dropdown"><button class="dropbtn" color=""><b></b><img width="15" height="15" src="images/default.png"/></button>
		 <div  style="float:right" class="dropdown-content">
          <a href="passward.php">Change Password</a>		 
		  <a href="login.php"/>Logout</a>
		  </div>
        </div>		
		</div>
		</div>
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
          <th width="204" bgcolor="#none" scope="row"><span class="style17"> Store_man Page </span></th>
        </tr>
      </table>
	 
          
            	 
            </div>
        </div>
			
			
			
          
        </div>
      </div>
	 
	  <div id="content">
	    <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:700px; height:500px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
  <form  method='POST' action='Transfer property.php' onsubmit='return formValidation()' enctype="multipart/form-data">
	<br><b>Search by Property Code:</b>
<input type="text"name="prop_code" id="prop_code"/>
<input type='submit' value='Search' name='search' onKeyPress='return isNumberKey(event)';/>
  <table width="350" align="center" height="150px">
  <a href="storeman page.php" title="Close"><img src="images/back.png"></a></div> 
  <tr>
	<tr>
    <td colspan="20"><div style="font-family:Arial, Helvetica, sans-serif; color:#none; font-size:19px;">
	<table cellpadding="10" align="center"cellspacing="10">
</div></td>
  </tr> 
</div></td>
  </tr> 
  <br>
<?php

mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if(isset($_POST['search'])){
$prop_code=$_POST['prop_code'];
$query="SELECT * FROM new_item where prop_code='{$prop_code}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Property propoperty code not added".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r5=$row[5];
$r6=$row[6];
}
echo"
<form action='Transfer property.php' method='POST'>
<table width='150%' height='200%' align='center';
 <tr><td>property code:</td><td><input type='text'name='prop_code' readonly='readonly' value='$r0'> 
 <tr><td>Register Date:</td><td><input type='text'name='Reg_Date' readonly='readonly' value='$r1'> 
  <tr><td>Property Name:</td><td> <input type='text'name='prop_name' value='$r2' ></tr></td>
 <tr><td>Unit Price:</td><td> <input type='text'name='unit_price' value='$r3' ></tr></td>
 <tr><td>Property Model:</td><td> <input type='text'name='prop_model'value='$r5'></tr></td>
  <tr><td>Description:</td><td> <input type='text'name='description' value='$r6' ></tr></td> 
 <input name='transfer-property' type='submit' prop_code='Transfer' value='Transfer'align='center' />
        </tr>
 ";
echo"<hr>";
echo"</table>";
mysql_query("insert into transfer_property values('$r0','$r1','$r2','$r3','$r5','$r6')");
mysql_query("DELETE FROM new_item WHERE prop_code='$r0'");
}
else{ 
echo "<script>alert('Search reasult  not found!!');</script>";
}
}
  if(isset($_POST['submit']))
  {
$prop_code=$POST['prop_code'];
$Reg_Date=$POST['Reg_Date'];
$prop_name=$POST['prop_name'];
$unit_price=$POST['unit_price'];
$prop_type=$POST['prop_type'];
$description=$POST['description'];


	}
  ?>
</form>
	</table>	 
  </form>
	  </div>
	
</body>
</html>
