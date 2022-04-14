<?php
	include("includes/db.php");
	include("includes/functions.php");	
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
a{
color:black;
text-decoration:none;
} 
</style>
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/ph.jpeg" 
demo2 = new Image();
demo2.src="images/GM-FurnitureFinal.gif"
demo3 = new Image();
demo3.src="images/Habesha1.gif"
demo4 = new Image();
demo4.src="images/I-Print5.gif"
demo5 = new Image();
demo5.src="images/ti.GIF" 
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
<body onLoad="timeimgs('1');">

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<span><a href="singup.php" title="Register">Register</a>
<a href="login.php" title="Login">Login</a></span><a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>
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
					<li><a href="index.php" title="">Home</a></li>
					<li><a href="#" title="">Computers</a>
					<ul>
					<li><a href="laptop.php" title="">Laptop</a></li>
					<li><a href="desktop.php" title="">Desktop</a></li>
					
					</li></ul>
					
					<li><a href="#" title="">Refrigerator</a>
				<ul>
					<li><a href="semsungRef.php" title="">Samsung</a></li>
					<li><a href="lcdRef.php" title="">LG</a></li>
					
					</li></ul>
					<li><a href="#" title="">TV</a>
					<ul>
					<li><a href="sonyTv.php" title="">Sony</a></li>
					<li><a href="lcdTv.php" title="">LG</a></li>
					
					</li></ul>
					
					
					<li><a href="#" title="">Mobile</a>
					<ul>
					<li><a href="nokiaMob.php" title="">Nokia</a></li>
					<li><a href="samsungMob.php" title="">Samsung</a></li>
					<li><a href="appleMob.php" title="">Apple</a></li>
					</li></ul>
					<li><a href="stove.php">Stove</a></li>
					<li><a href="laundry.php" title="">Laundry</a>
				
	    </li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		
</div>
			
			</li>
          </ul>
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
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
	</td>
	</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="550" width="180"  id="menu-bar" id="table2" > 
<h2><big style="color:geern" >Information</big></h2><br><br>
		
 <a href="ourprice.php"><img src="images1/widget-arrow.png" width="15" />Our Prices</a>
    <a href="ourproduct.php"><img src="images1/widget-arrow.png" width="15" />OurProducts</a>
	<a href="contact.php"><img src="images1/widget-arrow.png" width="15" />Contact Us</a>
	   <a href="aboutus.php"><img src="images1/widget-arrow.png" width="15" />AboutUs</a>
</td>

		
		</div>
	</td>
<td valign="top" id="td">	
<h3><font color=white ><p align=center>Mobile</h3></p>

<div align="center">

	
	
	
		<?php
	

								
								$result2 = mysql_query("SELECT * FROM products where  BrandName='apple' and  product_name='Mobile'");
								
								
								while($row3 =mysql_fetch_array($result2))
								  {
								 
								
								  
								  
      echo '<div class="templatemo_pizza_box" id="menu-bar1" > <a  rel="facebox" href=large.php?product_id=' . $row3["product_id"] . '>
	  <img alt="" src="images/upload/'.$row3['product_photo'].'" width="150px" height="200px" /></a>';
          echo '<div class="textbox"> '.'<p style="color:white">
                    	Name:<font color=green>'.$row3['BrandName'].'</font><br><p style="color:white">
                    	Price:<font color=green>'.$row3['product_price'].' </div>';
		  
      echo '</div>';
	  }										  
	?>

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top>Advertise</h3></p><a href="http://www.habesha.com" target=_blank>
<marquee  direction=up align=middle height=500px scrollamount=3 style="background:url('images/Habesha1.gif');height:400;">
<a href="http://www.dbbf.com" target=_blank><img src="images/bdb.JPG" alt="" width=150 height=300/></a>
<a href="http://www.dbbf.com" target=_blank><img src="images/ph.jpeg" alt="" width=150 height=300/></a>
<a href="http://www.FurnitureFinal.com" target=_blank><img src="images/GM-FurnitureFinal.gif" alt="" width=150 height=300/></a>
<a href="http://www.Habesha.com" target=_blank><img src="images/Habesha1.gif" alt="" width=150 height=300/></a>
<a href="http://www.I-Print.com" target=_blank><img src="images/I-Print5.gif" alt="" width=150 height=300/></a>
<a href="http://www.autopart.com" target=_blank><img src="images/ti.GIF"  alt="" width=150 height=300/></a>
</marquee>
</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>GROUP 7 $copy2009/2017 HibretHotelCinema ,All RIghts Reserved.</p>
</td>
</tr>

</table>
</body>
</html>