<?php
	include("../includes/db.php");

  
session_start();	
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
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>

<html >
<head>
<title>Online cinema ticket booking system</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body bgcolor="black">
	<div>	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td>
	<img src="staff.php" alt="" width=910 height=150>
		<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';
echo'<br>';
echo'<p align=left>'.'<font color=white size=15px ></font>';
?>	
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
	<li class="item first" id="eight"><a href="product.php" class="main current"><span class="outer"><span class="inner settings">veiw movie</span></span></a></li> 
		<li class="item first" id="eight"><a href="addproduct.php" class="main current"><span class="outer"><span class="inner settings">addmovie</span></span></a></li> 
			<li class="item first" id="eight"><a href="changepass.php" class="main current"><span class="outer"><span class="inner settings">change password</span></span></a></li>
	
		       
    <li class="item first" id="one"><a href="staffpro.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="four"><a href="vieworders.php" class="main"><span class="outer"><span class="inner media_library">veiworders</span></span></a></li>  
		
	</ul>
</div>
</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<!--<img src="image11/engineer.jpg" alt="" width=150 height=300/>-->
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">

  
<table borde1=0 width="500" style="borde1-bottom:1px solid #f6b45f;margin-top:1%;">

<tr bgcolor="">

<td borde1=0 valign="top" height="450"  width="80"> 
<form action="searchmovie.php" method="POST">
<legend><b>SEARCH movie</b></legend>film ID:  <select name="selptid" id="selptid" style="width:200px;" >
                        <option>-Select one-</option>
                        <?php
						//$user=$_POST['selptid'];
						$query="SELECT film_id FROM movie where film_id=film_id ";
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
$query="SELECT * FROM movie where film_id='{$ptid}'";

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



}
?>
<table  borde1='0' valign='top' id='updt1'>
<tr>
<tr>
<form action='searchmovie.php' method='POST'>
<td> film_image:</td>
 
                     <td colspan="4"><img id="imgCaptcha" width="50" height="50"src="img/<?php echo "$r5" ?>" /></td>
                  </tr>
				  <br/>
				 
<tr><td>film_Id:</td><td><input type='text'name='fname' value="<?php echo "$r0"?>" READONLY></td></tr><br/>
<tr><td>name:</td><td><input type='text'name='name' value="<?php echo "$r1"?>" READONLY></td></tr><br/>
<tr><td>birr:</td><td><input type='text'name='lname' value="<?php echo "$r2"?>" READONLY></td></tr><br/>
<tr><td>date:</td><td><input type='text'name='gender'value="<?php echo "$r4"?>" READONLY></td></tr><br/>
<tr>
<tr><td colspan='2' align='center'><a href="delmovie.php">delate</a></td></tr> 
</table>

<?php
}
	  
else{
echo"<h4><font color=red>This UserName is not exist</h4></font>";

}}
?>
</table>
</td>

<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/58.jpg" alt="" width=150 height=300/>
<img src="image11/02.jpg" alt="" width=150 height=300/>
<img src="image11/01.jpg" alt="" width=150 height=300/>
<img src="image11/57.jpg" alt="" width=150 height=300/>
<img src="image11/59.jpg" alt="" width=150 height=300/>
<img src="image11/62.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>
		</tr>
		<tr>
		<td>
		</td>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITY.</p>
		</td>
		</tr>
		</table>
		</body>
		</html>
