<?php
include("../connection/connection.php");  
 session_start();
if(isset($_SESSION['USER_ID']))
 {
  $mail=$_SESSION['USER_ID'];
 } else {
 ?>

<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php
 }
 ?>
<?php
include"../connection/connection.php";
if(isset($_POST['serach'])){  
$searchq = $_POST['serach'];
$searchq = preg_replace("#[^0-9a-z]#i","",$searchq); 
$query = mysql_query("SELECT *FROM Request WHERE BORD_NO = '$searchq'") 
or die("could not sea");

while($row= mysql_fetch_array($query)){
$r1=$row["REQUEST_TO"];
$r2 = $row["LEVEL"];
$r3 = $row["BORD_NO"];	
}
}
echo"</tr>";
?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>Schedule Request</title>
<link rel="stylesheet" type="text/css" 
href="../css/schedulerequest.css">
</head>
<body bgcolor="white">
<div class="header">
<h1> Schedule Request</h1>
</div>
<div id="wrapper">
	<form method="POST"action="shedulerequestaction.php"onsubmit="return validate()"name="vfrom">
				<style>
	.request select{
	 width:180px;
     height:26px;	
     border-radius:5px;	   
		}
		</style>
		<div class="request"> 
		<label>For Update/new user</label>
		<select name="option">
		<option>  </option>
		<option>To Update</option>
		<option>New User</option>
		
		</select>
		</div>
		<div class="request">
		     <label>Association Name</label></br>
		<input type="text"readonly name="asso"value="<?php echo $r1;?>"> 
		</div>
		 <div>
		<label>Bord No</label>
		<input type="text"value="<?php echo $r3;?>"readonly name="bord"class="textInput">
		<div id="ass_error"class="val_error"></div>	
		</div>
		<div>
		<label>Level</label></br>
		<input type="text"readonly name="level" value="<?php echo $r2;?>">
		</div>
		<div>
		    <label>From</label></br>
			<input type="text" name="intial"class="textInput"onkeyup="lettersOnly(this)">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>To</label></br>
			<input type="text" name="destination"class="textInput"onkeyup="lettersOnly(this)">
			<div id="desti_error"class="val_error"></div>
		</div>
		
		<div>
			<input type="submit" value="Register" class="btn"name="Applay">
			<input type="reset" value="Reset" class="btn"name="reset">
		</div>
	</form>
</div>
</body>
</html>
<script>
function lettersOnly(input){
var regex=/[^a-z]/gi;
input.value=input.value.replace(regex,"");
}
</script>
 