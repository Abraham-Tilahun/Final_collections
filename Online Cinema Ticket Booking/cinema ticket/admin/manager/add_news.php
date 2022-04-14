<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head>
<?php
	include("db.php");

  
 session_start();


//$mail=$_POST['mail'];
//$pass=$_POST['pass'];
if(isset($_SESSION['SESS_MEMBER_ID']))
 {
  $mail=$_SESSION['SESS_MEMBER_ID'];
 } else {
 ?>
 <?php
 }
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
<title>Online cinema ticket booking system for hibret hotel cinema</title>
<link rel="stylesheet" type="text/css" href="css/blue.css" />
	</head>
	<body bgcolor="black">
	<div>	
	<table  width="956"  align=center >
	
	<tr bgcolor="burlywood">
	<td >
		<img src="admin.php" alt="" width=910 height=100>
<?php 
echo '<p align=right style="margin-right:5%;">'.'<font color=#FFFFFF>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="../../logout.php" onClick="isConfirmloggg();"><font color="white">logout</font></a>'.'</font>';

?>
	  </td>
	  </tr>
		<tr>
		<td width=948   style="background:url('images/bg_header_blue.gif');">
		<div id="menu">
	<ul class="group" id="menu_group_main">
	
	
				<li class="item first" id="four"><a href="/cinema ticket/reservation/seatreservation/admin/reserver information.php" class="main"><span class="outer"><span class="inner media_library">seat information</span></span></a></li>  
		<li class="item first" id="eight"><a href="search_news.php" class="main current"><span class="outer"><span class="inner settings">search_news</span></span></a></li>
	      <li class="item first" id="eight"><a href="delate.php" class="main current"><span class="outer"><span class="inner settings">delete_news</span></span></a></li>
    <li class="item first" id="one"><a href="profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="four"><a href="../../cinemapayment/admin/message.php" class="main"><span class="outer"><span class="inner media_library"> Message</span></span></a></li>
	<li class="item first" id="one"><a href="/cinema ticket/cinemapayment/admin/movie.php" class="main current"><span class="outer"><span class="inner newsletter">Add Movie</span></span></a></li>

	</ul>
</div>
</td>

</tr>
</table>

</tr>
</table>
<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
<tr>
<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top>Advertise</h3></p><a href="">
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
<form action="" method="post" name="frm_prd" id="frm_prd" enctype="multipart/form-data"onsubmit='return formValidation()'>  

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr>
<td colspan=3 align=right ><p style="margin-right:3%;"><font color=black></td>
</tr>
<tr>
<td bgcolor=#AA3AAAA height="30px" width='200' colspan='2' align="center">ADD NEWS</td></tr>
<tr>
 <td>
<font color=red> * </font> <font color=black>ID</td> <td><input type="text" name="id" value="" size="20%" id="txt_id" placeholder='Id'/></td></tr>
<tr>
 <td>
<font color=red> * </font> <font color=black>name</td> <td><input type="text" name="mod" value="" size="20%" id="txt_mo" placeholder='name'/></td></tr>

<tr>
 <td>
 <font color=red> * </font> <font color=black>type</td> <td><input type="text" name="hard" value="" size="20%" id="txt_hard" placeholder='type '/></td></tr> 
 <tr>
 <td>
 <font color=red> * </font> <font color=black>Price</td> <td><input type="text" name="price" value="" size="20%" id="txt_price" placeholder='price'/></td></tr> 
 <tr>
 <td>
 <font color=red> * </font> <font color=black> Image </td> <td><input type="file" name="fileimage" id="fileimage" maxlength="50" value="" style="width:176px;"
                          onchange=" document.getElementById('fileimage').value=trim(this.value);"/>
                          <div class="example"> </div></td>
        </tr>
						
 
<tr><td colspan=2 align="center"><input type="submit" name="submitMain" value="ADD" size="20%" id="submitMain" Onclick="return check(this.form);"/><input type="reset" value="Clear"/></td></tr> 

</form>
<!-- inserting  to data base-->
<?php
   $photo = mysql_query ("SELECT MAX(row_id) FROM items order BY row_id ASC");
   $photoid = mysql_result($photo,0,'max(row_id)')+1;
  ?>
  <!-- Upload of image section -->
  <?php
   // function to get the characters after .!!
   function getExtension($str)
  {
   $i = strrpos($str,".");
   if (!$i)
   {
     return "";
   }
   $len = strlen($str) - $i;
   $ext = substr($str,$i+1,$len);
   return $ext;
  }
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
     $image=$_FILES['fileimage']['name'];
   
   if (isset ($_FILES['fileimage']['name']))
   {   
     $imagename = $_FILES['fileimage']['name']; //original image
     $source = $_FILES['fileimage']['tmp_name']; //source image 
     $type=$_FILES['fileimage']['type'];
     $size=$_FILES['fileimage']['size'];
     if ($size > 350000){
       echo "<script>alert('Size should not excide 350000bytes !!');</script>";
     }
     else
     {
     $extension = getExtension($imagename);
     $extension = strtolower($extension);
     if (($extension != "jpg") && ($extension != "jpg") && ($extension != "jpg") && ($extension != "jpg") ) 
 	{
          // if file extension is not .jpg, .jpg, .jpg, .jpg
          echo "<script>alert('Image Extenction Should be .jpg, .jpg, .jpg, .jpg only !!');</script>";
        } else {
          $target = "img/$photoid._".$photoid.".jpg";
          move_uploaded_file($source, $target);
          

          //$imagepath = $imagename;
          $save =  "img/$photoid._".$photoid.".jpg"; //This is the new file you saving
          $file =  "img/$photoid._".$photoid.".jpg"; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $tn = imagecreatetruecolor($width, $height) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

          imagejpeg($tn, $save, 200) ; 

          $save =  "img/" .$photoid.".jpg"; //This is the new file you saving
          $file = "img/$photoid._".$photoid.".jpg"; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $modwidth = 150; 
          $modheight = 140; 
          $tn = imagecreatetruecolor($modwidth, $modheight) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 

          imagejpeg($tn, $save, 200) ; 
          $imageval=$photoid.".jpg";
          unlink("img/$photoid._".$photoid.".jpg");
          }
     }
}
}
?>
<?php
if(isset($_POST['submitMain']) && ($size < 3500000000000) && !$imageval=="")
{
//geting values
//$username=$_SESSION['user'];
$id=$_POST['id'];
$_SESSION['id']=$_POST['id'];
$mod=$_POST['mod'];
$hard=$_POST['hard'];
$price=$_POST['price'];
 $pimg=$imageval; 
 $query = mysql_query("INSERT INTO items(row_id,model,rank,Price,poto)
  VALUES ('{$id}','{$mod}','{$hard}','{$price}','{$pimg}')") or die(mysql_error());
if($query)
{
echo "<script>alert('add news inserted sucessfully !!');</script>";
  }
  else{
   echo "<script>alert(' unsucessfully !!');</script>";
  }
  }
 
?>


</table>
</td> 

			<td  valign="top" height="700" width="150"  id="td2" > 
			<h2><p valign=top></h3></p><a href="http://">
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
		<td>
		</td>
		
		<td style="background:url('images/bg_header_blue.gif');" >
<font color=white size=4px ><p align=center>GROUP 7 &copy;2009/2017, HibretHotelCinema. All RIghts Reserved</p>
		</td>
		</tr>
		</table>
</body>
		</html>


  
  







