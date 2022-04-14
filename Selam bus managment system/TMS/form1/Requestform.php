 <?php
 session_start();
 include "../connection/connection.php";

if (isset($_POST['register']))
	
	{
    $fn=$_POST['fname'];
	$mn = $_POST['fathername'];
	$ln = $_POST['lname'];
	$ph = $_POST['phone'];
	$keb = $_POST['kebele'];
	$req = $_POST['request'];
	$lev = $_POST['level1'];
	$bord = $_POST['bordno'];
	$ol = $_POST['olicence'];
	$busl = $_POST['blicence'];
	$insurl = $_POST['Ilicence'];
	$reqdate = date("y-m-d");
	$accept = 'Not';
	$approve = 'Not';
	   
    $year=date("Y")-7;// year in two digit in ethio calander example 2007=07
    $counter_res=mysql_query("select * from Request");
    $counter=mysql_num_rows($counter_res);
    $varx=$counter+1;
      if($varx<10)
      {
          $d="000";
      }
      elseif ($varx<100) {
      	   $d="00";
      }
      elseif ($varx<1000) {
   	      $d="0";
      }
      else {
   	   $d="";
      }
      $kebeleid=$year.$d.$varx;// End of id generation
	$query3 = mysql_query("SELECT * FROM request where BORD_NO='$bord' ");
    if(mysql_fetch_array($query3)>0)
	{
		echo '<script type="text/javascript">alert("Bored Number are already exist !! ");</script>';
	}//if exist 
	else//
	{
	
$query = mysql_query("SELECT * FROM request where REQUEST_TO='$req' ") 
or die("could not sea");
//for count start
$sqla="select count('$fn') from request where  REQUEST_TO='$req' ";
$countt=mysql_query($sqla,$con);
$row1= mysql_fetch_array($countt);
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Member of This Association:";
echo $row1['0'];
$count = mysql_num_rows($query);
if($count==250){
 echo'<script type="text/javascript">alert("The Association is Full Pleas Find Other Asociation !! ");</script>';	
}
else{
	
 $sql="insert into request values('$fn','$mn','$ln','$ph','$keb','$req','$lev','$bord','$ol','$busl','$insurl','$reqdate','$kebeleid','$accept','$approve')";
$result  = mysql_query($sql,$con);
	if(!$result)
	{
	echo "not registerd".mysql_error();
	}
	else
	{	
echo '<script type="text/javascript">alert("Register Seccesfully !! ");window:location=\'Requestform.php\';</script>';
			
}
}
	}
	}
 ?>


<!DOCTYPE html>
<html><html>
<head>
	<title>Operator Request Form</title>
<link rel="stylesheet" type="text/css" href="Requestformstyle.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
 <script src="js/requestform.js" type="text/javascript"></script>
<meta charset="utf-8">
<?php include'../Language/lang.php';?>
</head>
<body bgcolor="white">
<div class="header">
<h1><?php echo htmlspecialchars($lang['reqestform']);?></h1>
</div>
<div id="wrapper">
	<form method="POST"action="Requestform.php"onsubmit="return validate()"name="vfrom" id="cform">
		<div>
		<label><?php echo htmlspecialchars($lang['first']);?><label></br>
<input type="text" name="fname"class="textInput" id="fn"onkeyup="lettersOnly(this)">
<span><i id="fname_error"class="val_error"></i></span>
			</div>
			<div>
		<label><?php echo htmlspecialchars($lang['second']);?></label></br>
			<input type="text" name="fathername"class="textInput" id="mn" placeholder=""onkeyup="lettersOnly(this)">
			<span><i id="fathername_error"class="val_error"></i></span>
                </div>
						<div>
		<label> <?php echo htmlspecialchars($lang['last']);?></label></br>
			<input type="text" name="lname"class="textInput" id="ln"placeholder=""onkeyup="lettersOnly(this)">
			<span><i id="grandfather_error"class="val_error"></i></span>
                </div>
				
		<div>
		    <label><?php echo htmlspecialchars($lang['phone']);?></label></br>
			<input type="text" name="phone"class="textInput" id="phon"placeholder=""onkeyup="numbersOnly(this)">
			<span><i id="phone_error"class="val_error"></i></span>
		</div>
		<div>
		    <label><?php echo htmlspecialchars($lang['kebele']);?></label></br>
			<input type="text" name="kebele"class="textInput" id="kebel">
			<span> <i id="kebele_error"class="val_error"></i></span>
		</div>
		<div>
		<label> <?php echo htmlspecialchars($lang['asso']);?></label></br>
		
	<select name="request" id="request" class="textInput">
	<option>request to---</option>
	
<?php

   $cdquery="SELECT *FROM Association";
            $cdresult=mysql_query($cdquery,$con);
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
     ?>
	 <option><?php echo $cdrow['ASSOCIATION_NAME'];?></option>
	 <?php
            
            }

            ?>
    
        </select>
		<span id="request_error"class="val_error"></span>
		</div>
		<div>
		<label> <?php echo htmlspecialchars($lang['lev']);?></label></br>
			<select type="text" name="level1" id="level" class="textInput"placeholder="">
			
		
		<option>-Select Level-</option>
		<option>level 1</option>
		<option>level 2</option>
		<option>level 3</option>
		</select>
		<span id="level_error"class="val_error"></span>
		</div>
		<div>
		    <label><?php echo htmlspecialchars($lang['targa']);?></label></br>
			<input type="text" name="bordno"class="textInput"id="bord" placeholder=""onkeyup="numbersOnly(this)">
			<span id="bordno_error"class="val_error"></span>
		</div>
			
		
		<div>
		<input type="hidden"name="size"value="100000">
		    <label><?php echo htmlspecialchars($lang['opreatorlicence']);?></label></br>
			<input type="file" name="olicence" id="operator" class="textInput"placeholder="">
			<span id="olicence_error"class="val_error"></span>
		</div>
		<div>
		    <label><?php echo htmlspecialchars($lang['BusinesseLicence']);?></label></br>
			<input type="file" name="blicence"class="textInput" id="business" placeholder="">
			<span id="blicence_error"class="val_error"></span>
		</div>
			<div>
		    <label><?php echo htmlspecialchars($lang['Insurancemember']);?></label></br>
			<input type="file" name="Ilicence"class="textInput" id="insurance" placeholder="">
			<span id="Ilicence_error"class="val_error"></span>
		</div>	
		<div>
			<input type="submit" value="<?php echo htmlspecialchars($lang['submit']);?>" class="btn"name="register">
			<input type="reset" value="<?php echo htmlspecialchars($lang['reset']);?>" class="btn"name="register">
		</div>
	</form>
	</fieldset>
</div>
</body>
</html>
<script>
function lettersOnly(input){
var regex=/[^a-z]/gi;
input.value=input.value.replace(regex,"");
}
function numbersOnly(input){
var regex=/[^0-9]/gi;
input.value=input.value.replace(regex,"");
}
</script>
