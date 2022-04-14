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
        <div class="content_item3">
		   
		  
		  <p>
		  
		    <?php
			echo "<form action='approved.php' method='post'>";
			if (isset($_GET['id']))
	
	
			$msg = $_GET['id'];
			
			
			
			
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("dbu", $con);
		echo '<input name="id" type="hidden" value="'.$msg .'" />';
			echo '<br>';
			echo '<br>';
			$id=$_GET['id'];
			$tday=date('Y-m-d');

			$result = mysql_query("SELECT * FROM request WHERE Req_ID = '$id'");

			while($row = mysql_fetch_array($result))
  			{
			echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emp Id &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="empid" value="'. $row['EmpId'] .'">'; 
			  echo '<br>';
			  echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emp Name</font>&nbsp;&nbsp;&nbsp;<input type="text" name="empname" value="'. $row['Employee Name'] .'">'; 
			  echo '<br>';
			  echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Id &nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" align="right" name="iid" value="'. $row['ItemId'] .'">'; 
			  echo '<br>';
			  echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Name</font>&nbsp;&nbsp;<input type="text" name="iname" value="'. $row['Item Name'] .'">'; 
			  echo '<br>';
			 			echo'<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="status" value="On Use">'; 
			echo '<br>';
            echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Borrowed Date<input type="text" class="w8em format -y-m-d highlight-days-67 range-low-today" name="start" id="sd" value='.$tday.' maxlength="10" readonly="readonly" />';
			echo '<br>';
			echo '<br>';
			echo '<input name="ok" type="submit" value="Register" align="center" Onclick="return check(this.form);" />';
			echo '</form>';
		}	
	//header("location: approve_req.php");
	//include("cancel_req.php");
			?>
		  </p>
		  <p>  
		    </form>
	          </p>
	    <?Php
	//include('approve_req.php');
	 //include('approve_request.php');
	 ?></div>
	  </div>

</body>
</html>
