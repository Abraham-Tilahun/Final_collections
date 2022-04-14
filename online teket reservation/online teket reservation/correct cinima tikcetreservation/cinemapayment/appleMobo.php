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
var con = confirm("Are You Sure? you want to order this product?");
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
   alert(window.location='logout.php');
   }
  }
</script>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 >
<?php 
echo '<p align=right style="margin-right:3%;">'.'<img src="images1/User3.png" width=50px height=25px/>'."&nbsp;".'<font color=black>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="logout.php" onClick="isConfirmloggg();">logout</a>'.'<a href="http://www.facebook.com" target=_blank ><img src="images/facebook.png">&nbsp;</a>'.
'<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png">&nbsp;'.'<a href="http://www.google.com" target="_blank"><img src="images/google.png">&nbsp;'.'</font>';

?>


</td>
</tr>
<tr>
<td id="td1" width=920px height=113px >

</td>
</tr>
<tr>
<td >
 

			<div id="topnav" >

			<div class="shell">
				<ul>
					<li><a href="order.php" title="">Home</a></li>
					<li><a href="#" title="">Computers</a>
					<ul>
					<li><a href="la.php" title="">Laptop</a></li>
					<li><a href="desk.php" title="">Desktop</a></li>
					
					</li></ul>
					
					<li><a href="#" title="">Refrigerator</a>
				<ul>
					<li><a href="samRefo.php" title="">Samsung</a></li>
					<li><a href="lcdRefo.php" title="">LG</a></li>
					
					</li></ul>
					<li><a href="#" title="">TV</a>
					<ul>
					<li><a href="sonyTvo.php" title="">Sony</a></li>
					<li><a href="lcdTvo.php" title="">LG</a></li>
					
					</li></ul>
					
					
					<li><a href="#" title="">Mobile</a>
					<ul>
					<li><a href="nokiaMobo.php" title="">Nokia</a></li>
					<li><a href="samsungMobo.php" title="">Samsung</a></li>
					<li><a href="appleMobo.php" title="">Apple</a></li>
					</li></ul>
					<li><a href="stoveo.php">Stove</a></li>
					<li><a href="laundryo.php">Laundry</a>
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
            <img src="images1/slide-img1.jpg" alt="" />
            <img src="images1/slide-img1.jpg" alt="" />
            <img src="image/slider-2.jpg" alt="" />
            <img src="image/slider-1.jpg" alt="" />
			<img src="images1/product-img1.jpg" alt="" />
			<img src="image/images1222.jpeg" alt="" />
        </div>
        <!--Custom navigation buttons on both sides-->
        <div class="group1-Wrapper">
            <a onClick="imageSlider.previous()" class="group1-Prev"></a>
            <a onClick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onClick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onClick="switchAutoAdvance()"></a>
            <a onClick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
	</td>
	</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="600px" width="200px"   id="table2" style="background:url('images1/wrapper-bg1.png');" > 

<table id="menu-bar1" style="border:1px solid white;" height=100px>
<tr><td style="font-size:20px;color:black;background:tan;">AccountSetting</td></tr>
<tr><td><a href="changepassword.php"><img src="images1/widget-arrow.png" width="10" />Change Password</a><br>
	<a href="profile.php"><img src="images1/widget-arrow.png" width="10" />Profile Details</a>
	
	<br>
	<a href="feedback.php"><img src="images1/widget-arrow.png" width="10" />Feedback</a></td></tr></table>
	

</td>

		
		</div>
	</td>
<td valign="top" id="td" >	



<div id="wrapper">
	<div id="note">
		<h1 style="margin-top: 0px; margin-bottom: 5px;">Select Product</h1>
		For inquiries and order cancelation please contacts: <br>
		(+251)1185487545 or email us Masiyas@yahoo.com and call on (+251)914404398.
	</div>
	<div id="content">
		<div id="productlist">
		<div align=left>	
			
			<?php
			
			$result = mysql_query("SELECT * FROM products where BrandName='apple' and product_name='Mobile' ");
			while($row=mysql_fetch_assoc($result))
			{
		
	echo '<a rel="facebox" href="orderpage.php?product_id='.$row['product_id'].'&trnasnum='.$transnum.'">
	<img src="images/upload/'.$row['product_photo'].'" title="'.$row['BrandName'].'" width="110" height="110" class="pngfix" /></a>';		
			

			}
			?>
			
			</div>
		</div>
		<div id="orderlist">
			<table width="80%" border="1" cellpadding="2" cellspacing="2" align=center>
				<tr>
				   
				   <td width="25"><div align="center"><strong ><font color=black>Action</strong></div></td>
				  <td width="25"><div align="center"><strong ><font color=black>Qty</strong></div></td>
				  <td width="100"><div align="left"><strong><font color=black>Name</strong></div></td>
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
						$product_id=$row3['product_id'];
                        echo '<td><a href="deleteorder.php?id='.$row3['product_id'].'"  class="delbutton"  ><img src="images1/delete.png" title="Click To Delete" onclick="isdelete();"></img></a></td>';
						
						echo '<td><div align="center">'.$row3['qty'].'</div></td>';
						echo '<td>'.$row3['product'].'</td>';
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
			<input type="hidden" name="produ_id" value="<?php echo $product_id ?>" />
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
	
		<tr><td><font color=black>OrderDate:
                                    <td width="150"><input class="mine_text_field_7" name="txtfrom" id="txtfggrom1" value='<?php echo $date?>' readonly="readonly" type="text" placeholder='OrderDate'/>
                                    <a href="javascript:NewCssCal('txtfrom1','yyyymmdd')"></td>
                                  </tr>
			  <tr>
				<td width="100"><font color=black>City</td>
				<td  width="100"><select name="country" id="txt">
				<option  selected="selected">--SelectMethod--</option>
				<option value="2">Debre Berhan</option>
				<option value="3">Addis Abeba</option>
				
				<option value="4">Mekelle</option>
				<option value="5">Bahr Dar</option>
				<option value="6">Jimma</option>
				<option value="7">Harer</option>
				<option value="8">Hawassa</option>
				<option value="9">Gonder</option>
				<option value="10">Dessie</option>
				<option val ue="11">Arba Minch</option>
				<option value="12">Axum</option>
				<option value="13">Adama</option>
				<option value="14">Ambo</option>
				
				</select></td>
			  </tr>
			  <tr style="">
				<td><font color=black>Bank</td>
				<td ><div id="statediv"><select name="state" id="pay">
				
				<option >Commercial Bank of Ethiopia</option>
				
				
				
				
					</select></div></td>
			  </tr>
			  <tr>
          <td colspan="2" ><label>
            <input type="checkbox" name="checkbox" value="checkbox" /><font color=black>
            I Agree The <a rel="facebox" href="terms.php" ><font color=blue>Terms and Condition</font></a> of this company</label></td>
          </tr>
			</table>
			<input type="submit" value="Check Out" class="button_example" onClick="return validateForm1()">
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
<font color=white size=4px ><p align=center>GROUP 7 $copy2009/2017 HibretHotelCinema ,All RIghts Reserved.</p>
</td>
</tr>

</table>
</body>
</html>
