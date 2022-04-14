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
<title>Cashier Page</title>
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
<li><a href="manager.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Home<font color="red"></a></li>
<li><a href="#">Manage Employee<font color="red"></a>
 <ul>
	     <li><a href="regemployee.php">&nbsp;Register Employee</font></a></li>
		<li><a href="viewemployee.php">&nbsp;View Employee</font></a></li>
		<li><a href="deleteemployee.php">&nbsp;Delete Employee</font></a></li>
		

	  </ul></li>

<li><a href="#">
Acount Setting<font color="red"></a>
 <ul>
          <li><a href="createacount.php">&nbsp;create Acount</font></a></li>
	     <li><a href="viewacount.php">&nbsp;View Acount</font></a></li>
		<li><a href="deleteacount.php">&nbsp;Delete Acount</font></a></li>
		
		

	  </ul></li>

<li><a href="#">View<font color="red"></a>
 <ul>
	     <li><a href="viewsolddrug.php">&nbsp;Audit Money</a></li>
		<li><a href="viewcustinfo.php">&nbsp;Customer History</a></li>
		<li><a href="viewdrug1.php">&nbsp;Check availabe drug</a></li>
		<li><a href="expired1.php">&nbsp;Check expired date</a></li>


		  </ul></li>
		   <li><a href="changepass2.php">&nbsp;Change Password</font></a></li>	 
<li><a href="logout.php" id="logout"><b>Logout</a></li>
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
<form action="viewsolddrug.php" method="post" name="search" onSubmit="return checkvalidation()">
<fieldset><legend align="center"> <font face='monotype corsiva' size='5px' color="red">View sold drug Form</font></legend>&nbsp;<br><br>
<font align="center" color="black">

<b><font size="3px">Enter Date:&nbsp;&nbsp;&nbsp;<input type="date" name="ddate" id="ddate"  placeholder="..Please select date.." size="20%">&nbsp;&nbsp;

<input type="submit" value="search" name="search">&nbsp;&nbsp;<input type="reset" value="Cancel" name="cancel">
</fieldset>
</form>


<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
if(isset($_POST['search']))
  {
   $ddate=$_POST['ddate'];
  
$result = mysql_query("SELECT * FROM solddrug where date='{$ddate}' AND status = 'true' AND audited='No'");

if(mysql_num_rows($result)>0)
{
echo "<table id='vtable' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr>";
echo"<td bgcolor='#FFFFCC'><font color='red'>customer&nbsp;-&nbsp;id</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Name-&nbsp;of-&nbsp;customer</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Drug-&nbsp;Name</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Quantity</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Unit-&nbsp;Price</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Date-&nbsp;of-&nbsp;sold</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Sum</font></td>";

echo"</tr>";
$sum=0;
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  $bach=$row['bachnumber'];
  $bach=mysql_query("select * from drug where bachnumber='{$bach}'");
  $col=mysql_fetch_array($bach);

  $cust=$row['customerid'];
  $cid=mysql_query("select * from customer where customerid='{$cust}'");
  $r=mysql_fetch_array($cid);
 $cust=$r['customerid'];
  $ab=$r['firstname'];
$mn=$r['midlename'];
$ln=$r['lastname'];
echo "<td>";
echo $cust;
echo "</td>";
echo "<td>";
echo $ab; 
echo "&nbsp;&nbsp;&nbsp;";
echo $mn ;
echo "&nbsp;&nbsp;&nbsp;";
echo $ln ;
echo "</td>";
echo "<td>" . $col['drugname'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
   echo "<td>" . $col['unitprice'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
	echo"<td>" .$row['quantity'] * $col['unitprice']. "</td>";
	$sum = $sum + ($row['quantity'] * $col['unitprice']);

	 $up=mysql_query("UPDATE solddrug SET date='ddate' WHERE status = 'true' ");
 
	
 echo "</tr>";
  }

echo "</table>";echo'<br>';
echo'<br>';
echo"<font color='black'>Total Money</font>";
echo"</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' value= $sum readonly size=6>";
}

else{
   echo '<center>';
  echo '<font face="monotype corsiva" size="5"color="red">No information found !!</font>'; 
  
   echo '</center>';

}
  }
mysql_close($conn);
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

<table align="center"><tr><td color=#047B5A><font face="Times New Roman" color="blueblack" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Red Cross Pharmacy Sys 2016. Copyright All Rights Reserved
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>
