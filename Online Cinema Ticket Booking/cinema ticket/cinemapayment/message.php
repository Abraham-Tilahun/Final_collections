<?php
	include("includes/db.php");
	include("includes/functions.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online ticket booking system for Hibret Hotel cinema</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	

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
  
  <style>
a{
color:black;
text-decoration:none;
} 
</style>
	<script language="javascript">
  function check()
  {
   if(document.getElementById("txt_fname").value =="")
   {
    alert('Please Enter The FName !!'); 
    document.getElementById("txt_fname").focus();
    return false;
   }
   if(document.getElementById("txt_l").value =="")
   {
     alert('Please Enter LastName !!'); 
    document.getElementById("txt_l").focus();
    return false;
   }
   if(document.getElementById("txt_ge").value =='-select-')
   {
    alert('Please Select  Gender !!'); 
    document.getElementById("txt_ge").focus();
    return false;
   }
   if(document.getElementById("txt_mail").value =="")
   {
    alert('Please Enter E-Mail !!'); 
    document.getElementById("txt_mail").focus();
    return false;
   }
 if(document.getElementById("txt_pass").value =="")
   {
     alert('Please Enter Password !!'); 
    document.getElementById("txt_pass").focus();
    return false;
   }
   
   
   
   if(document.getElementById("txt_rpass").value =="")
   {
     alert('Please Enter The re-type password !!'); 
    document.getElementById("txt_rpass").focus();
    return false;
   }
  
 if(document.getElementById("txt_mo").value =="")
   {
     alert('Please Enter Mobile Number !!'); 
    document.getElementById("txt_mo").focus();
    return false;
   }
  
  if(document.getElementById("role").value =='--select--')
   {
     alert('Please Enter Select Role !!'); 
    document.getElementById("role").focus();
    return false;
   }
  }
 </script>
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/desktop/acer/ac.jpeg"
demo2 = new Image();
demo2.src="images/desktop/dell/dd.jpeg"
demo3 = new Image();
demo3.src="images/labtop/apple/images_030.jpeg"


demo4 = new Image();
demo4.src="images/labtop/dell/dl.jpeg"
demo5 = new Image();
demo5.src="images/labtop/dell/delllap.jpeg" 
demo6= new Image();
demo6. src="images/labtop/toshiba/toshiba-11q4-C655-S5335-cover-sm.jpg"
demo7=new Image();
demo7.src="images/labtop/apple/images_013.jpeg"
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
 <script type="text/javascript">

   //Created / Generates the captcha function    
    function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
        var d = Math.ceil(Math.random() * 10)+ '';  
        var e = Math.ceil(Math.random() * 10)+ '';  
        var f = Math.ceil(Math.random() * 10)+ '';  
        var g = Math.ceil(Math.random() * 10)+ '';  
        var code = a + b +  c +  d +  e +  f +  g;
        document.getElementById("txtCaptcha").value = code
    }

    
 
    </script>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<span><a href="singup.php" title="Register">Register</a>
<a href="login.php" title="Login">Login</a></span><a href="www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="www.google.com" target="_blank"><img src="images/google.png"/></a></p>
</td>
</tr>
<tr>
<td id="td1" width=920px height=113px >

</td>
</tr>
<tr>
<td >
 <div id="topnav" >

			<div class="shell">
				<ul>
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="laptop.php" title="Laptop">Laptop</a></li>
					<li><a href="desktop.php" title="Desktop">Desktop</a></li>
					<li><a href="#" title="Mobile">Mobile</a></li>
					<li><a href="#" title="">More</a>
					<ul><li><a href="#">TV</a></li><br/>
            <li><a href="#">Refrigerator</a></li>
            <li><a href="#">Stove</a></li>
          </ul>
	    </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
</td>
</tr>
<tr>
<td align="center" >

	
	<div id="sliderFrame">
        <div id="slider">
            <img src="images1/slide-img1.jpg" alt="" />
            <img src="images1/slide-img1.jpg" alt="" />
            <img src="image/slider-2.jpg" alt="" />
            <img src="image/slider-1.jpg" alt="" />
			<img src="images1/product-img1.jpg" alt="" />
			<img src="image/images1222.jpeg" alt="" />
        </div>
        <!--Custom navigation buttons on both sides-->
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
	</td>
	</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 
<h2><big style="color:geern" >Information</big></h2><br><br>
		
 <a href="#"><img src="images1/widget-arrow.png" width="15" />DeliveryInfo</a>

   <a href="#"><img src="images1/widget-arrow.png" width="15" />Our Prices</a>
    <a href="#"><img src="images1/widget-arrow.png" width="15" />OurProducts</a>
	<a href="#"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="#"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
