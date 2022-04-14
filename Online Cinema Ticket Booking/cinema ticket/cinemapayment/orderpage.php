<?php
session_start();
include("includes/db.php");
$user_id=$_SESSION['mail'];
$id=$_GET['movie_id'];

$result2 = mysql_query("SELECT * FROM products WHERE movie_id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
	$left=$row2['freeseatleft'];
	if($left <=0 ){
	header("location:new.php");
	}
	else{
	
	$movie_id=$row2['movie_id'];
	$brand=$row2['MovieName'];
	$price=$row2['movie_price'];
	$name=$row2['movieseendate'];
	$description=$row2['movie_description'];
	$qanleft=$row2['freeseatleft'];
	$qanleft=$row2['movie_type'];
	echo '<img src="images/upload/'.$row2['movie_photo'].'" alt="Image"  /><br>';
	echo '<span style="color:black; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'."Movie_Name".'</span><br>';
	echo '<span style="color:#B80000; font-size:14px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['MovieName'].'</span><br><br>';
		echo '<span style="color:black; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'."Movie_type".'</span><br>';			
			echo '<span style="color:#B80000; font-size:14px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['movie_type'].'</span><br><br>';		
				echo '<span style="color:black; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'."total_seat".'</span><br>';
			echo '<span style="color:#B80000; font-size:14px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['freeseatleft'].'</span><br><br>';
		echo '<span style="color:black; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'."Description".'</span><br>';
	echo '<span style="color:#B80000; font-size:14px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['movie_description'].'</span><br>';
	//echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
	}
	
	}
?>


<script type="text/javascript" language="Javascript">
	var sum=0;
	price = document.frmOne.select1.value;
	document.frmOne.txtDisplay.value = price;
    function OnChange(value){
		
		price = document.frmOne.select1.value;
		quantity = document.frmOne.select2.value;
		
        sum = price * quantity;
		
		document.frmOne.txtDisplay.value = sum;
    }
</script>
<SCRIPT language=Javascript>
			  <!--
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }

  			  
			  
			  //-->
		</SCRIPT>
		<script language="javascript">
  function check()
  {
   if(document.getElementById("se").value =="")
   {
    alert('Please Enter The Quantity !!'); 
    document.getElementById("se").focus();
    return false;
   }
   }
   </script>
<form NAME = "frmOne" action="initiateorder.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="transnum" value="<?php echo $_GET['trnasnum'] ?>" />
	<INPUT TYPE = "Text" name = "select1" size = "35" value ="<?php echo $price ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "pname" size = "35" value ="<?php echo $name ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "price" size = "35" value ="<?php echo $price ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "id" size = "35" value ="<?php echo $movie_id ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "mail" size = "35" value ="<?php echo $user_id ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "brand" size = "35" value ="<?php echo $brand ?>" style="display:none;">
    <br>
    <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left;font-size:16px; line-height:17px;color:#000000;font-weight:bold;"><b>No_reserver :</b> </span>
	<input type="text" required x-moz-errormessage="" title="Enter the No_reserver" name="select2"  onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" style="width:60px;" /> 
	
	 <span style="color:black; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">= Price</span> 
    <INPUT TYPE = "Text" name = "txtDisplay" size = "35" value ="" style="border:#999999 solid 1px; background-color:#FFF; width:100px; height:20px;" readonly><br>
    
	<br>
	
<input type="submit" value="submit" style="padding:10px; border-radius:15px; background-color:green; border:none; color:#ffffff; font-weight:bold; border: 1px solid #000000" Onclick="return check(this.form);"/>
</form>


