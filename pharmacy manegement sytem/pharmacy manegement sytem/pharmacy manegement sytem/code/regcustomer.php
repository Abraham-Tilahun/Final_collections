<?php
	include("conn.php");  
 session_start();
if(isset($_SESSION['accountid']))
 {
  $user_id=$_SESSION['accountid'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login1.php');
 </script>
 <?php
 }
 ?>
 <?php
			//include('conn.php');
			//session_start();

			//mag show sang information sang user nga nag login
			$user_id=$_SESSION['accountid'];

			$result=mysql_query("select * from account where accountid='$user_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);
            $accountid=$row['accountid'];
			$username=$row['username'];
			$password=$row['password'];
			?>
<html>
<head>
<link style="text/css" href="css/1.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type='text/javascript'>
function checkvalidation()
{


       
        var fname = document.getElementById('fname');
		 var mname = document.getElementById('mname');
      var lname = document.getElementById('lname');
	  var age = document.getElementById('age');

	 var sex=document.getElementById('sex');
	var region=document.getElementById('region');
	var wereda=document.getElementById('wereda');
	var kebele=document.getElementById('kebele');
	

		  if(isAlphabet( fname, "Please fill your First Name in letters only")){
		  if(lengthRestriction(fname, 1, 30,"for your first name")){
	
	if(isAlphabet( mname, "Please fill your middle Name in letters only")){
		  if(lengthRestriction(mname, 1, 30,"for your middle name")){
	
		if(isAlphabet(lname, "please fill your Last Name in letters only")){  
	if(lengthRestriction(lname, 1, 30,"for your last name")){

		if(isNumeric(age, "please fill a numbered age only")){
	    if(ageRestriction(age)){
		if(lengthRestriction(age, 1, 3,"enter valid age between 18 and 120")){

			  if(madeSelection(sex,"please choose sex")){
				if(madeSelection(region,"please choose region")){
			
			if(isAlphabet(wereda, "please fill your wereda in letters only")){  
	if(lengthRestriction(wereda, 3, 30,"for wereda")){

		if(isNumeric(kebele, "please fill your kebele in numbers only")){  
	if(lengthRestriction(kebele, 1, 10,"for kebele")){

		
			 return true;

						}}} }}} }}}} }}} }}
	return false;
	
}
	
  
  function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg)
	{
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else
		{
		alert(helperMsg);
		elem.focus();
		return false;
	}}


function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}



function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z /]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function ageRestriction(elem){
    	if(elem.value<18 ||elem.value>120)
	{
	alert("enter valid age between 18 and 120");
	elem.focus();
	return false;}
	else{
  return true;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value =="..select.."){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
}
</script>



<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/b.jpg"
demo2 = new Image();
demo2.src="images/is.jpg"
demo3 = new Image();
demo3.src="images/x.jpg"


demo4 = new Image();
demo4.src="images/37.jpg"
demo5 = new Image();
demo5.src="images/45.jpg" 
demo6 = new Image();
demo6.src="images/rt.jpg"
demo7 = new Image();
demo7.src="images/dx.jpg" 

}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
<title>Register customer page</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:1481px;
	height:83px;
	z-index:1;
	left: 13px;
	top: -3px;
	background:#999999;
}
-->
</style>
</head>

<body bgcolor="#CCCCCC" onLoad="timeimgs('1');" >
<table align="center" width=1000px height="600px" border=0>
<tr><td height=20px  colspan=2>
<p align="center">&nbsp;</p></td>
</tr>
<td  height="30px" colspan=2 ><div id="Layer1" align="center">
  <h1><font color="#FFFFFF">Red Cross Society For Debretabor Branch  || ደብረ-ታቦር ቀይ መስቀል ማህበር</font><br>
    </p>
</h1>
  </div>
    
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;            
       
   
              
       
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;       
                 
              
       
              
                            
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;      
         
   
              
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
              
                 
              
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <div id="dropdown">
 <li><a href="pharmacist.php">
 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
	 
	 Home</a></li>

	 <li><a href="#">Manage Customer<font color="red"></a>
 <ul>
	     <li><a href="regcustomer.php">&nbsp;Register Customer</font></a></li>
		 <li><a href="viewcustomer.php">&nbsp;View Customer</font></a></li>
		<li><a href="searchcustomer.php">&nbsp;Search Customer</font></a></li>
		<li><a href="deletecustomer.php">&nbsp;Delete Customer</font></a></li>

		 </ul></li>

  <li><a href="checkdrug.php">Check Item<font color="red"></a></li>
