

<?php 
session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php 
} 
 ?>



<HTML>
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<title>DBU Inventory </title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
<link rel="stylesheet" type="text/css" href="../css/style.css" /> 

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<script>
  function islogout()
  {
   var d = confirm('Are you sure you want to Logout !!');
   if(!d)
   {
    alert(window.location='viewitemstaff.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>


 <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Lists</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>

</head>
<body>
<center>
<table  width="950" height="100" border=0px id="table1"bgcolor=""#000000"">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-4px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/dbu.png" width="215" height="120" alt="DBU INV" title="DBU Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+2"><p align="left"valign="bottom"><img src="IMG/logo1.png"  height="79%" width="77%"/></p></font>

</td>

<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	
		
			<li><a href="comments.php">Comment</a></li>
			<li><a href="viewitemstaff.php">View Item</a></li>
		<li><a href="returnrequest.php">Return Request</a></li>
		
 <li><a href="itemrequest.php">Take Request</a></li>
						
   
<li><a href="logout.php">Logout</a>  </li>     		 
    
	  </div>
	  </td>

</tr>
</table>
</table>




<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 
	
     </td>
<td  bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->
	  <div id="pagetitle"></div>
     	</br><div id="contentarea1">
 <FORM ACTION="returnrequest.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">

<fieldset><legend>All fields are  required:</legend>
<center>
<table  bgcolor="#ffffff" style="border:0px solid black;width:400px;border-radius:15px">
<tr>
<td>First name:</td><td><input name="txtfn" type="text" size"20" pattern="\w{4,15}" required="required" placeholder="Enter first name"></input></td>
</tr>
<tr>
<td>Last Name:</td><td><input name="txtln" type="text" size"20" pattern="\w{2,15}" required="required" placeholder="Enter last name"></input></td>
</tr>

<tr>
<td>User ID :</td><td><input name="txtid" type="text" size"20" pattern="\w{4,15}" required="required" placeholder="Enter user id"></input></td>
</tr>
<tr>
<td>Email :</td><td><input name="txtemail" type="text" size"20" pattern="(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})" required="required" placeholder="Enter email"></input></td>
</tr>
<tr>
<td>Phone No :</td><td><input name="txtphone" type="text" size"20" pattern="\d{10}" required="required" placeholder="Enter phone No"></input></td>
</tr>
<tr>
<td>item Type :</td><td><input name="txttype" type="text" size"20" pattern="\w{4,15}" required="required" placeholder="Enter item type"></input></td>
</tr>
<tr>
<td>Item Name :</td><td><input name="txtname" type="text" size"20" pattern="\w{4,15}" required="required" placeholder="Enter item name"></input></td>
</tr>
<tr>
<td>Item Brand :</td><td><input name="txtbrand" type="text" size"20" pattern="\w{4,15}" required="required" placeholder="Enter item brand"></input></td>
</tr>
<tr>
<input name="txtid" value="<?php echo $empid ?>" type="hidden" size"20" pattern="\w{4,15}" required="required" placeholder="Enter user id"></input>
</tr>
<tr>
<td>Item Code :</td><td><input name="txtcode" type="text" size"20" pattern="\w{4,15}" required="required" placeholder="Enter item code"></input></td>
</tr>
<tr>
<td>Reason :</td><td><input name="reason" type="text" size"20" pattern="\D{4,50}" required="required" placeholder="Enter reason"></input></td>
</tr>


</tr>

<tr><td colspan=2 align=center>
<input type="submit" value="Request" name="add"/> <input type="reset" value="Reset"/>
</td></tr>
</table> </center></fieldset></form>
<?php
 if(isset($_POST['add']))
 {
 $emp_id=$_POST['txtid'];
         $code=$_POST['txtcode'];
	$sql="select * from user where emp_id='$empid'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
	$fname=$row['FirstName'];
	$lname=$row['LastName'];
	$emp_id=$row['EmpId'];
	$email=$row['Address'];
	


								
								
								
								
								$rdate=date("Y-m-d");
$sql="insert into request (firstname,lastname,emp_id,email,item_code,reason,request_date)
	values('$fname','$lname','$emp_id','$email','$_POST[txtcode]','$_POST[reason]','$rdate')";
    $result=mysql_query($sql);	
		  
if(!$result){
    print "<img src='IMG/error.png' align='center' width='25px' height='25px'><font face='arial' color='red' size='2'> Invalid Entry!!</font>";
   echo' <meta content="5;returnrequest.php" http-equiv="refresh" />'; 
}

else{	
    	
	echo'  <p align="center"><font color="green" size="2"><img width="30px" height="30px" src="IMG/tick.png">&nbsp;&nbsp;Successfuly  Requested!</font></p>';
$query="SELECT * FROM request where emp_id='{$emp_id}'";
$result=mysql_query($query);

$count=mysql_num_rows($result);
if($count==1){
while($row=mysql_fetch_array($result)){
$fn=$row['firstname'];
$ln=$row['lastname'];
$emp=$row['emp_id'];
$code=$row['item_code'];
//$reason=$row['reason'];
}
	  
	  echo'<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">';
echo" Confirmation Detail";
echo'<br>';echo'<br>';
echo"First Name:&nbsp;&nbsp;&nbsp;".$fn."<br>";
echo"Last Name:&nbsp;&nbsp;&nbsp;".$ln."<br>";
echo"Employee Id:&nbsp;&nbsp;&nbsp;".$emp."<br>";
echo"Item code:&nbsp;&nbsp;&nbsp;".$code."<br>";
//echo"reason:&nbsp;&nbsp;&nbsp;".$reason."<br>";

 $update = mysql_query("update item set status='reserved' WHERE item_code='{$code}'") or die(mysql_error());
	 echo' <meta content="20;returnrequest.php" http-equiv="refresh" />';  
	  
	  
	  }
	  
	  
	  
	}  
 }
}
mysql_close($conn);
?>
  
</div>
</td><!--center end-->
<td class="right_container" valign="top" height="100" width="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<br/><br>

<br/><br/><br/><br/><br/><br/><br/><br><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2013-2014 @ DBU Online Inventory Management System.</font>
</td></tr></table>




</td></tr></table>
</center>
</body>
</html>
