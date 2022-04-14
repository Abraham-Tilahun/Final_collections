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
	
	echo '<form action="edititeminfo.php" method="post">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	echo '<br>';
	echo '<input type="hidden" name="Id" value="'. $_GET['id'] .'">';
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("dbu", $con);
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM new_item WHERE ItemId = $id");
			while($row = mysql_fetch_array($result))
  			{
			echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmpId </font>'.'<input type="text" readonly="True" name="Id" value="<?php echo $empid; ?>">'; 
			echo '<br>';
			   echo '<br>';
			   echo '<br>';
  			echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;Item Name:</font> '.'<input type="text" name="in" value="<?php echo $name ?>">'; 
			   echo '<br>';
			   echo '<br>';
			   echo '<br>';
			  echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;ItemId:</font> '.'<input type="text" name="pri" value="'. $row['ItemId'] .'">';
			  echo '<br>';
			  echo '<br>';
			   echo '<br>';
			  echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ItemName:</font> '.'<input type="text" name="mol" value="'. $row['ItemName'] .'">'; 
			   echo '<br>';
			   echo '<br>';
			   echo '<br>';
			  echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity:</font> '.'<input type="text" name="qty" value="">';
			   echo '<br>';
			   echo '<br>';
			   echo '<br>';
			    echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;Request Date:</font> '.'<input type="text" name="ItemStatus" value="<?php echo $today ?>">';
			   echo '<br>';
			   echo '<br>'
			    //echo'<font size="+2" style="font-family:Times New Roman, Times, serif; ">ItemImage:</font> '.'<input type="text" name="ItemImage" value="'. $row['ItemImage'] .'">';
			  // echo '<br>';
			   //echo '<br>';
			   //echo '<br>';
			  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="save" type="submit" value="Update" align="center" style="font-size:20px; font-style:italic;" />';
			  
  			}
	echo '</form>';
	include("srch_item.php");
	
			}
			?>
			
	  <?Php
	 //include('srch_item.php');
	 ?>
	</div>
	  </div>

</body>
</html>
