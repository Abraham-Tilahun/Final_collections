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
$today=date('Y-m-d');
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
$sql="select ItemId from new_item";
$res=mysql_query($sql) or die("query error".mysql_error());

?>
	 <form action="send_request.php " method="post">
      <table width="405" height="124" bordercolor="#CCCCCC" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic;">
        <tr>
          <th height="41" colspan="2" align="center" valign="bottom" scope="row"></th>
        </tr>
        <tr>
          <th width="194" height="20" align="right" valign="bottom" scope="row">Employee Id </th>
          <th width="195" align="left" valign="bottom" scope="row"><label>
              <input name="empid" type="text" id="EmployeeId" value="<?php echo $empid; ?>"  readonly="readonly" pattern="\w{3,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required\/>
          </label></th>
        </tr>
        
        <tr>
          <th width="194" height="71" align="right" valign="bottom" scope="row">Employee Name </th>
          <th width="195" align="left" valign="bottom" scope="row"><label><br />
              <input name="empname" type="text" id="Employeename" value="<?php echo $empname; ?>" readonly="readonly" pattern="\D{3,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required/>
          </label></th>
        </tr>
                <tr>
          <th width="194" height="71" align="right" valign="bottom" scope="row">ItemId </th>
          <th width="195" align="left" valign="bottom" scope="row"><label><br />
              <input name="Id" type="text" id="Employeename" value="" pattern="\d{1,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required/>
          </label></th>
        </tr>
               <tr>
          <th width="194" height="71" align="right" valign="bottom" scope="row">Item Name </th>
          <th width="195" align="left" valign="bottom" scope="row"><label><br />
              <input name="iname" type="text" id="Employeename" value="" pattern="\D{1,15}" title="Please Fill The Item Name" onKeyPress="return isText(event)" required/>
          </label></th>
        </tr>
        <tr>
          <th height="26" align="right" scope="row">Request Date </th>
          <th height="26" align="left" scope="row"><input class="mine_text_field_7" name="date" id="txtfrom" size="20"  readonly="readonly" type="text" placeholder='Request date' value="<?php echo $today; ?>"/>
<th>
        </tr>
         <tr>

          <th height="27" align="left" scope="row"><p>
            <input name="rstat" type="hidden" id="rstat" value="Waiting" readonly="readonly" />
          </p>          </th>
        </tr>
        <tr>
          <th height="27" align="left" scope="row"><p>
            <input name="Aitem" type="hidden" id="Aitem" value="Waiting" readonly="readonly" />
          </p>          </th>
        </tr>
        <tr>
          <th height="39" colspan="2" scope="row"><input name="Send" type="submit" class="style8" id="Send" value="Send" />
          <input name="Cancel" type="reset" class="style8" id="Cancel" value="Cancel" /></th>
        </tr>
       
      </table></form>

					
	  <?Php
	 //include('srch_item.php');
	 ?>
	</div>
	  </div>

</body>
</html>
