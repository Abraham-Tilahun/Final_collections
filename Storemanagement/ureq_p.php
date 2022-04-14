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
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="keeperpage.php">Home</a></li>
        <li class="current"><a href="additem.php">Add Item </a></li>
        <li><a href="viewreq.php">View Request </a></li>
        <li><a href="approvereq.php">Approve Request </a></li>
		<li><a href="viewuloan.php">View User Loan </a></li>
        <li><a href="chreturnitem.php">Check Return Item </a></li>
        <li><a href="searchitem.php">Search Item </a></li>
		<li><a href="upiteminfo.php">Update Item Info. </a></li>
        
      </ul>
    </div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>News</h2>
            <fieldset>
			poly store adds many items to satisfy its customer as such as possible.ploy store expandes its service to three institus like institute of Ietchnology(IOT),Institutes of textile ,garment and fashion design and agriculture.poly store managment have good system to serve its customer.it works as it expected. poly store added different items currently.
			</fieldset>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Mission</h2>
			<fieldset>
            <p class="style8">Our Mission is to give efficient service to our customers and to </p>
            <h3>&nbsp;</h3>
			</fieldset>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--><!--close sidebar-->
        <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>Vission</h2>
			<fieldset>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
			</fieldset>
        </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      </div><!--close sidebar_container-->
      <table width="495">
        <tr>
          <th width="485" height="66" scope="row"><img src="images/adddd.jpg" alt="" width="110" height="53" />Item here... </th>
        </tr>
      </table>
      
      <p><?php echo $message;?>&nbsp;</p>
      <form action='ureq_p.php' method='post'>
      <table width="330">
        <tr>
          <th width="179" align="right" scope="row">Item Name </th>
          <td width="135"><label>
            <input name="ItemName" type="text" id="ItemName" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Item Id </th>
          <td><label>
            <input name="Itemid" type="text" id="Itemid" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Price</th>
          <td><label>
            <input name="price" type="text" id="price" />
          </label></td>
        </tr>
        <tr>
          <th align="right" scope="row">Quantity</th>
          <td><input name="Qauntity" type="text" id="Qauntity" /></td>
        </tr>
        <tr>
          <th align="right" scope="row">Model</th>
          <td><input name="model" type="text" id="model" /></td>
        </tr>
        <tr>
          <th height="55" colspan="2" align="center" valign="bottom" scope="row"><label>
            <input name="Add" type="SEND" id="Add" value="Add" />
            <input type="reset" name="Cancel" value="Cancel" />
          </label></th>
        </tr>
      </table></form>
      <p>&nbsp;        </p>
	</div>
	<!--close site_content-->
	<!--close content_grey-->
  </div>
  <!--close main-->
  <!--close footer-->
</body>
</html>
