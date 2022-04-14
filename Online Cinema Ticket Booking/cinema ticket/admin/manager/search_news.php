<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head><?php
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

<html >
<head>
<title>Online cinema ticket booking system</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body bgcolor="black">
	<div>	
	<table  width="910"  align=center >
	
	<tr bgcolor="burlywood">
	<td >
		<img src="admin.php" alt="" width=910 height=150>
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';

?>
		
		
		
		</td>
		</tr>
		<tr>
		<td width=910px   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="eight"><a href="profileAdmin.php" class="main current"><span class="outer"><span class="inner settings">update profile</span></span></a></li>  
		<li class="item first" id="eight"><a href="delate.php" class="main current"><span class="outer"><span class="inner settings">delete news</span></span></a></li>  
		
<li class="item first" id="one"><a href="add_news.php" class="main current"><span class="outer"><span class="inner reports">add_news</span></span></a></li>        
				<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/reserver information.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li>  
	<li class="item first" id="one"><a href="changepass.php" class="main current"><span class="outer"><span class="inner newsletter">Change Password</span></span></a></li>
		<li class="item first" id="four"><a href="../../cinemapayment/admin/message.php" class="main"><span class="outer"><span class="inner media_library"> Message</span></span></a></li>

		<li class="item first" id="one"><a href="/cinema ticket/cinemapayment/admin/movie.php" class="main current"><span class="outer"><span class="inner newsletter">Add Movie</span></span></a></li>

	</ul>
</div>
</td>

</tr>
</table>
<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
<tr>
<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('image11/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<img src="image11/engineer.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
			</td>
			
<td valign="top" id="idd" style=" background-color:white;">	
<div align="center">

  
<table borde1=0 width="500" style="borde1-bottom:1px solid #f6b45f;margin-top:1%;">

<tr bgcolor="white">

<td borde1=0 valign="top" height="400"  width="70"> 
<form action="search_news.php" method="POST">
<legend><b>SEARCH NEWS</b></legend>NEWS ID:  <select name="selptid" id="selptid" style="width:200px;" >
                        <option>-Select NEWS ID-</option>
                        <?php
						//$user=$_POST['selptid'];
						$query="SELECT row_id FROM items where row_id=row_id ";
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
$query="SELECT * FROM items where row_id='{$ptid}'";

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




}
?>
<table  borde1='0' valign='top' id='updt1'>
<tr>
<tr>
<form action='search_news.php' method='POST'>
<td> New Image:</td>
 
                     <td colspan="4"><img id="imgCaptcha" width="50" height="50"src="img/<?php echo "$r4" ?>" /></td>
                  </tr>
				  <br/>
				 
<tr><td>Id:</td><td><input type='text'name='fname' value="<?php echo "$r0"?>" READONLY></td></tr><br/>
<tr><td>name:</td><td><input type='text'name='name' value="<?php echo "$r1"?>" READONLY></td></tr><br/>
<tr><td>type:</td><td><input type='text'name='lname' value="<?php echo "$r2"?>" READONLY></td></tr><br/>
<tr><td>price:</td><td><input type='text'name='gender'value="<?php echo "$r3"?>" READONLY></td></tr><br/>
<tr>
<tr><td colspan='2' align='center'><a href="delate.php">delate</a></td></tr> 
</table>
</td>

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
<marquee  direction=up align=middle height=500px scrollamount=3 style=""background:url('img/main/blue.jpg');height:400;">
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
		<td>
		</td>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7,copyright&copy;2009/2017, HibretHotelCinema.com &reg; All RIghts Reserved<br>
 DEBRE TABOR UNIVERSITYD.</p>
		</td>
		</tr>
		</table>
		</body>
		</html>




  
  







