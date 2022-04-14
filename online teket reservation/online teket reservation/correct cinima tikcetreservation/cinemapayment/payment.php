<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head>
<?php
	include("includes/see1.php");

  include("includes/db.php");
 session_start();


 ?>
<?php
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>

<?php
$transnum=$_SESSION['SESS_MEMBER_ID'];

 $fname=$_SESSION['finame'];
$lname=$_SESSION['lname'];
$product=$_SESSION['movie'];
$email=$_SESSION['email'];
$mobile=$_SESSION['cnum'];
$transnum=$_SESSION['transnum'];
$kebele=$_SESSION['kebele'];
$time=$_SESSION['time'];
$ddddddd=$_SESSION['date'];
$total=$_SESSION['ototal'];
$dmethod=$_SESSION['sdsd'];
$home=$_SESSION['home'];
$street=$_SESSION['street'];
$house=$_SESSION['house'];
$ketema=$_SESSION['ketema'];
$pmethod=$_SESSION['pmethod'];
$ddate=$_SESSION['ddate'];


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Masiyas Electronic Shopping</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" charset="utf-8">
<script language="javascript" src="datetimepicker.js"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  

<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["total"].value;
if (x==null || x=="")
  {
  alert("Take Your Order first");
  return false;
  }
var con = confirm("Are You Sure? you want to order this product?");
if (con ==false)
{
return false;
}
}
</script>
<script type="text/javascript">
function validateForm1()
{


if (document.form1.checkbox.checked == false)
{
alert ('pls. agree the term and condition of this company');
return false;
}
else
{
return true;
}
}
function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='order.php');
   }
   else
   {
   return false;
    
   }
  }
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    return false;
   }
   else
   {
    alert(window.location='login.php');
   }
  }
</script>
<style>
a{
color:#fff;
text-decoration:none;
}</style>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 >
<?php 
echo '<p align=right style="margin-right:3%;">'.'<img src="images1/User3.png" width=50px height=25px/>'."&nbsp;".'<font color=black>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="/cinema ticket/logout.php" onClick="isConfirmloggg();">logout</a>'.'<a href="http://www.facebook.com" target=_blank ><img src="images/facebook.png">&nbsp;</a>'.
'<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png">&nbsp;'.'<a href="http://www.google.com" target="_blank"><img src="images/google.png">&nbsp;'.'</font>';

?>

</td>
</tr><tr>
<td >
<img src="image/11.PNG" width=900 height=200>
<span class="style5">HIBRET HOTEL ,DEBRE TABOR TOWN,AMHARA REGION,ETHIOPIA</span></td>


</td>
</tr>
</td>
</tr>
<tr>
<td >

</td>
</tr>
<tr>
<td align="center" >

	
	<div id="sliderFrame">
        <div id="slider">
            <img src="images1/51.jpg" alt="" />
            <img src="images1/52.jpg" alt="" />
            <img src="images1/53.jpg" alt="" />
            <img src="images1/54.jpg" alt="" />
			<img src="images1/ayrak.jpg" alt="" />
			<img src="images1/56.jpg" alt="" />

        </div>
        <!--Custom navigation buttons on both sides
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
	</td>
	</tr>-->
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

<!-------------------Left Side    -------->	
	
		
		</div>
	</td>
<td valign="top" id="tdd" height=400px>	

