<?php
	include("includes/db.php");

  
 session_start();



if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
  
 }
 else 
 {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php
$transnum=$_SESSION['SESS_MEMBER_ID'];

?>
<?php
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Masiyas Electronic Shopping</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="jss/jsquery-1.3.1.min.js"></script>




  
  <style>
a{
color:white;
text-decoration:none;
} 
</style>


 <script type="text/javascript">


    function check()
  {
   if(document.getElementById("old").value =="")
   {
    alert('Please Enter Old Password !!'); 
    document.getElementById("old").focus();
    return false;
   }
   if(document.getElementById("new").value =="")
   {
    alert('Please Enter NewPassword !!'); 
    document.getElementById("new").focus();
    return false;
   }
   if(document.getElementById("confi").value =="")
   {
     alert('Please Enter Confirm New password!!'); 
    document.getElementById("  confi").focus();
    return false;
   }
   }
 function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(r)
   {
    return false;
   }
   else
   {
   alert(window.location='logout.php');
   }
  }
    </script>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 >
<?php 
echo '<p align=right style="margin-right:3%;">'.'<img src="images1/User3.png" width=50px height=25px/>'."&nbsp;".'<font color=black>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="logout.php" onClick="isConfirmloggg();">logout</a>'.'<a href="http://www.facebook.com" target=_blank ><img src="images/facebook.png">&nbsp;</a>'.
'<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png">&nbsp;'.'<a href="http://www.google.com" target="_blank"><img src="images/google.png">&nbsp;'.'</font>';

?>


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
					<li><a href="order.php" title="">Home</a></li>
					<li><a href="#" title="">Computers</a>
					<ul>
					<li><a href="la.php" title="">Laptop</a></li>
					<li><a href="desk.php" title="">Desktop</a></li>
					
					</li></ul>
					
					<li><a href="#" title="">Refrigerator</a>
				<ul>
					<li><a href="samRefo.php" title="">Samsung</a></li>
					<li><a href="lcdRefo.php" title="">LG</a></li>
					
					</li></ul>
					<li><a href="#" title="">TV</a>
					<ul>
					<li><a href="sonyTvo.php" title="">Sony</a></li>
					<li><a href="lcdTvo.php" title="">LG</a></li>
					
					</li></ul>
					
					
					<li><a href="#" title="">Mobile</a>
					<ul>
					<li><a href="nokiaMobo.php" title="">Nokia</a></li>
					<li><a href="samsungMobo.php" title="">Samsung</a></li>
					<li><a href="appleMobo.php" title="">Apple</a></li>
					</li></ul>
					<li><a href="stoveo.php">Stove</a></li>
					<li><a href="laundryo.php">Laundry</a>
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

	
	<td  valign="top" height="600px" width="200px"   id="table2" style="background:url('images1/wrapper-bg1.png');" > 

<table id="menu-bar1" style="border:1px solid white;" height=100px>
<tr><td style="font-size:20px;color:black;background:tan;">AccountSetting</td></tr>
<tr><td><a href="changepassword.php"><img src="images1/widget-arrow.png" width="10" />Change Password</a><br>
	<a href="profile.php"><img src="images1/widget-arrow.png" width="10" />Profile Details</a>
	<br>
	<a href="feedback.php"><img src="images1/widget-arrow.png" width="10" />Feedback</a></td></tr></table>
	

</td>
		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;" align=left>	
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
<script type='text/javascript'>
function formValidation(){
//assign the fields
        
	var old = document.getElementById('old');
	var neww = document.getElementById('neww');
	var confi = document.getElementById('confi');

if(lengthRestriction(old, 8, 30,"for your oldpassword")){
if(lengthRestriction(neww, 8, 30,"for your newpassword")){
if(lengthRestriction(confi, 8, 30,"for your Confirmpassword")){
	return true;
	}}
	}
	
	
	

return false;
		
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter Above " +min+" characters" +helperMsg);
		elem.focus();
		return false;
	}
}


	</script>
<form  method="post" action='changepassword.php' onsubmit='returnn formValidation()'>
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:15px 25px 10px black;" width="500" height="400px">
<tr><td colspan=3 align=center><font color=black> Change password 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Old Password:</td><td><input type="password" name="password" id='old' pattern="\w{8,50}"required x-moz-errormessage=" Please Enter the OldPassword above 8 character" title="Please Enter the OldPassword above 8 character"    placeholder='OldPassword'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>New Password
	</td><td><input type="password" name="pass" id='new' required x-moz-errormessage="Please Enter the NewPassword above 8 character" title=" Please Enter the NewPassword above 8 character" pattern="\w{8,50}" placeholder='NewPassword'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Confirm New password</td><td><input type="password" name="rpass" id='confi' pattern="\w{8,50}" required x-moz-errormessage="Please Enter the ConfrimPassword above 8 character" title="Enter the ConfrimPassword above 8 character" placeholder='ConfrimPassword'></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="update" class="button_example" value="update" Onclick="return check1(this.form);"/>
<input type='reset' class="button_example" value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['update']))
{
$user_id=$_SESSION['mail'];
$password = $_POST['password'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];

$query="select * from user where password='{$password}' and email='{$user_id}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
if($pass==$rpass){
$query="update user set password='{$pass}',	re_typepassword ='{$rpass}'  where email='{$user_id}' ";
$result=mysql_query($query);
}
else{
echo"<p  class='wrong'> New Password AND Confirm Password Not Match!</p>";
}
if(!$result)
{
die("Query update is failed" .mysql_error());
}
else
{

echo"<p  class='success'> Update password is succesfull! </p>";
 echo'<meta content="5;changepassword.php" http-equiv="refresh" />';

}
}
else
{

echo"<p  class='wrong'> Wrong Old Password!</p>";
 echo'<meta content="5;changepassword.php" http-equiv="refresh" />';

}
}
?>

</table>
	

</div>
</div>

</td>

</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>
