<?php
	include("config.php");  
 session_start();
if(isset($_SESSION['validuser']))
 {
  $mail=$_SESSION['validuser'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['validuser'];

$result=mysql_query("select * from accou where username='$user_id'")or die(mysql_error());
$row=mysql_fetch_array($result);
$empid=$row['EmpId'];
$result1=mysql_query("select * from user where EmpId='$empid'")or die(mysql_error());
$row1=mysql_fetch_array($result1);
$empname=$row1['FirstName'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="shortcut icon" href="images/DbuLogo.jpg">
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  </script>
    <script language='Javascript'>
			  function isNumberKey(evt){
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				 return true;
			  }
		</script>
		    <script language='Javascript'>
			  function isText(e){
				 var keyCode = e.which ? e.which : event.keyCode
				 if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122))
					return true;
				 return false;
			  }
		</script>
<head>
  <title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/image_slide.js"></script>
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
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>
</div>
    <!--close header-->

	<div id="menubar">
      <ul id="menu">
       <li class="current"><a href="clerk.php">Home</font></a></li>
	   <li><a href="viewitem.php">View Item</font></a></li>
        <li><a href="additem.php">Manage Item </font></a>
		<ul>
		<li><a href="additem.php">Add Item </font></a></li>
		<li><a href="searchitem.php">Search Item</font></a></li>
		</ul>
		</li>
        <li><a href="../logout.php">Log Out</font></a></li>
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
	  <form action='inssert_item.php' method='post'>
      <table width="495" align="center"   bordercolor="#CCCCCC" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic; padding-left:30px; "><br/> <br /><br/><br/> 
	    <tr>
          <th width="485" height="66" scope="row"><img src="images/adddd.jpg" alt="" width="110" height="53" />Item here... </th>
        </tr>
		<tr>
          <th width="179" align="center" scope="row">Item Name </th>
          <td width="135"><label>
            <input name="ItemName" align="left" type="text" id="ItemName" pattern="\D{3,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required/>
          </label></td>
        </tr>
        <tr>
          <th align="center" scope="row">Price</th>
          <td><label>
            <input name="price" type="text" id="price" pattern="\d{2,15}" title="Please Enter The Price" onKeyPress="return isNumberKey(event)" required/>
          </label></td>
        </tr>
        <tr>
          <th align="center" scope="row">ItemCatagory</th>
          <td>
                 <select name="Qauntity" id="Itemcatagory">
                 <option>Computer</option>

               <option>Electronics</option>
                <option>Labratory Material</option>
</select></td>
        </tr>
        <tr>
          <th align="center" scope="row">Model</th>
          <td><input name="model" type="text" id="model" pattern="\D{3,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required/></td>
        </tr>
		<tr>
          <th align="center" scope="row">ItemStatus</th>
          <td valign="bottom" background="1"><label>
              <input type="text" name="ItemStatus" id="ItemStatus" value="Free" readonly="readonly">

            </label></td>
          </tr>
           <tr>
          <th align="center" scope="row">Assigned Collage</th>
          <td>
                 <select name="collage" id="Itemcatagory">
                 <option>Computing</option>
                  <option>Engineering</option>
               <option>Agricalture</option>
                <option>FB</option>
</select></td>
        </tr>
          <tr>
          <th align="center" scope="row">Item Type</th>
          <td valign="bottom" background="1"><label>
              <select name="Itemcatagory" id="Itemcatagory">
                <option>Consumable</option>
                <option>Returnable</option>
</select>
            </label></td>
          </tr>
		  <tr>
          <th align="center" scope="row">SerialNumber</th>
          <td><input name="sno" type="text" id="sno" pattern="\w{3,15}" title="Please Enter The SerialNumber Of The Item" required /></td>
        </tr>
		<tr>
          <th align="center" scope="row">Shelf_Number</th>
          <td><input name="Shelf_Number"  align="absmiddle"type="text" id="Shelf_Number" pattern="\d{1,15}" title="Please Fill The Item Shelf Number"  onKeyPress="return isNumberKey(event)" required/></td>
        </tr>
        <tr>
		 <tr>
                    <th align="left" scope="row"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ItemImage</th>
                    <td><input type="file" name="ItemImage" id="ItemImage" maxlength="50" value="" style="width:176px;"
                          onchange=" document.getElementById('ItemImage').value=trim(this.value); " required/>
                          <div class="example">  Image Size Should not Exceed 25000bytes.</div></td>
                  </tr>
          <th height="55" colspan="2" align="center" valign="bottom" scope="row"><label>
            <input name="Add" type="submit" id="Add" value="Add" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
            <input type="reset" name="Submit2" value="Cancel" style="background-color:#ffff99; border-left-style:double; font-size:18px;color:#400000; border:groove"/>
          </label></th>
        </tr>
      </table><p><?php echo $message ?></p></form>
	</div>
	  </div>
	  <!--close sidebar_container-->
<div id="footer">
<table width="1200" align="left">
		<tr><th height="30" width="1200" align="center" bgcolor="#000000">Copyright©2015 DebreBerhan University Store Management System
		</th></tr>
  </table>
</div>

	<!--close sidebar-->
</body>
</html>
