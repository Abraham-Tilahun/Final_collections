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
alert(window.location='/111/login.php');
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
<td>
 <div id="topnav" >

			<div class="shell">
				<ul>				<li><a href="veiwreg.php" title="">veiwregistration</a></li>
				<li><a href="veiwseat.php" title="">veiw seat</a></li>
				<li><a href="changepass.php" title="">changepass</a></li>
					<li><a href="bank.php" title="">creataccount</a></li>
					<li><a href="order1.php" title="">order</a></li>
					<li><a href="semsungRef.php" title="">print</a></li>
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
<h2><big style="color:geern"><font size=4>Additional Information</font></big></h2><br>
		
 	<a href="/111/contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="/111/aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="center" id="idd" style=" background-color:white;">	

&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp print form
<div align="center">
<form  method='POST' action='print.php'>
<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:15px 25px 10px black;" width="450" height="300px">
<tr><td align=center>
<legend><b>SEARCH SEATNO</b></legend>seatNo:  <select name="selptid" id="selptid" style="width:200px;" >
                        <option>-Select your seat number</option>
                        <?php
						$user=$_POST['selptid'];
						$query="SELECT seatNo FROM orders where seatNo=seatNo ";
						$result_set=mysql_query($query,$conn);
						if(!$result_set){
                         die("query is failed".mysql_error());
                         }
						 if(mysql_num_rows($result_set)>0)
                        {
                        while($row=mysql_fetch_array($result_set))
                         {
                         ?>
                         <option><?php echo $row[0] ;?></option>
                         <?php
                        }

                        }
                        else
                        {
                         echo "Try again";
                          }
                         ?>
                        </select><br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='submit' value='Search' name='search'Onclick="return check(this.form);"/>

</form>
<hr color=#AA3AAAA>
<br><br><br>
<?php
if(isset($_POST['search']))
{
$ptid=$_POST['selptid'];
$query="SELECT * FROM orders where seatNo='{$ptid}'";

$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not added".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];
$r6=$row[6];




}
?>
<table  borde1='0' valign='top' id='updt1'>
<tr>
<td>
 <td></td>Tel. (+251)58220 4347 , (251) 918 00 1221 <br/>
 <td></td>email: <a href="http://hibrethotelcinema@gmail.com"> hibrethotelcinema@gmail.com
</td>    
</tr>
<tr>         
<td></td><td colspan="4"><img id="imgCaptcha" width="100" height="50"src="image11/01.jpg" /></td>
                  </tr>
				  <br/>
				 
<tr><td>seatNo:</td><td><input type='text'name='seatNo' value="<?php echo "$r0"?>" READONLY></td></tr><br/>
<tr><td>name:</td><td><input type='text'name='name' value="<?php echo "$r2"?>" READONLY></td></tr><br/>
<tr><td>film_name:</td><td><input type='text'name='finame' value="<?php echo "$r3"?>" READONLY></td></tr><br/>
<tr><td>price:</td><td><input type='text'name='price'value="<?php echo "$r4"?>" READONLY></td></tr><br/>
<tr><td>date:</td><td><input type='text'name='date'value="<?php echo "$r6"?>" READONLY></td></tr><br/>
</table>

<?php
}
	  
else{
echo"<h4><font color=red>This UserName is not exist</h4></font>";

}}
?>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
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
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
</div>
</table>
</td> 
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top>Advertise</h3></p><a href="http://">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('images/Habesha1.gif');height:400;">
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
