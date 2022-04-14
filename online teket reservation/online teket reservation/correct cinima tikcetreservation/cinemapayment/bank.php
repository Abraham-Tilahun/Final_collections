<?php
	include("includes/bank.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online ticket booking system for Hibret Hotel cinema</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="jss/jsquery-1.3.1.min.js"></script>




  
  <style>
a{
color:black;
text-decoration:none;
} 
</style>


	<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/ph.jpeg" 
demo2 = new Image();
demo2.src="images/GM-FurnitureFinal.gif"
demo3 = new Image();
demo3.src="images/Habesha1.gif"
demo4 = new Image();
demo4.src="images/I-Print5.gif"
demo5 = new Image();
demo5.src="images/ti.GIF" 
}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 7000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "5") {         // This will loop the image
document["demo"].src = eval("demo5.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}
</script>	 
</head>
<body >

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">

</td>
</tr>
<tr>
<td id="" width=920px height=113px >

</td>
</tr>
<tr>
<td >
 
</td>
</tr>
<tr>
<td align="center" >
<font color=white size=15>Commercial Bank of Ethiopia</font>
	
	
	</td>
	</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 

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
	var txt_co=document.getElementById('txt_co');
	var txt_mo = document.getElementById('txt_mo');
	var city = document.getElementById('city');
	
if(isAlphabet(txt_fname, "please enter Your Fname in letters only")){
if(lengthRestriction(txt_fname, 3, 30,"for your Fname")){
if(isAlphabet(txt_l, "please enter Your Lname in letters only")){
if(lengthRestriction(txt_l, 3, 30,"for your Lname")){

if(isNumeric(txt_mo, "please enter Number only For Mobile Phone")){
if(isAlphabet(city, "please enter Your City in letters only")){
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
<form  method='POST' action='bank.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td colspan=3 align=center><font color=black> Bank Information 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text" name="fname" required="required" value="" size='20%' id="txt_fname" placeholder='Fname'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Last Name :
	</td><td><input type="text" name="lname" value="" size='20%' id="txt_l" placeholder='Lname' required="required"></input></td></tr><br>
<tr><td>
<font color=red> * </font> <font color=black>Account No :</td><td><input type="password" name="mobile" value="" size='20%' required="required" id="txt_mo" placeholder='Account No'/></td></tr>
<tr><td><font color=red> * </font><font color=black>Amount Birr:</td><td><input type="text" name="cou"  size='20%' required="required" id="txt_co" placeholder="Amount Birr" /></td></tr>
<tr><td><font color=red> * </font><font color=black>Secret Key</td><td><input type="password" name="city" id="city" size='20%' required="required"  placeholder='Secret Key'/></td></tr>


<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset'class="button_example"  value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain']) )
{
$fname=$_POST['fname'];
$date=$_POST['lname'];
$mo=$_POST['mobile'];
$cou=$_POST['cou'];
$cit=$_POST['city'];
$query="INSERT INTO bank(fname,lname,accountnumber,amountbirr,security)";
$query.="VALUES ('{$fname}','{$date}','{$mo}','{$cou}','{$cit}');";
$result=mysql_query($query);
if(!$result){
echo"<p  class='wrong'> This E-Mail Is Ordey Existing!!!</p>";
}
else{
echo"<p  class='success'>Congra</p>";
}


mysql_close($conn1);
}
?>
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 

</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>GROUP 7 $copy2009/2017 HibretHotelCinema ,All RIghts Reserved.</p>
</td>
</tr>

</table>
</body>
</html>
