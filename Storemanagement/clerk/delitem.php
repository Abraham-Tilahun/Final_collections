<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>store managment system</title>
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
        <div id="content_item">
		
	 <?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select ItemName from new_item";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
	  
      <?php
				  if (isset($_GET['id']))
	{
			$messages_id = $_GET['id'];
			echo '<form action="deleteoption.php" method="post">';
			echo '<input name="id" type="hidden" value="'. $messages_id . '" />';
			echo '<style="font-family:Georgia,Serif; font-size=20px;" >Are you sure you want to delete this item? </font>';
			echo '<div>'.'<input name="yes" type="submit" value="Yes" />&nbsp;&nbsp;&nbsp;<input name="no" type="submit" value="No" />'.'</div>';
			echo '</form>';
			include('srch_item.php');
	}
			?>
	  <?Php
	 //include('srch_item.php');
	 ?>
	</div>
	  </div>
	
</body>
</html>
