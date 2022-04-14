<?php
	session_start();
	include("date.php");
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
  <script>
</script>
  <style type="text/css">
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container {
    overflow: hidden;
    background-color: #F5FFFA;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: #F5FFFA;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 19px;    
    border: none;
    outline: none;
    color: Black;
    padding: 14px 16px;
 
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: #F5FFFA;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F5FFFA;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 14px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color:green;
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
		<li ><a href="notification to store.php">Notification  
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
<body bgcolor=#9494B8>
 <h3>Calender</h3>
	  <script src="css/calander.js" language="javascript" type="text/javascript"></script> 
        
	   <br><br> <br><br> <br><br><br>
	   
	 <h3
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
</table> </body>
			<div id="menubar1">	
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style17"> Store_man Page </span></th>
        </tr>
      </table>
	  <div class="sidebar">

        </div>
	   
            </div>
			
		</div>
			
			
			
          
        </div>
      </div>
	 
	
	  <div id="content">
	  
	     <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:700px; height:500px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
	  <form id="form1" name="Transfer property" method="POST" action="inssert_item.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:30px;"> 
 <div style="float:left;" ><strong><font color="white" size="5px">Register Property Form</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
<a href="storeman page.php" title="Close"><img src="images/back.png"></a></div> 
 </div>
  <table width="350" align="center" height="150px">
  <tr>
    <td colspan="10"><div style="font-family:Arial, Helvetica, sans-serif; color:#none; font-size:18px;">
	<table cellpadding="15" align="center"cellspacing="15">
</div></td>
  </tr> 
  <br>
      <tr>
		 <td class='para1_text' width="220px"><font color="red">*</font> Date:</td>
		 <td><input type="text"  name="Reg_Date" id="Reg_Date" size="30"  onclick="ds_sh(this);" placeholder="Register Date" autocomplete="off">
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>PropertyName:</td>
		 <td><input type="prop_name" name="prop_name" size="30" required ="enter property name"pattern="[A-Za-z]{3,21}"required x-moz-errormessage="please enter property name" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>PropertyCode:</td>
		 <td><input type="prop_code"name="prop_code"size="30" required ="PropertyCode" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>UnitPrice:</td>
		 <td><input type="unit_price" name="unit_price"size="30"required ="UnitPrice"pattern="[0-9]{2,12}"required x-moz-errormessage="please enter UnitPrice " ></td>
	     </tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Quality:</td>
		 <td><input type="Quality" name="Quality" size="30"required x-moz-errormessage="please enter quality" ></td>
	     </tr>
	      <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>PropertyModel:</td>
		 <td><input type="prop_model" name="prop_model"size="30" required ="prop_model" ></td>
	     </tr>
		<tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Description:</td>
		 <td><textarea required name="description" id="description"rows="5"cols="24" > </textarea><br></td>
		 </tr>
	   <tr>
          <th height="25" colspan="2" align="right" valign="bottom" scope="row"><label>
            <input name="Add" type="submit" id="Register" value="Register" style="width:70px;" />
            <input type="reset" name="Submit2" value="Cancel" style="width:70px;" />
          </label></th>
        </tr>
</table> 
  </form>
	  </div>
	  
	  <!--close sidebar_container-->
    </div>
	  
	  <!--close sidebar_container-->
    </div>
	
	<!--close sidebar-->
</body>
</html>
