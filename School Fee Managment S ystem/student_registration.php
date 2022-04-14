<html>
<head>
<style>
div{
		  width:40%;
		  margin:25px 50% 75px 25%;
		  border:5px solid green ;
		  background-color:lightblue;
}
.error{
		color:red;
		font-style:italic;
}
.com{
		width:50%;
}
form{
		padding-left:5%;
}
h2{
		padding-left:10%;
}
</style>
</head>
<body>
<?php
	include("connection.php");
	$sql_selectdb=mysqli_select_db($con,"schoolFee");
	if($sql_selectdb){
		echo "database selected";	
	}
// define variables and set to empty values
$fnameErr =$mnameErr =$lnameErr = $idErr= $ageErr= $genderErr= $teleErr = $addressErr = $gradeErr= $sectionErr= $dateErr = "";
$firstname =$middlename =$lastname = $id =$age=$gender = $grade = $section = $tele = $date = $address = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  $firstname = test_input($_POST["first_name"]);
  $middlename = test_input($_POST["middle_name"]);
  $lastname = test_input($_POST["last_name"]);
  $id = test_input($_POST["id"]);
  $age = test_input($_POST["age"]);
  $gender = $_POST["sex"];
  $grade = test_input($_POST["grade"]);
  $section = test_input($_POST["section"]);
  $tele = test_input($_POST["telephone"]);
  $date = test_input($_POST["date"]);
  $address = test_input($_POST["address"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["submit"])) {
  if (empty($_POST["first_name"])) {
    $fnameErr = "first Name is required";
  } 
  else {
    $firstname = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $fnameErr = "Only letters and white space allowed";
	  $firstname="";
    } 
  }
	if (empty($_POST["middle_name"])) {
    $mnameErr = "Middle Name is required";
  } 
  else {
    $middlename = test_input($_POST["middle_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$middlename)) {
      $mnameErr = "Only letters and white space allowed";
	  $middlename="";
    } 
  }
	if (empty($_POST["last_name"])) {
    $lnameErr = "last Name is required";
  } 
  else {
    $lastname = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lnameErr = "Only letters and white space allowed";
    $lastname="";
	}
  }

  if (empty($_POST["id"])) {
    $idErr = "id is required";
  } else {
    $id = test_input($_POST["id"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^BDU[0-9]{6}$/",$id)) {
      $idErr = "invalid id number";
    $id="";
	}
  }

  if (empty($_POST["age"])) {
    $ageErr = "age is required";
  }
  

  if (empty($_POST["grade"])) {
    $gradeErr = "grade is required";
  } 

  if (empty($_POST["section"])) {
    $sectionErr = "section is required";
  } 
  else {
    $section = test_input($_POST["section"]);
	    if (!preg_match("/^[A-Za-z]$/",$section)) {
      $sectionErr = "invalid section ";
    $section="";
	}
  }
  if (empty($_POST["telephone"])) {
    $teleErr = "telephone is required";
  } 
  else {
    $tele = test_input($_POST["telephone"]);
	    if (!preg_match("/^09[0-9]{8}$/",$tele)) {
      $teleErr = "invalid telephone number ";
    $tele="";
	}
  }
  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } 
  else {
    $address = test_input($_POST["address"]);
	    if (!preg_match("/^[A-Za-z0-9 ]*$/",$address)) {
      $addressErr = "invalid address ";
    $address="";
	}
  }
	if($firstname!="" and $middlename!="" and $lastname!="" and $id!="" and $age!=""and $gender!=""
	and $grade!="" and $section!="" and $tele!="" and $date!="" and $address!=""){
 $sql_insert="INSERT INTO student_info (first_name,middle_name,last_name,id,age,sex,grade,section,tele,date,address) VALUES ('$firstname','$middlename','$lastname','$id','$age','$gender','$grade','$section','$tele','$date','$address');";
		$sql_inserting=mysqli_query($con,$sql_insert);
	 if($sql_inserting){
			echo "data inserted successfuly";
		}
		else {
			die(" inserting failed".mysqli_error($con));
		}
	}
else {
	echo "data not inserted";
}	
}
?>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Student Registration</h2>
FIRST NAME:: <input type="text" name="first_name">
<span class="error"value="<?php echo $firstname;?>"><?php echo "<br>".$fnameErr;?></span>
<br>
MIDDLE NAME:: <input type="text" name="middle_name">
<span class="error"value="<?php echo $middlename;?>"><?php echo "<br>".$mnameErr;?></span>
<br>
LAST NAME:: <input type="text" name="last_name">
<span class="error"value="<?php echo $lastname;?>"><?php echo "<br>".$lnameErr;?></span>
<br>
ID:<input type="text" name="id">
<span class="error" value="<?php echo $id;?>"><?php echo "<br>".$idErr;?></span>
<br>
AGE:<input type="number" name="age" min="4" max="40">
<span class="error" value="<?php echo $age;?>"><?php echo "<br>".$ageErr;?></span>
<br>
Gender:<input type="radio" checked name="sex"  value="female">Female
<input type="radio" name="sex"  value="male">Male
<span class="error" ><?php echo "<br>".$genderErr;?></span>
<br>
GRADE:<input type="number" name="grade" min="0" max="12">
<span class="error" value="<?php echo $grade;?>"><?php echo "<br>".$gradeErr;?></span>
<br>
SECTION:<input type="text" name="section">
<span class="error" value="<?php echo $section;?>"><?php echo "<br>".$sectionErr;?></span>
<br>
TELE:<input type="text" name="telephone">
<span class="error" value="<?php echo $tele;?>"><?php echo "<br>".$teleErr;?></span>
<br>
DATE:<input type="date" name="date">
<span class="error" value="<?php echo $date;?>"><?php echo "<br>".$dateErr;?></span>
<br>
ADDRESS:<input type="text" name="address">
<span class="error" value="<?php echo $address;?>"><?php echo "<br>".$addressErr;?></span>
<br>
<input type="submit" name="submit" value="Submit">

</form>
</div>
</body>
</html>