<li><a href="sale.php">Sale Drug<font color="red"></a></li>
 
	 
	<li><a href="changepass3.php">Change Password<font color="red"></a></li>
	 <li><a href="logout.php" id="logout"><b>Logout</b></a></li>
	
</div>
</td>
</tr>
<tr>
<td  height=500px width=150px  valign=top border="0" bgcolor="blueblack" >
<table border="0"  width="200" height="400" class="menu-bar" align="center">
<tr >
<td width="230" height="350" bgcolor="blueblack" ><font color="black" face="monotype corsiva" size="3">
<h2 align="center">Red Cross Pharmacy </h2><img src="images/photo.jpg" width="300" height="300" align='left'>

<font valign="top" color="black" face="monotype corsiva" size="3"><h2 valign="top">&nbsp;&nbsp;&nbsp;You can see the user manual by clicking the 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help link!!</h2></font>
<a href="final documentation.pdf" target="self">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Help</font></a>&nbsp;&nbsp;&nbsp;
</td>
</tr>
 <tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td align="center" valign="top" bgcolor="white">
<form action="regcustomer.php" method="post" name="register" onSubmit="return checkvalidation()">
<fieldset><legend align="center"> <font face='monotype corsiva' size='5px' color="red">Customer Registration Form</font></legend>&nbsp;<br><br>
<font align="center" color="black">
<b><font size="3px" >Customer Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="customerid" id="customerid"  placeholder="..customer id.." size="20%"><br><br>

<b><font size="3px" >First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" id="fname"  placeholder="..first name.." size="20%"><br><br>
<b><font size="3px">Middle Name:&nbsp;&nbsp;<input type="text" name="mname" id="mname"  placeholder="..Middle name.." size="20%"><br><br>
<b><font size="3px">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" id="lname"  placeholder="..last name.." size="20%"><br><br>
<b><font size="3px">&nbsp;&nbsp;&nbsp;
<b><font size="3px">&nbsp;

Age:&nbsp;&nbsp;<input type="text" name="age" id="age"  placeholder="..age.."size="6%"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
Sex:&nbsp;&nbsp; <select id="sex" name="sex"> <option selected >..select..</option><option >Male</option>
<option>Female</option></select><br><br>
Region:&nbsp;&nbsp; <select id="region" name="region"> <option selected >..select..</option><option >Tigray</option>
<option>Oromia</option><option>amhara</option><option>beneshangul</option><option>afar</option><option>somalia</option><option>harrer</option>
<option>gambela</option><option>SNNPR</option></select><br><br>
<b><font size="3px">Wereda:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="wereda" id="wereda"  placeholder="..Wereda.." size="20%"><br><br>
<b><font size="3px">Kebele:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="kebele" id="kebele"  placeholder="..Kebele.." size="20%"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" value="register" name="register">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" name="cancel">
</fieldset>
</form>

<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
if(isset($_POST['register']))
{
$sql="INSERT INTO customer(customerid,firstname,midlename,lastname,age,sex,region,wereda,kebele)
 VALUES 
('$_POST[customerid]','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[age]','$_POST[sex]','$_POST[region]','$_POST[wereda]','$_POST[kebele]')";
if(mysql_query($sql,$conn))
 {
 echo"<script>alert('Your are successfully register customer!!')</script>";

 }
 else{
  echo"<script>alert('error in registeration!!')</script>";
}
 mysql_close($conn);
 } 
?>
</td>

<td width=150px bgcolor="blueblack" height=500>
<table border=0 width=200px height=400px>
<tr>
<td border="0" height="400" width="225" bgcolor="blueblack">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" face="monotype corsiva" size="6">
<?php
echo(Date(" F d,Y"));
?>
<img src="" height="320" width="250" name="demo" >
<font face="French Script MT" size="5" color="black"><b>&nbsp;&nbsp;Red Cross pharmacy Works<br> &nbsp;&nbsp;&nbsp;&nbsp;For giving service for the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;society!!!</b></font><br><br>
<font face="Times New Roman" size="4" color="black">The pharmacy plays a greate role in stisfying the need of the society &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for Debre Tabor city and around us. 
<br><br><br><br><br>
</td>
</tr>
<tr>


</td>
</tr>
</table>

</td>
</tr>
<tr>
<td colspan=3>

<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="blueblack" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Red Cross Pharmacy 2016. Copyright All Rights Reserved
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>