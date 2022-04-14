

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
	<title>Online ticket booking system for Hibret Hotel cinema</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	


	
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" charset="utf-8">
<script language="javascript" src="datetimepicker.js"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
  
  
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>
 
<style>
a{
color:#fff;
text-decoration:none;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["total"].value;
if (x==null || x=="")
  {
  alert("Take Your Order first");
  return false;
  }
var con = confirm("Are You Sure? you want to order this movie?");
if (con ==false)
{
return false;
}
  if(document.getElementById("txtfrom1").value =="")
   {
    alert('Please Enter The Order Date !!'); 
    document.getElementById("txtfrom1").focus();
    return false;
   }
     if(document.getElementById("txt").value =='--SelectMethod--')
   {
    alert('Please Select the Delivery Method !!'); 
    document.getElementById("txt").focus();
    return false;
   }
   if(document.getElementById("pay").value =='---select---')
   {
    alert('Please Select the Payment Method !!'); 
    document.getElementById("pay").focus();
    return false;
   }
}
</script>
<script type="text/javascript">
function validateForm1()
{


if (document.form1.checkbox.checked == false)
{
alert ('pls. agree the term and condition of this company');
return false;
}
else
{
return true;
}
}
function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='order.php');
   }
   else
   {
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
   alert(window.location='/cinema ticket/logout.php');
   }
  }
</script>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 >
<a href="../customer/veiwseat.php" title="">Back</a>
<?php 

echo '<p align=right style="margin-right:3%;">'.'<img src="images1/User3.png" width=50px height=25px/>'."&nbsp;".'<font color=black>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../logout.php" onClick="isConfirmloggg();">logout</a>'. '<a href="http://www.facebook.com" target=_blank ><img src="">&nbsp;</a>'.
'<a href="http://www.twitter.com" target="_blank">&nbsp;'.'<a href="http://www.google.com" target="_blank"><img src="">&nbsp;'.'</font>';

?>


</td>
</tr><!--
<tr>
<td id="td1" width=920px height=113px >--><tr>
<td >
<img src="image/11.PNG" width=900 height=100>
<span class="style5">HIBRET HOTEL DEBRE TABOR TOWN , ETHIOPIA</span></td>


</td>
</tr>

</td>
</tr><!--

        </div>
        <!--Custom navigation buttons on both sides
        <div class="group1-Wrapper">-->
            <a onClick="imageSlider.previous()" class="group1-Prev"></a>
            <a onClick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar
        
	</tr>-->
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="600px" width="200px"   id="table2" style="background:url('images1/wrapper-bg1.png');" > 

<table id="menu-bar1" style="border:1px solid white;" height=100px>
<tr><td style="font-size:20px;color:black;background:tan;"></td></tr>
<tr><td><!--<a href="changepassword.php"><img src="images1/widget-arrow.png" width="10" /></a><br>
	<a href="profile.php"><img src="images1/widget-arrow.png" width="10" /></a>
	<br>-->
	<a href="feedback.php"><img src="images1/widget-arrow.png" width="10" />Feedback</a>
	</td></tr></table>
	

</td>

		
		</div>
	</td>
<td valign="top" id="td" >	



