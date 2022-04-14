<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head><?php
	include("includes/db.php");	
?>
<html>
<head>







<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="mhgallery.js"></script>
<script type="text/javascript" src="initgallery.js"></script>
<link type="text/css" rel="stylesheet" href="mhgallery.css" />

	<title>Online ticket booking system for Hibret Hotel cinema</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

  
  <style>
  .style5 {color: #8080C0}
  </style>	 
</head>
<body bgcolor="black">


<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="singup.php" title="Register">Register</a>
<a href="login.php" title="Login">Login</a>
<a href="http://www.facebook.com" target=_blank ><img   src="images/facebook.png"/></a>
<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png"/></a>
<a href="http://www.youtube.com" target="_blank"><img src="images/youtube.png"/></a>
<a href="http://www.google.com" target="_blank"><img src="images/google.png"/></a></p>
</td>
</tr>
<tr>
<td >
<img src="image/11.PNG" width=900 height=200>
<span class="style5">HIBRET HOTEL ,DEBRE TABOR TOWN,AMHARA REGION,ETHIOPIA</span></td>


</td>
</tr>
<tr>
<td align="center" id="heder" width="900" height="250" ><p align="right" style="margin-right:3%;">
<div id="mhgallery"> 
<style type="text/css">
 #mhgallery img { display:none; } 
 </style> 
 <center>
  
<img src="image11/51.jpg"/>
<img src="image11/52.jpg"/>
<img src="image11/53.jpg"/>
<img src="image11/54.jpg"/>
<img src="image11/ayrak.jpg"/>
<img src="image11/56.jpg"/>
<img src="image11/57.jpg"/>
<img src="image11/58.jpg"/>
<img src="image11/abat.jpg"/>
<img src="image11/59.jpg"/>
<img src="image11/62.jpg"/>
<img src="image11/65.jpg"/>
<img src="image11/67.jpg"/>
<img src="image11/58.jpg"/>
<img src="image11/59.jpg"/>
<img src="image11/12.jpg"/>
<img src="image11/hall1.jpg"/>
</center>
</div>
</td>
</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="100" width="180"  id="menu-bar" id="table2" > 
<h2><big ><font size=4> additional information</font></big></h2><br>
<?php
$count=$_COOKIE['visitor'];
if($count==" "){
$count=1;
}
else
{
$count++;
}
setcookie('visitor',$count);
?>
<?php
echo "visitor number".$count;
?>

<br>
<br>
<br>
<br>
<br>
<br>
	 <a href="aboutus.php"><img src="images1/widget-arrow.png" width="15" />about us</a>
	 <a href="contact.php"><img src="images1/widget-arrow.png" width="15" />contact</a>
	 <a href="english.php"><img src="images1/widget-arrow.png" width="15" />english advert</a>
	 <a href="amharic.php"><img src="images1/widget-arrow.png" width="15" />amharic advert</a>
	 <a href="cinemapayment/feedback.php"><img src="images1/widget-arrow.png" width="15" />FeedBAckt</a>

</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">>	
<div align="center">

	<h3 ><font color=white>movie schedule</h3>
	
	 <div class="view1">
<?php

			                 $result2 = mysql_query("SELECT * FROM movie");
								
								
								while($row2 = mysql_fetch_array($result2))
								  {
								  $ble=$row2['film_id'];
								  $result3 = mysql_query("SELECT * FROM movie where film_id='$ble'");
								
								
								$row3 = mysql_fetch_array($result3);
								  
								  
      echo '<div class="templatemo_pizza_box" id="menu-bar1" > <a  rel="facebox" href=singup.php?film_id=' . $row3["film_id"] . '>
	  <img src="images/upload/'.$row3['film_image'].'" width="150px" height="100px" /></a>';
          echo '<div class="textbox"> '.'<p style="black:white">
name:<font color=green>'.$row3['film_name'].'</font><br>		  
                birr:<font color=green>'.$row3['birr'].'</font><br>
						time:<font color=green>'.$row3['time'].'</font>
                           date:<font color=green>'.$row3['date'].'</font><br><br>
                   
						</div>';
		  
      echo '</div>';
	 
								  }
										  
	?>
</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top></h3></p><!--<a href="http://www.habesha.com">-->
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
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>GROUP 7 &copy;2009/2017 HibretHotelCinema ,&reg;All RIghts Reserved @DEBRE TABOR UNIVERSITY.<br>
 </p>
</td>
</tr>

</table>
</body>
</html>
