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
<title>PHARMACIST Home</title>
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
 
 <li><a href="storecoordinator.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Home<font color="red"></a></li>
 <li><a href="#">Manage Drug<font color="red"></a>
 <ul>
  <li><a href="registerdrug.php">&nbsp;Register Drug</font></a></li>
	     <li><a href="viewdrug.php">&nbsp;View Drug</font></a></li>
         <li><a href="adddrug.php">&nbsp;Add Drug</font></a></li>
		  <li><a href="updateprice.php">&nbsp;Update Price</font></a></li>
		  </ul></li>
 <li><a href="expired.php">Check-Expired-Date</a></li>
	<li><a href="changepass1.php">Change Password</a></li>
	 <li><a href="logout.php" id="logout"><b>Logout</a></li>
</div>
</td>
</tr>


<tr>
<td  height=500px width=150px  valign=top border="0" bgcolor="blueblack" >
<table border="0"  width="200" height="400" class="menu-bar" align="center">
<tr >
<td width="150" height="150" bgcolor="blueblack" ><font color="black" face="monotype corsiva" size="3">
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
<table border="0px" bgcolor="white" width='420' height="300" align="center">
<tr><th bgcolor=#FFFFFF height="30px" width='80' colspan='2' align="center"><b><font face="monotype corsiva" size="5" color="red">Expired Drug List</font></b></th></tr>
<td border=1 align="center" valign="top" height="300"  width="80"style="border-bottom:1px solid #f6b45f;margin-top:0.5%;">

<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
$result ="SELECT * FROM drug where  drug.expirydate <= DATE(now())";
$res=mysql_query($result);
if(mysql_num_rows($res)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr>";
echo"<th height='40'><font color='red'>Drug-&nbsp;Name</font></th>";
echo"<th height='40'><font color='red'>Company-&nbsp;Name</font></th>";
echo"<th height='40'><font color='red'>Bach-&nbsp;Number</font></th>";
echo"<th height='40'><font color='red'>Quantity</font></th>";
echo"<th height='40'><font color='red'>Unit-&nbsp;Price</font></th>"; 
echo"<th height='40'><font color='red'>Shelf-&nbsp;Number</font></th>";
echo"<th height='40'><font color='red'>Expiry-&nbsp;Date</font></th>";
echo"<th height='40'><font color='black'>Delete</font></th>";

echo"</tr>";

while($row = mysql_fetch_array($res))
  {
  echo "<tr>";
 
echo "<td>" . $row['drugname'] . "</td>";
echo "<td>" . $row['companyname'] . "</td>";
echo "<td>" . $row['bachnumber'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>"; 
echo "<td>" . $row['unitprice'] . "</td>";
echo "<td>" . $row['shelfnumber'] . "</td>";
echo"<td>" . $row['expirydate'] . "</td>";
echo"<td>&nbsp;&nbsp;<a href=delete.php?id=".$row['bachnumber']."><font size='4px'><input type='submit' value='X' name='submit'></font></a></td>";
echo"</tr>";
  }
  
echo "</table>";
}
else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">expired drug not found !!</font>'; 
  
   echo '</center>';
   }
mysql_close($conn);
?>
</td>
</table>
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

<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="blueblack" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Red Cross Pharmacy Sys 2016. Copyright All Rights Reserved
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>