<script type='text/javascript'>
function formValidation(){
//assign the fields
        var txt_fname = document.getElementById('txt_fname');
		var txt_l=document.getElementById('txt_l');
	var txt_ge= document.getElementById('txt_ge');
	var txt_mail = document.getElementById('txt_mail');
	var txt_pass = document.getElementById('txt_pass');
	var txt_rpass = document.getElementById('txt_rpass');
	var txt_mo = document.getElementById('txt_mo');
	
	var code=document.forms["personal"]["codetype"].value;
var codetype=document.forms["personal"]["codetypecopy"].value;

if(isAlphabet(txt_fname, "please enter Your Fname in letters only")){
if(lengthRestriction(txt_fname, 3, 30,"for your Fname")){
if(isAlphabet(txt_l, "please enter Your Lname in letters only")){
if(lengthRestriction(txt_l, 3, 30,"for your Lname")){
if(madeSelection(txt_ge, "please select the gender")){	
if(emailValidator(txt_mail,"check your e-mail format")){
if(lengthRestriction(txt_pass, 8, 30,"for your password")){
if(lengthRestriction(txt_rpass, 8, 30,"for your password")){
if(isNumeric(txt_mo, "please enter Number only For Mobile Phone")){

	return true;
	}}}
	}
	}
	}
	}
	}
	}
return false;
		
}
function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
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
if( codetype != code ) {
alert("Invalid Code Pls. try again........ thank you");
  return false;
}
	</script>
<form  method='POST' action='singup.php' onsubmit='return formValidation()' enctype="multipart/form-data">
<input type="hidden" name="role" id="name" value="<?php echo 'Customer'; ?>" />

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:15px 25px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td colspan=3 align=center><font color=black> User Registration 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text" name="fname" value="" size='20%' id="txt_fname" placeholder='Fname'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Last Name :
	</td><td><input type="text" name="lname" value="" size='20%' id="txt_l" placeholder='Lname'></input></td></tr><br>
<tr><td><font color=red> * </font><font color=black>Gender :</td><td><select name='gender'  id="txt_ge">
<option selected="selected">-select-</option>
<option>Male</option>
<option>Fmale</option>
</select></td></tr>

<tr><td><font color=red> * </font><font color=black>E-mail :</td><td><input type="text" name="mail" value="" size='20%' id="txt_mail" placeholder='E-Mail'/></td></tr>
<tr><td><font color=red> * </font><font color=black>Password :</td><td><input type="password" name="pass" value="" size='20%' id="txt_pass" placeholder='Password'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Re-Enter Password :</td><td><input type="password" name="rpass" value="" size='20%' id="txt_rpass" placeholder='RE-EnterPassword'></input></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Mobile No :</td><td><input type="text" name="mobile" value="" size='20%' id="txt_mo" placeholder='MobileNo'/></td></tr>
<tr><td><font color=red> * </font><font color=black>Country:</td><td><input type="text" name="cou"  size='20%' id="txt_co" value='Ethiopia' READONLY /></td></tr>
<tr><td><font color=red> * </font><font color=black>City</td><td><input type="text" name="city" id="city" size='20%'  placeholder='City'/></td></tr>
<tr><td colspan=3 align=center><font color=black> Input the Secret Code</td>

<tr>
 <td ><div id="Layer1">
        <input type="text" name="codetypecopy" id="txtCaptcha" 
style="text-align:center; align:right; border:none; font-weight:bold; font-family:Modern; font-size:20px; font-size: 20px; width: 200px;" />
        <img src="captcha.png" width="200" height="30"  style="margin-top:-30px;align:right;" /></div></td>
      <td><a href="#" onclick="DrawCaptcha();"><img src="images/refresh.png"  title="Refresh" alt="refresh" border="0" style="margin-top:5px; margin-left:5px;" /></a></td>
    </tr>
    <tr>
      <td><div align="left" class="style1"><font color=red> * </font><font color=black>Enter the Code here: </div></td>
      <td><input name="codetype" type="text" class="ed" id="code" size="25%" /></td>
      <td>&nbsp;</td>
    </tr>

<tr><td colspan="2" align="center"><input type='submit' value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset' value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain']) )
{

$fname=$_POST['fname'];
$date=$_POST['lname'];
$month=$_POST['gender'];
$year=$_POST['mail'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$mo=$_POST['mobile'];
$cou=$_POST['cou'];
$cit=$_POST['city'];
$role=$_POST['role'];
if($pass==$rpass){
$query="INSERT INTO user(Name ,Lname,gender,email,password,re_typepassword,Mobile,country,city,role)";
$query.="VALUES ('{$fname}','{$date}','{$month}','{$year}','{$pass}','{$rpass}','{$mo}','{$cou}','{$cit}','{$role}');";
$result=mysql_query($query);
if(!$result){
echo"<p  class='wrong'> This E-Mail Is Ordey Existing!!!</p>";
}
else{
echo"<p  class='success'> congratulations </p>";
}
}
else{
echo"<p  class='wrong'> Password Not Match</p>";  
}
mysql_close($conn);
}
?>
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="500" width="150"  id="td2" > 

<h2><p valign=top>Coming soon</h3></p>


</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>ROUP 7 $copy2009/2017 HibretHotelCinema ,All RIghts Reserved.</p>
</td>
</tr>

</table>
</body>
</html>