<div id="wrapper">
	<div id="note">
		<h1 style="margin-top: 0px; margin-bottom: 5px;">Select Movie from The Listt</h1>
		
	</div>
	<div id="content">
		<div id="productlist">
		<div align=left>	
		 <div class="view2">	
			<?php
			
			$result = mysql_query("SELECT * FROM products");
			while($row=mysql_fetch_assoc($result))
			{
		
	echo '<a rel="facebox" href="orderpage.php?movie_id='.$row['movie_id'].'&trnasnum='.$transnum.'">
	<img src="images/upload/'.$row['movie_photo'].'" title="'.$row['MovieName'].'" width="110" height="110" class="pngfix" /></a>';		
		

			}
			?>
			</div>
			</div>
		</div>
		<div id="orderlist">
			<table width="70%" border="1" cellpadding="2" cellspacing="2" align=center>
				<tr>
				   
				   <td width="25"><div align="center"><strong ><font color=black>Action</strong></div></td>
				  <td width="25"><div align="center"><strong ><font color=black>No_resrver</strong></div></td>
				  <td width="100"><div align="left"><strong><font color=black>Movie_Name</strong></div></td>
				  <td width="100"><div align="left"><strong><font color=black>Price</strong></div></td>
				  <td width="25"><div align="center"><strong><font color=black>Amount</strong></div></td>
				</tr>
				
				<?php
				$d=date("d/m/y");
				echo "<p><font color=red size=5>&nbsp;Today is $d</font></p>";
				$i=1;
				$result3 = mysql_query("SELECT * FROM orders WHERE confirmation='$transnum'");
					while($row3 = mysql_fetch_array($result3))
						{
						echo '<tr>';
						$movie_id=$row3['movie_id'];
                        echo '<td><a href="deleteorder.php?id='.$row3['movie_id'].'"  class="delbutton"  ><img src="images1/delete.png" title="Click To Delete" onclick="isdelete();"></img></a></td>';
						
						echo '<td><div align="center">'.$row3['qty'].'</div></td>';
						echo '<td>'.$row3['movie'].'</td>';
						echo '<td>'.$row3['price'].'</td>';
						echo '<td><div align="center">'.$row3['total'].'</div></td>';
						echo '</tr>';
						
						}
				?>
				<tr>
				  <td colspan="4"><div align="right"><span style="color:black; font-size:13px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Total </span></div></td>
				  <td><div align="center">
				  <?php
				  $result5 = mysql_query("SELECT sum(total) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysql_fetch_array($result5))
					  { 
						echo $row5['sum(total)']; 
						$sfdddsdsd=$row5['sum(total)'];
					  }
				  ?>
				  
				  
				  </div>
				  </td>
				</tr>
			</table>
			<form method="post" action="personalinfo.php" name="form1" onSubmit="return validateForm()" >
			<input type="hidden" name="transnumber" value="<?php echo $transnum ?>" />
		<!--<input type="hidden" name="produ_id" value="<?php echo $movie_id ?>" />-->
			<input type="hidden" name="mail" value="<?php echo $user_id?>" />
			<input type="hidden" name="total" value="<?php echo $sfdddsdsd ?>" />
			<input type="hidden" name="totalqty" value="
			<?php
			$date=date("d/m/y");
				  $result5 = mysql_query("SELECT sum(qty) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysql_fetch_array($result5))
					  { 
						echo $row5['sum(qty)']; 
					  }
				  ?>
			" />
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
	
		<tr><td><font color=black>RezrvdDate:
                                    <td width="150"><input class="mine_text_field_7" name="txtfrom" id="txtfggrom1" value='<?php echo $date?>' readonly="readonly" type="text" placeholder='OrderDate'/>
                                    <a href="javascript:NewCssCal('txtfrom1','yyyymmdd')"></td>
                                  </tr>
			  <tr>
				<td width="100"><font color=black>OrgnzName</td>
				<td  width="100"><select name="country"  required x-moz-errormessage="Please Select the city" title="Please Select the city">
				<option  selected="selected">--SelectMethod--</option>
				<option value="1">Hibret Hotel Cinema</option>
								</select></td>
			  </tr>
			  <tr style="">
				<td><font color=black>Bank</td>
				<td >
				<input type="text" size=30px value="Commercial Bank of Ethiopia" name="state" id="pay" readonly >
				</td>
			  </tr>
			  <tr>
          <td colspan="2" ><label>
            <input type="checkbox" name="checkbox" value="checkbox"  /><font color=black>
            I Agree to <a rel="facebox" href="terms.php" ><font color=blue>order this movie</font></a> in hibret hotel cinema</label></td>
          </tr>
		  
      		
			</table>
			<input type="submit" value="confirm" class="button_example"  align=center onClick="return validateForm1()">
			</form>
		</div>
		
		<div class="clearfix"></div>
	</div>

	<div class="clearfix"></div>
</div>

</td>

</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>GROUP 7&copy;2009/2017 HibretHotelCinema &reg; All RIghts Reserved @DEBRE TABOR UNIVERSITY.</p>
</td>
</tr>

</table>
</body>
</html>
