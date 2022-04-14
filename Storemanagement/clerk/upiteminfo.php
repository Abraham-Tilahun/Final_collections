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
      <p>
        <!--close content-->
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
	  	  <form action='itemupdate.php' method='post'>
		  
	  </form>
	  <?Php
	 include('itemupdate.php');
	 ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <label></label>
      <p>&nbsp;        </p>
	</div>
	<!--close site_content-->
	<!--close content_grey-->
  </div>
  <!--close main-->
  <!--close footer-->
</body>
</html>
