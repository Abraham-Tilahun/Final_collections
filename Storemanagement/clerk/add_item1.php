<?php
	require_once('auth.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Store managment system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style8 {color: #000000; font-weight: bold; font-style: italic;}
.style15 {color: #00FFFF;
	font-size: x-large;
}
.style17 {color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
	font-size: medium;
}
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img src="images/last2.png" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

<div id="menubar">
      <ul id="menu">
        <li ><a href="technitian.php">Home</a></li>
        <li class="current"><a href="add_item1.php">Add Item </a></li>
        <li><a href="viewreq.php">View Request </a></li>
		<li><a href="login.php">logout</li>
        
      </ul>
</div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <body bgcolor=#9494B8>
<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<table border="0" bgcolor=#0000FF cellspacing=2 cellpadding=4 class="clock24st" style="line-height:50px; line-width:215px; padding:0;">
<tr><td bgcolor=#000000 class="clock24std" style="font-family:bold; font-size:26px;"><a href=" ">
</a>
<b><a href="http://www.24webclock.com/" style="text-decoration:none;"><span class="clock24s" id="clock24_48332" style="color:white;"></b> </span></a></td></tr>
</table>
<script type="text/javascript">
var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
clock24_48332.daylight('ET'); clock24_48332.refresh();
</script></body>
            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="menubar1">
	
	
	  
	  <ul id="menu">
        
        <li></li>
        <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li><a href="kviewmsg.php">View Message</a></li>
	    </ul>
	   
	
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
          <th width="212" bgcolor="#330066" scope="row"><span class="style17">Clerk Page </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <table width="222" height="360">
              <tr>
                <th height="28" colspan="2" bgcolor="#999999" scope="row"><p> </p>
                 <img src="../storefinal/images/goods.jpg"  />
				 </th>
              </tr>
              <tr>
                <th width="230" height="347" colspan="2" scope="row"><marquee direction="up">
                  </marquee>
                    <marquee direction="up">
                    <p>&nbsp;</p>
                    </marquee></th>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div><!--close sidebar_item--> 
        </div>
	  
          
            	 
            </div>
			<!--close sidebar_item--> 
        </div>
			
			
			
          
        </div><!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->	
	  	  <div id="content">
        <div class="content_item">
		
		<table width="495"  border="2" bordercolor="#3399FF">
        <tr>
          <th width="485" height="66" scope="row"><img src="images/adddd.jpg" alt="" width="110" height="53" />Item here... </th>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>
        <!--close content-->
      </p>

<form action="" method="post" name="frm_prd" id="frm_prd" enctype="multipart/form-data"onsubmit='return formValidation()'>  
<table border="0px" bgcolor="#999999"width='700' align="center" bordercolor="#6699FF">
<tr>
<td bgcolor=#c53b1c height="30px" width='200' colspan='2' align="center">ADD ITEM</td></tr>
<tr><td>ItemID</td><td><input type="text" name="id" value="" size="20%" id="txt_id" placeholder='Id'/></td></tr>
<tr><td>ItemName</td><td><input type="text" name="processor" value="" size="20%" id="txt_pro" placeholder='Name Of the Item'/></td></tr>
<tr><td>Quantity</td><td><input type="text" name="mod" value="" size="20%" id="txt_mo" placeholder='amount of the product'/></td></tr>
<tr><td>Model</td><td><input type="text" name="name" value="" size="20%" id="txt_name" placeholder='Item Model'/></td></tr>
<tr><td>ItemStatus </td><td><input type="text" name="size" value="" size="20%" id="txt_size" placeholder='Item Status'/></td></tr>
<tr><td>AssignedTo</td><td><input type="text" name="ram" value="" size="20%" id="txt_ram" placeholder='product matrial'/></td></tr>
<tr><td>Price</td><td><input type="text" name="price" value="" size="20%" id="txt_price" placeholder='price'/></td></tr> 
 <tr>
                    <td>ItemImage :</td>
                    <td><input type="file" name="fileimage" id="fileimage" maxlength="50" value="" style="width:176px;"
                          onchange=" document.getElementById('fileimage').value=trim(this.value);"/>
                          <div class="example">  Image Size Should not Exceed 25000bytes.</div></td>
                  </tr>
						
 
<tr><td colspan=2 align="center"><input type="submit" name="submitMain" value="REGISTER" size="20%" id="submitMain" Onclick="return check(this.form);"/><input type="reset" value="Clear"/></td></tr> 


</table>
</form>
<!-- inserting  to data base-->
<?php
   $photo = mysql_query ("SELECT MAX(row_id) FROM approveditem ORDER BY row_id ASC");
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
     if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") ) 
 	{
          // if file extension is not .jpg, .jpeg, .png, .gif
          echo "<script>alert('Image Extenction Should be .jpg, .jpeg, .png, .gif only !!');</script>";
        } else {
          $target = "images/image/$photoid._".$photoid.".jpg";
          move_uploaded_file($source, $target);
          

          //$imagepath = $imagename;
          $save =  "images/image/$photoid._".$photoid.".jpg"; //This is the new file you saving
          $file =  "images/image/$photoid._".$photoid.".jpg"; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $tn = imagecreatetruecolor($width, $height) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

          imagejpeg($tn, $save, 200) ; 

          $save =  "images/image/" .$photoid.".jpg"; //This is the new file you saving
          $file = "images/image/$photoid._".$photoid.".jpg"; //This is the original file

          list($width, $height) = getimagesize($file) ; 

          $modwidth = 150; 
          $modheight = 140; 
          $tn = imagecreatetruecolor($modwidth, $modheight) ; 
          $image = imagecreatefromjpeg($file) ; 
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 

          imagejpeg($tn, $save, 200) ; 
          $imageval=$photoid.".jpg";
          unlink("images/image/$photoid._".$photoid.".jpg");
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
$name=$_POST['name'];
$sizee=$_POST['size'];
$processor=$_POST['processor'];
$ram=$_POST['ram'];
$hard=$_POST['hard'];
$price=$_POST['price'];
 $pimg=$imageval; // after renaming
//if($id!=$_POST['id']){
 $query = mysql_query("INSERT INTO Price(row_id,Quantity,widthsize,HeightSize,ItemName,product_material,rank,Price,photo)
  VALUES ('{$id}','{$mod}','{$name}','{$sizee}','{$processor}','{$ram}','{$hard}','{$price}','{$pimg}')") or die(mysql_error());

echo "<script>alert('Product Details inserted sucessfully !!');</script>";
  }
  /*else{
   echo'<div align="center"><strong><font color="#FF0000"> This  Id Is oredy Existing!!</font></Strong></div>';
  }*/
?>
<tr>
<td border=1 align="center"height="2"  colspan=3 > 
<font color=white ><p>Tk&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>
</table>

</body>
</html>


  
  







