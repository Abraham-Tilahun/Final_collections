<?php
	include("includes/db.php");	
?>
<html>
<head>

	<title>Online ticket booking system for hibret hotel</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  
</head>
<body bgcolor="black">

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="add_news.php" title="back">Back</a>
<a href="../../logout.php" title="Logout">logout</a>
<a href="http://www.facebook.com" target=_blank ></a>
<a href="http://www.twitter.com" target="_blank"></a>
<a href="http://www.youtube.com" target="_blank"></a>
<a href="http://www.google.com" target="_blank"></a></p>
</td>
</tr>
<tr>
<td ><img src="../../image/11.PNG" width=900 height=115></td>
&nbsp;</td>
</tr>
<tr>
<td > 
</td>
</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="100" width="180"  id="menu-bar" id="table2" > 
<h2><big ><font size=4> additional information</font></big></h2><br>

<br>
<br>
<br>
<br>
<br>
<br>
	</td>
</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">
<script type='text/javascript'>
function letter_validate(b)
 {
var value=(b.which)?
b.which:
b.keyCode
 return(value >31 && (value <48 || value > 57) || value==8);
}
function number_validate(e)
 {
var value=(e.which)?
e.which:
e.keyCode
 return!(value>=48 && (value <48 || value > 57));
 
}
	</script>
<form  method='POST' action='singup.php'>
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"></td></tr><tr>
<tr><td colspan=3 align=center><font color=black> staff Registration 
</td></tr>

<tr><td>
<font color=red> * </font> <font color=black>UserId :</td><td><input type="text"  name="uid"  placeholder='uid' onKeyPress="return number_validate(event);"></input></td></tr>
<tr>
<td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text"   name="fname" placeholder='Fname' onKeyPress="return letter_validate(event);"></input></td></tr>

<tr>
<td>
<font color=red> * </font><font color=black>Last Name :
	</td><td><input type="text" name="lname"  placeholder='Lname' onKeyPress="return letter_validate(event);" ></input></td></tr><br>
<tr>
<td>
<font color=red> * </font><font color=black>Gender :</td><td><select name='gender' >
<option selected="selected">-select-</option>
<option>Male</option>
<option>Fmale</option>
</select></td></tr>

<tr><td><font color=red> * </font><font color=black>E-mail :</td><td><input type="text" name="mail"    placeholder='E-Mail'/></td></tr>

<tr><td><font color=red> * </font><font color=black>Password :</td><td><input type="password" name="pass"  value="" size='20%' id="txt_pass" placeholder='Password'></input></td></tr>

<tr><td><font color=red> * </font><font color=black>Re-Enter Password :</td><td><input type="password" name="rpass"   placeholder='RE-EnterPassword'></input></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Mobile No :</td><td><input type="text"   name="mobile"  placeholder='MobileNo'onkeypress="return number_validate(event);"/></td></tr>
<tr><td><font color=red> * </font><font color=black>Country:</td><td><input type="text" name="cou" value='Ethiopia' onKeyPress="return letter_validate(event);" /></td></tr>

<tr><td><font color=red> * </font><font color=black>City</td><td><input type="text"   name="city"  id="city" size='20%'   placeholder='City' onKeyPress="return letter_validate(event);"/></td></tr>


<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset' class="button_example" value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain']) )
{
$uid=$_POST['uid'];
$fname=$_POST['fname'];
$date=$_POST['lname'];
$month=$_POST['gender'];
$year=$_POST['email'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$mo=$_POST['mobile'];
$cou=$_POST['cou'];
$cit=$_POST['city'];
$role=$_POST['role'];
if($pass==$rpass){
$query="INSERT INTO user(IDNO,Name ,Lname,gender,email,password,re_typepassword,Mobile,country,city,status)";
$query.="VALUES ('{$uid}','{$fname}','{$date}','{$month}','{$year}','{$pass}','{$rpass}','{$mo}','{$cou}','{$cit}','{$role}');";
$result=mysql_query($query);
if(!$result){
echo"<p  class='wrong'> This E-Mail Is Ordey Existing!!!</p>";
}
else{
echo"<p  class='success'> congratulations </p>";
echo'<meta content="5;login.php" http-equiv="refresh"/>';
}
}
else{
echo"<p  class='wrong'> Password Not Match</p>";  
 echo'<meta content="5;singup.php" http-equiv="refresh" />';
}
mysql_close($conn);
}
?>
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('images/Habesha1.gif');height:400;">
<img src="image11/58.jpg" alt="" width=150 height=300/>
<img src="image11/02.jpg" alt="" width=150 height=300/><img src="image11/57.jpg" alt="" width=150 height=300/>
<img src="image11/59.jpg" alt="" width=150 height=300/>
<img src="image11/62.jpg"  alt="" width=150 height=300/>
</marquee>
</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px >
<p align=center>Group 7 &copy; 2009/2017 COPY RIGHT RESERVED.DEBRE TABOR UNIVERSITY </p>
</td>
</tr>

</table>
</body>
</html>
