<?php
	include("includes/db.php");

	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	
//Sanitize the POST values
	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 3) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}
$confirmation = createRandomPassword();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Online ticket booking system for Hibret Hotel</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    

  <style>
a{
color:black;
text-decoration:none;
} 
</style>
<script type="text/javascript">
if (document.images) {     // Preloaded images

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
<body bgcolor="black">

<table  width="800" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<span><a href="singup.php" title="Register">Register</a>
<a href="\cinema ticket\index.php" title="Login">home</a>
<a href="http://www.facebook.com" target=_blank ></a>
<a href="http://www.twitter.com" target="_blank"></a>
<a href="http://www.google.com" target="_blank"></a></p>
</td>
</tr>
<tr>
<td >
<img src="image/11.PNG" width=900 height=100>
<span class="style5">HIBRET HOTEL DEBRE TABOR TOWN,ETHIOPIA</span></td>


</td>
</tr>

<tr>
<td align="center" >
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="500" width="180"  id="menu-bar" id="table2" > 
<h2><big style="color:geern" >forinformation</big></h2><br><br>
		
 <a href="aboutus.php"><img src="images1/widget-arrow.png" width="15" />about us</a>
	 <a href="contact.php"><img src="images1/widget-arrow.png" width="15" />contact</a>
	 </td>

		
		</div>
	</td>
<td valign="top" id="tad" style=" background-color:white;">	
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
<!-------------- -->
<table border=0 width="500" >
<tr>
<td>
<script type='text/javascript'>
function formValidation(){
//assign the fields
     
	var txt_username = document.getElementById('txt_username');
	
	if(emailValidator(txt_username,"check your e-mail format")){
	
	return true;
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


	</script>
<form action="login.php" method="post" onsubmit='return formValidation()'>


<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:8px 15px 8px black;" width="500px" height="300px" align="center">
<tr><td colspan=2 align=right><font color=black><p style="margin-right:3%;"></td></tr><tr>
<tr>
<td colspan=2 align=center><font color=black>Members Login </td>
</tr>
<tr>
<td><font color=red> * </font><font color=black>Email</td><td><input type="text" name="mail" required x-moz-errormessage="" title="Enter the Email" value="" size="20%" id="txt_username" placeholder="Email"></input></td></tr>
<tr>
<td><font color=red> * </font><font color=black>Password</td><td><input type="password" name="pass"  required x-moz-errormessage="Please enter the Password" title="Enter the Password" value="" size="20%" id="txt_password" placeholder="Password"></input></td></tr>
<tr>
<td colspan=2 align=center><input type='submit' class="button_example" value='login' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset' class="button_example" value='Reset'/></td></tr>
<tr>
<td colspan=2 align=center><a href="forget.php"><font color=blue>Forget Password?</a></td></tr>

</form>
<!--Php Script-->  
	<?php
	if(isset($_POST['submitMain']))
 {
   $user =$_POST['mail'];
   $_SESSION['mail']=$_POST['mail'];
   $password=$_POST['pass'];
   
   
   $query = "SELECT * FROM user WHERE 	email= '{$user}' AND password= '{$password}';";
	$result = mysql_query($query); 
		// TO check that at least one row was returned 
		$rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
		
		 if($row['status']==1){ 
	
		$_SESSION['SESS_MEMBER_ID']=$confirmation;
		
        echo "<script>window.location='../cinema ticket/admin/product.php';</script>";
			} 
			else if($row['status']==2){ 
		$_SESSION['SESS_MEMBER_ID']=$confirmation;
		
        echo "<script>window.location='../cinema ticket/admin/manager/add_news.php';</script>";
			}
		
						else if($row['status']==4){ 
		$_SESSION['SESS_MEMBER_ID']=$_POST['mail'];
		echo "<script>window.location='/cinema ticket/customer/veiwseat.php';</script>";
          
			}	


		else {
		
		echo"<p  class='wrong'>User Name & Password Not Match !!</p>"; 
		 echo'<meta content="5;login.php" http-equiv="refresh" />';
		}
}mysql_close($conn);
?>
</fieldset>
</table>
</table>




</div>
</div>

</td>
<<td  valign="top" height="700" width="150"  id="td2" > 
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/50.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>Group 7&copy; 2009/2017HIBRET HOTEL CINEMA &reg;RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>
