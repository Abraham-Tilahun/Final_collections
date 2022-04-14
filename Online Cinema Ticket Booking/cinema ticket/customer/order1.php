<?php   
session_start();
include("db.php");	
 if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
 }
 else{
 
?>

<script>
alert('please login');
alert(window.location='/cinema ticket/login.php');
</script>
<?php
}

?>
<?php
$transum=$_SESSION['SESS_MEMBER_ID'];
?>
 
  <?php

$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'");
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>
<html>
<head>
	<title>Online ticket booking system</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   
</head>
<body bgcolor="red">

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr bg color="green">
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.youtube.com" target="_blank"><img src="images/youtube.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>

</td>
</tr>
<tr>
<td >
<img src="customer.PNG" width=900 height=200>
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';

?>

</td>
</tr>
<tr bgcolor="burlywood">
<td >
 <div id="topnav" >

			<div class="shell">
				<ul> <li ><a href="veiwreg.php"><span class="outer"><span class="inner settings">veiwregestration</span></span></a></li>
				<li><a href="changepass.php" title="">change password</a></li>
					<li><a href="customerprofile.php" title="">update profile</a></li>
					<li><a href="\cinema ticket\reservation\seatreservation\index.php">Reservation</a></li>
					<li><a href="/cinema ticket/cinemapayment/order.php" title="">order</a></li>
				<li><a href="/cinema ticket/reservation/seatreservation/admin/dashboard1.php" title="">veiw seat</a></li>

				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		
</div>
</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 
<h2><big style="color:geern" ><font size=3>Additional Information</font></big></h2><br>
		
 	<a href="/111/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="/111/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
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
<form  method='POST' action='order1.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td colspan=3 align=center><font color=black> order form
</td></tr>
<tr><td>
<label><font color=red> * </font> <font color=black>*seatno

</label>
</td><td>
<select name="seatNo" id="seatno">
<option selected=selected></option>
<option >01</option>
<option >02</option>
			<option >03</option>
			<option >04</option>
			<option >05</option>
				<option >06</option>
				<option>07</option>
				<option >08</option>
				<option >09</option>
				<option >10</option>
				<option >11</option>
				<option >12</option>
				<option >13</option>
				<option >14</option>
				<option >15</option>
				<option >16</option>
				<option >17</option>
				<option >18</option>
				<option >19</option>
				<option >20</option>
				<option >21</option>
				<option>22</option>
				<option >23</option>
				<option >24</option>
				<option >25</option>
				<option >26</option>
				<option >27</option>
				<option >28</option>
				<option >29</option>
				<option >30</option>
				<option >31</option>
				<option >32</option>
				<option >33</option>
				<option >34</option>
				<option >35</option>
				<option >36</option>
				<option>37</option>
				<option >38</option>
				<option >39</option>
				<option >40</option>
				<option >41</option>
				<option >42</option>
				<option >43</option>
				<option >44</option>
				<option >55</option>
				<option >46</option>
				<option >47</option>
				<option >48</option>
				<option >49</option>
				<option >50</option>
			
				
				</select>
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>userid:</td><td><input type="text"  name="id" required="required" value="" size='20%' id="txt_fname" placeholder='userid'></input></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text"  name="name" required="required" value="" size='20%' id="txt_fname" placeholder='name'onkeypress="return letter_validate(event);"></input></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>film_name:</td><td><input type="text" name="finame" value="" size='20%' required="required" id="txt_mo" placeholder='film_name' onKeyPress="return letter_validate(event);"/></td></tr>
<tr><td><font color=red> * </font><font color=black>price:</td><td><input type="text" name="price"  size='20%' required="required" id="price" placeholder="Amount Birr" onKeyPress="return number_validate(event);"/></td></tr>
<tr><td>
<font color=red> * </font> <font color=black>Account number:</td><td><input type="text" name="account" value="" size='20%' required="required" id="txt_mo" placeholder='account number' onKeyPress="return number_validate(event);"/></td></tr>
<tr><td>
<label><font color=red> * </font> <font color=black>*time

</label>
</td><td>
<select name="time" id="time">
<option selected=selected></option>
<option >5:00 am</option>
<option >8:00 am</option>
<option >10:00 am</option>
<option >12:00 am</option>
<option >2:00 pm</option>

				</select>
</td></tr>

<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset'class="button_example"  value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain'])){
$seat=$_POST['seatNo'];
$id=$_POST['id'];
$fname=$_POST['name'];
$name=$_POST['finame'];
$price=$_POST['price'];
$aaa=$_POST['account'];
$aa=$_POST['time'];
include("connection.php");
$a=mysql_query("select * from bank where accountnumber='$aaa'");
while($z=mysql_fetch_array($a)){
$dbaccount=$z['accountnumber'];
$dbamount=$z['amountbirr'];
}
if($price>$dbamount){
echo"<script>alert('insufficient ammount');</script>";
}
else{
$x=$dbamount-$price;
$b=mysql_query("update bank set amountbirr='$x' where accountnumber='$aaa'");
$num="123";
$aa=mysql_query("select * from bank where accountnumber='$num'");
while($zx=mysql_fetch_array($aa)){
$dbaccountv=$zx['accountnumber'];
$dbamountv=$zx['amountbirr'];
}
$xc=$dbamountv+$price;
$bh=mysql_query("update bank set amountbirr='$xc' where accountnumber='$num'");
mysql_close($conn);
$query="INSERT INTO orders(seatNo,userid,name,finame,price,accountnumber,time,date)";
$query.="values ('{$seat}','{$id}','{$fname}','{$name}','{$price}','{$aaa}','{$aa}',Now())";
$result=mysql_query($query);
echo"<script>alert('successfull');</script>";
}
}
?>
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top>Advertise</h3></p><a href="http://">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/58.jpg" alt="" width=150 height=300/>
<img src="image11/02.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/57.jpg" alt="" width=150 height=300/>
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
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITY.</p>
</td>
</tr>

</table>
</body>
</html>

  
  







