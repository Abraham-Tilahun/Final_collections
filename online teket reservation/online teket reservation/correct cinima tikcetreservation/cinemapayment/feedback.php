<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head><?php
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
	<title>Online ticket booking system for Hibret Hotel cinema</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	<script type="text/javascript" src="jss/jsquery-1.3.1.min.js"></script>
<script type="text/javascript" src="jss/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="jss/jquery-ui-1.7.1.custom.min.js"></script>

<script language="javascript">

  function charcount()
  {
   document.getElementById('static').innerHTML = "Characters Remaining:  <span  id='charsLeft1'>   200 </span>";
     
  }
 // to display sub category function
  
 </script> 	 
<script type="text/javascript" src="js/count.js"   charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.js" charset="utf-8"></script> 

  
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
   alert(window.location='cinema ticket/logout.php');
   }
  }
    </script>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 >
<?php 
echo '<p align=right style="margin-right:3%;">'.'<img src="images1/User3.png" width=50px height=25px/>'."&nbsp;".'<font color=black>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();">logout</a>'.'<a href="http://www.facebook.com" target=_blank ><img src="images/facebook.png">&nbsp;</a>'.
'<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png">&nbsp;'.'<a href="http://www.google.com" target="_blank"><img src="images/google.png">&nbsp;'.'</font>';

?>


</tr><!--
<tr>
<td id="td1" width=920px height=113px >--><tr>
<td >
<img src="image/11.PNG" width=900 height=200>
<span class="style5">HIBRET HOTEL ,DEBRE TABOR TOWN,AMHARA REGION,ETHIOPIA</span></td>


</td>
</tr>

</td>
</tr>

<tr>
<td >
			<div id="topnav" >

			<div class="shell">
				<ul>
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
           <img src="images1/51.jpg" alt="" />
            <img src="images1/52.jpg" alt="" />
            <img src="images1/53.jpg" alt="" />
            <img src="images1/54.jpg" alt="" />
			<img src="images1/ayrak.jpg" alt="" />
			<img src="images1/56.jpg" alt="" />
       
        </div>
        <!--Custom navigation buttons on both sides
        <div class="group1-Wrapper">
            <a onClick="imageSlider.previous()" class="group1-Prev"></a>
            <a onClick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onClick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onClick="switchAutoAdvance()"></a>
            <a onClick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
	</td>
	</tr>-->
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="600px" width="200px"   id="table2" style="background:url('images1/wrapper-bg1.png');" > 

<table id="menu-bar1" style="border:1px solid white;" height=100px>
	<a href="feedback.php"><img src="images1/widget-arrow.png" width="10" />Feedback</a></td></tr></table>
	

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
	var txt_mail = document.getElementById('txt_mail');
	if(isAlphabet(txt_fname, "please enter Your Fname in letters only")){
if(lengthRestriction(txt_fname, 3, 30,"for your Fname")){
	if(emailValidator(txt_mail,"check your e-mail format")){
	
	return true;
	}
	}
	}
return false;
		
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


	</script>
<form  method="post" action='feedback.php' onsubmit='returnn formValidation()'>
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="450px">
<tr><td colspan=3 align=right><font color=black></td></tr>
<tr><td colspan=3 align=center><font color=black> Feedback
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Name :</td><td><input type="text" name="fname" pattern="\D{2,50}"required x-moz-errormessage="Please Enter the you Name above 2 character" title="Please Enter the you Name above 2 character"   value="" size='20%' id="txt_fname" placeholder='Name'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>E-mail :</td><td><input type="text" required x-moz-errormessage=" Please Enter your E-Mail" title="Please Enter your E-Mail"   name="mail" value="" size='20%' id="txt_mail" placeholder='E-Mail'/></td></tr>
<tr><td><font color=red> * </font><font color=black>Subject :</td><td><input type="text"  required x-moz-errormessage=" Please Enter the subject" title="Please Enter the subject"   name="pass" value="" size='20%' id="txt_pass" placeholder='Subject'></input></td></tr>
<tr>
 <td><font color="red">*</font><font color=black>Message:
 <p align="right" class="example"><font color=black>(Maximum 200 characters) </p></td>
<td colspan="4"><textarea name="rpass" id="tafeatures" wrap="physical" cols="45" rows="5"  required x-moz-errormessage=" Please Write the message" title="Please Write the message"     placeholder='Please write the message...'></textarea><br>
  <font color=black>Characters Remaining: <span id="charsLeft1">200</span>
                    </tr>


<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset' class="button_example" value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain']) )
{

$fname=$_POST['fname'];
$mail=$_POST['mail'];
$subj=$_POST['pass'];
$con=$_POST['rpass'];

$query="INSERT INTO message(name ,email,subject,content)";
$query.="VALUES ('{$fname}','{$mail}','{$subj}','{$con}');";
$result=mysql_query($query);
if(!$result){
echo"<p  class='wrong'> Try Again Please!!!</p>";
}
else{
echo"<p  class='success'> congratulations </p>";
 echo'<meta content="5;feedback.php" http-equiv="refresh" />';
}

mysql_close($conn);
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
<font color=white size=4px ><p align=center>ROUP 7 &copy;2009/2017 HibretHotelCinema ,All RIghts Reserved.</p>
</td>
</tr>

</table>
</body>
</html>