<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:13px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:450px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{

background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
color:black;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:left;
width:120px;
float:left;
color:black;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:110px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized select{
float:left;
font-size:18px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:20px;
width:115px;
height:31px;
background:#666666 url(images1/button.png) no-repeat;
text-align:left;
line-height:31px;
color:black;
font-size:19px;
font-weight:bold;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["fname"].value;
if (x==null || x=="")
  {
  alert("Enter Firstname");
  return false;
  }
  var y=document.forms["form1"]["lname"].value;
if (y==null || y=="")
  {
  alert("Enter Lastname");
  return false;
  }
  var z=document.forms["form1"]["cnum"].value;
if (z==null || z=="")
  {
  alert("Enter Contact Number");
  return false;
  }
  var a=document.forms["form1"]["email"].value;
if (a==null || a=="")
  {
  alert("Enter Email Address");
  return false;
  }
    var b=document.forms["form1"]["paddress"].value;
if (b==null || b=="")
  {
  alert("Enter Address");
  return false;
  }
    var c=document.forms["form1"]["city"].value;
if (c==null || c=="")
  {
  alert("Enter City");
  return false;
  }
    var d=document.forms["form1"]["daddress"].value;
if (d==null || d=="")
  {
  alert("Enter Delivery Address");
  return false;
  }
  var con = confirm("Are You Sure? you want to proceed?");
if (con ==false)
{
return false;
}
}
</script>
<script type='text/javascript'>
function formValidation(){
//assign the fields
        var txt_name = document.getElementById('txt_name');
		var txt_last=document.getElementById('txt_last');
	var txt_acc= document.getElementById('txt_acc');
	var txt_sec = document.getElementById('txt_mo');
	
if(isAlphabet(txt_name, "please enter Your Fname in letters only")){
if(lengthRestriction(txt_last, 3, 30,"for your Fname")){
if(isAlphabet(txt_l, "please enter Your Lname in letters only")){
if(lengthRestriction(txt_l, 3, 30,"for your Lname")){
if(isAlphanumeric(txt_acc, "please enter AccountNumber ")){
if(isAlphanumeric(txt_sec, "please enter ")){
	return true;
	}}}
	}
	}
	}
	
	
	
return false;
		
}
	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function madeSelection(elem, helperMsg){
	if(elem.value =="-select-"){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter Above " +min+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

	</script>
 
	
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<div id="stylized" class="myform">
<form method="post" action=""  onsubmit="return validateFormm()" onsubmit='return formValidation()'>

<input type='hidden' name='transfer' id='tra' value='masiyas' />
<table border=0px style="margin-top:100px;" >
<tr>
<td colspan=2>
<h1 align=center>Payment form</h1>
</td></tr>
<tr><td>
<label>Account No
</label>
</td><td>
<input type="password" name="account" id="txt_acc"  required x-moz-errormessage="Please Enter your AccountNumber" title="Please Enter your AccountNumber"/>
</td></tr>


<tr><td>
<label>Pin No.

</label>
</td><td>
<input type="password" name="secu" id="txt_sec"  required x-moz-errormessage="Please Enter your Pin Number" title="Please Enter your Pin Number"/>
</td></tr>
<tr><td>

<label>Price.

</label>
</td><td>
<input type="text" name="price"  value="<?php echo $total; ?>" readonly />
</td></tr>
<tr><td colspan=2 align=center>
<input type="submit" value="Confirm" name="submitMain" class="button_example" style="margin-left:130px;">
<div class="spacer"></div></td></tr>
</table>


</div>

<input type="hidden" value="<?php echo $fname ?>"    name="fnamer"  />
<input type="hidden" value="<?php echo $lname ?>"    name="llnamer" />
<input type="hidden" value="<?php echo $product ?>"  name="productr"  />
<input type="hidden" value="<?php echo $email ?>"    name="emailr" />
<input type="hidden" value="<?php echo $mobile ?>"   name="mobiler" />
<input type="hidden" value="<?php echo $transnum ?>" name="transnumr" />
<input type="hidden" value="<?php echo $kebele ?>"   name="kebeler" />
<input type="hidden" value="<?php echo $time ?>"     name="timer" />
<input type="hidden" value="<?php echo $ddddddd ?>"  name="dddddddr" />
<input type="hidden" value="<?php echo $home ?>"      name="homer" />
<input type="hidden" value="<?php echo $street ?>"    name="streetr" />
<input type="hidden" value="<?php echo $house ?>" name="houser" />
<input type="hidden" value="<?php echo $ketema ?>" name="ketemar" />
<input type="hidden" value="<?php echo $pmethod ?>" name="pmethodr" />
<input type="hidden" value="<?php echo $ddate ?>" name="ddater" />
<input type="hidden" value="<?php echo $total ?>" name="totalr" />
<input type="hidden" value="<?php echo $dmethod ?>" name="dmethodr" />
<?php
$x=1;
if(isset($_POST['submitMain'])){

$status='Pending';
$product=$_POST['productr'];
$ffname=$_POST['fnamer'];
$lname=$_POST['llnamer'];
$email=$_POST['emailr'];
$mobile=$_POST['mobiler'];
$transnum=$_POST['transnumr'];
$kebele=$_POST['kebeler'];
$time=$_POST['timer'];
$odate=$_POST['dddddddr'];
$total=$_POST['totalr'];
$home=$_POST['homer'];
$street=$_POST['streetr'];
$house=$_POST['houser'];
$ketema=$_POST['ketemar'];
$pmethod=$_POST['pmethodr'];
$ddate=$_POST['ddater'];
$dmethod=$_POST['dmethodr'];


$tra=$_POST['transfer'];
$a=$_POST['account'];
$amount=$_POST['price'];
$card=$_POST['secu'];
 $query = "SELECT * FROM bank where accountnumber= '{$a}'  AND security='{$card}';";
$result_set=mysql_query($query,$conn1);
$count=mysql_num_rows($result_set);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if($count==0)
{
echo '<div align="center"><strong><font color="#FF0000">Please Try Again</font></Strong></div>';
echo'<meta content="5;payment.php" http-equiv="refresh" />';
}
else{

if(mysql_num_rows($result_set))
{

$result ="SELECT * FROM bank where accountnumber= '{$a}' AND security='{$card}';";
$re=mysql_query($result,$conn1);

while($row = mysql_fetch_array($re))
  {
  if($row['amountbirr']<=$amount){
 $de = mysql_query("DELETE from orders WHERE confirmation='$transnum'",$conn2) or die(mysql_error());

   echo'<strong><center><font color="#FF0000">Your account balance is low</font></center></Strong>';
   echo'<meta content="10;order.php" http-equiv="refresh" />';

  }
  else{
  $value = mysql_query("UPDATE  bank set amountbirr='{$row['amountbirr']}'-'{$amount}' where accountnumber= '{$a}';",$conn1);

  
  
  $sql=mysql_query("INSERT INTO reservation (movie_id,firstname, lastname, kifleketema, kebele,email, mobileno,payable,status, confirmation,homephoneno , street, houseno,delivery_date, date,time, payment, delivery_type) 
VALUES ('$product','$ffname','$lname','$ketema','$kebele','$email','$mobile','$total','$status','$transnum','$home','$street','$house','$ddate','$ddddddd','$time','$pmethod','$dmethod')");
 
 if(!$sql){
  die(mysql_error());
  
  
  }
  
  else{
  echo"yes";
  
  }
  
 echo "<script>window.location='print.php?id=$transnum';</script>";
if($x==1)  {
$query1 = "SELECT * FROM bank where fname= '{$tra}';";
 $result_set=mysql_query($query1,$conn1);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if(mysql_num_rows($result_set)>0)
{
$result1 = mysql_query("SELECT * FROM bank where fname= '{$tra}';",$conn1);
while($row1 = mysql_fetch_array($result1))
  {
   $value = mysql_query("UPDATE  bank set amountbirr='{$row1['amountbirr']}'+'{$amount}' where fname= '{$tra}';",$conn1);
}  	
}
}


}
}
}	   
else
   {
     
	  echo'<strong><center><font color="#FF0000">Please Try Aging!!</font></center></Strong>';
   }
   }
mysql_close($conn1);
mysql_close($conn2);
}
?>




</form>


</td>

</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>ROUP 7 $copy;2009/2017 HibretHotelCinema &reg;All RIghts Reserved @DEBRE TABOR UNIVERSITY.</p>
</td>
</tr>

</table>
</body>
</html>
