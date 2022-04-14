
<?php
if(isset($_POST['B_submit'])) {
	include("../Common/connection.php");
	$plate_number=$_POST['plate_number'];
	$holding_capacity=$_POST['holding_capacity'];

	$query6="insert into bus values('','$plate_number','$holding_capacity',null)"; 
	$query7=mysql_query($query6);
	if($query7){
		echo "data inserted Successfully!!";
	}
}
?>
<html>
<head>
<link href="formmapt.css" rel="stylesheet" type="text/css" />
    <style>
        .error {
            display: none;
            color: red;
        }
    </style>
</head>  
<body>
<center>
<div style ="width:700px;height:300px;margin-left:10px">
	 <h2> Add Bus Information</h2>	 
<form name="f11" action="?" method="post" onsubmit="return checkk()">  
	<table  border = "0 " style="color:black; border: 1px solid black; padding: 20px 20px;">
	<tr>
		<td>Plate Number:</td><td><input type="number" id="plate_number" name="plate_number"/><span id="usernamelocation" style="color:red"></span></td>
        <td id="plate_number_error" class="error">Please Fill 5 digit number</td>
	</tr>

	<tr>
		<td>Holding Capacity:</td><td><input type="number" name="holding_capacity" id='holding_capacity'/><span id="usernamelocation" style="color:red"></span></td>
        <td id="holding_capacity_error" class="error">Please Fill number</td>
	</tr>
	<tr style="height: 20px;">
		
	</tr>
	<tr>
		<td colspan="2"><center><input type="submit" value="Submit" name="B_submit"/> <input type="reset" value="Cancel" name="B_Cancel" id="b2"/>
	</center> </td>
	</tr>
	</table>
</form>
</div>
</body>
    
<script>
    function checkk() {
		var stringOnly = /^[a-zA-Z]+$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp = /^\d{3}\d{3}\d{4}$/;
        var stringWith = /^[a-zA-Z_ ]*$/;
        
		if(document.getElementById("plate_number").value=="" || !document.getElementById("plate_number").value.match(numOnly) || parseInt(document.getElementById("plate_number").value.length) != 5){
			document.getElementById('plate_number_error').style.display="block";
			return false;
		}else {
			document.getElementById('plate_number_error').style.display="none";
		}
        
        if(document.getElementById("holding_capacity").value=="" || !document.getElementById("holding_capacity").value.match(numOnly)){
			document.getElementById('holding_capacity_error').style.display="block";
			return false;
		}else {
			document.getElementById('holding_capacity_error').style.display="none";
		}
        
        
    }
</script>
</html>
						