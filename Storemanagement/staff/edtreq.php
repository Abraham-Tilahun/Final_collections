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
        <div id="content_item">
<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select EmpId from request";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
          </p>
	      <p>&nbsp;</p>
	      <p>&nbsp;    </p>
	      
      <?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="edititemexec.php" method="post">';
	echo '<br>';
	echo '<input type="hidden" name="firstname" value="'. $_GET['id'] .'">';
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("dbu", $con);
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM request WHERE ItemId = $id && requeststatus='Waiting'");

			while($row = mysql_fetch_array($result))
  			{
			echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:20px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;Item Id:</font> '.'<input type="text" name="Itemid" value="'. $row['ItemId'] .'">';
echo '<br>';			
  			echo'<input type="hidden" name="emid" value="'. $row['EmpId'] .'">'; 
			   echo '<br>';
			   echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">ItemName:</font> '.'<input type="text" name="iname" value="'. $row['Item Name'] .'">'; 
			   echo '<br>';
			   echo '<br>';
			  echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;Quantity</font> '.'<input type="text" name="description" value="'. $row['quantity'] .'">';
			  echo '<br>';
            echo '<br>';
			  
			  //echo'Model: '.'<input type="text" name="qty" value="'. $row['model'] .'">';
			   
			  echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="save" type="submit" value="Update" style="font-size:16px; font-type:italic;"  />';
			  
  			}
	echo '</form>';
	include('cancel_req.php');
			}
			
			?></div>
	  </div>
	  
</body>
</html>
