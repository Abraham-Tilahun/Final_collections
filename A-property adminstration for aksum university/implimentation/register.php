<?php
include("date.php");
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Aksum University property Administration system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
  <script type="text/javascript" language="javascript" src="js/liveValidation.js"></script>
   <script type="text/javascript" language="javascript">
</script>
 <style type="text/css">
 <script language="javascript">
function formValidation(){
//assign the fields
     	var username = document.getElementById('username');
		var fname=document.getElementById('fname');
	   var lname= document.getElementById('lname');
	//var sex = document.getElementById('sex');
	  var phone = document.getElementById('phone');
	 
 }
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>

<script>
function RegistrationValidation()
{
       var Password=$('.Password').val();
       var verify=$('.confirmpassword').val();
       if(Password!=confirmpassword)
       {
        $('.ShowPasswordNotMatchesError').show();
        }
}
</script>	


</head>

.container {
    overflow: hidden;
    background-color: #F5FFFA;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: #F5FFFA;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: Black;
    padding: 14px 16px;
 
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: #F5FFFA;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #F5FFFA;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 14px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color:green;
}

.dropdown:hover .dropdown-content {
    display: block;
	font-size: 14px
}
  </style>

</head>

<body>
<script type="text/javascript">
    $(function () {
        $("#new_password").bind("keyup", function () {
            //TextBox left blank.
            if ($(this).val().length == 0) {
                $("#password_strength").html("");
                return;
            }
 
            //Regular Expressions.
            var regex = new Array();
            regex.push("[A-Z]"); //Uppercase Alphabet.
            regex.push("[a-z]"); //Lowercase Alphabet.
            regex.push("[0-9]"); //Digit.
            regex.push("[$@$!%*#?&]"); //Special Character.
 
            var passed = 0;
 
            //Validate for each Regular Expression.
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                }
            }
 
 
            //Validate for length of Password.
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
 
            //Display status.
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "Weak";
                    color = "red";
                    break;
                case 2:
                    strength = "Good";
                    color = "darkorange";
                    break;
                case 3:
                case 4:
                    strength = "Strong";
                    color = "green";
                    break;
                case 5:
                    strength = "confirmpassword Strong";
                    color = "darkgreen";
                    break;
            }
            $("#password_strength").html(strength);
            $("#password_strength").css("color", color);
        });
    });
</script>
	<div id="menubar">
      <ul id="menu">
        <li><a href="adminpage.php">Home</a></li>
		<div class="dropdown">
		 <div class="dropdown-content">	
		  </div>
        </div>
		<li><a href="ViewUser.php">View User</a></li>
        <li><a href="view_fedback.php">View Fedback</a></li>
		<div class="dropdown"><button class="dropbtn" color="black"><b></b>Manage user account</button>
		 <div  style="float:right" class="dropdown-content">
		 <a href="register.php">Register New Employee</a></li>
		 <a href="Accountmanage.php">Edit Employee Account </a>
		  </div>
        </div>
		<div style="float:right">
		<div class="dropdown"><button class="dropbtn" color="black"><b></b><img width="15" height="15" src="images/default.png"/></button>
		 <div  style="float:right" class="dropdown-content">
		  <a href="passchange.php">Change Password</a>
		  <a href="login.php"/>Logout</a>
		  </div>
        </div>	
		</div>
		</div>
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
             <body bgcolor=#9494B8>
<h3>Calender</h3>
	  <script src="css/calander.js" language="javascript" type="text/javascript"></script> 
        
	   <br><br><br><br><br><br><br>
	 <h3
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
</table></body>
			<div id="menubar1">
	  <ul id="menu">
	    </ul>
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style17"> System AdministrationPage</span></th>
        </tr>
      </table>
	 
	  <div class="sidebar">
          
        </div>
            </div>

        </div>
          
        </div>
      </div>
	 
	
	  <div id="content">
<html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:700px; height:620px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); -webkit-border-radius:10px; -mozborder-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
  <form id="form1" name="login" method="POST" action="reg.php" onsubmit="formValidation()">
 <div style="background-color:#336699;border-radius:10px;font-family:Arial, Helvetica, sans-serif; color:#; padding:5px; height:30px;"> 
 <div style="float:left;" ><strong><font color="white" size="5px">Employee Registration Form</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:18px;  text-align:center; border-radius:10px; height:12px;">
<a href="adminpage.php" title="Close"><img src="images/back.png"></a></div>
 </div>
  <table width="350" align="center" height="150px">
  <tr>
    <td colspan="10"><div style="font-family:Arial, Helvetica, sans-serif; color:#none; font-size:18px;">
	<table cellpadding="15" align="center"cellspacing="15">
</div></td>
  </tr>   
  <br>
      <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Firest Name:</td>
		 <td><input type="Fname" name="Fname" size="30"required ="enter your Firest Name"pattern="[A-Za-z]{3,21}"required x-moz-errormessage="enter letter from 3 to 21 character for your Firestname" ></td>
	     </tr>
       <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Midle Name:</td>
		 <td><input type="Mname" name="Mname" size="30"required ="enter your Midle Name"pattern="[A-Za-z]{3,21}"required x-moz-errormessage="enter letter from 3 to 21 character for your Mname" ></td>
	     </tr>
		  <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Last Name:</td>
		 <td><input type="Lname" name="Lname" size="30"required ="enter your last Name"pattern="[A-Za-z]{3,21}"required x-moz-errormessage="enter letter from 3 to 21 character for your Lname" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>User Name:</td>
		 <td><input type="username" name="username" size="30"required ="enter your username"pattern="[A-Za-z]{3,21}"required x-moz-errormessage="enter letter from 3 to 21 character for your username" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Password:</td>
		 <td><input type="password" name="password" size="30" required x-moz-errormessage="please fill strong  Password" pattern="[0-9&A-Za-z]{4,24}"></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>ConfirmPassword:</td>
		 <td><input type="password" name="confirmpassword" size="30" required =" please fill strong Confirm password " pattern="[0-9&A-Za-z]{4,24}" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Phone Number:</td>
		 <td><input type="phone_number" name="phone_number" size="30" required ="Phone Number"pattern="[0-9]{10,12}"required x-moz-errormessage="Enter Phone Number" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Email Address:</td>
		 <td><input type="email" name="email_address" size="30" required ="email_address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,40}$" required=" required" Enter easily memoraizable wordplaceholder="Invalid Email,please enter valid Email"></td>
	     </tr>
		 <tr>
     <td><font color="red">*</font>Gender:</td>
     <td><input type="radio" name="Gender" value="male" size="10">Male
    <input type="radio" name="Gender" value="Female" size="10">Female</td>
     </tr>
	 <tr>
		 <td class='para1_text' width="220px"><font color="red">*</font> Brith Date:</td>
		 <td><input type="text"  name="brith_Date" id="brith_Date" size="30" onclick="ds_sh(this);" placeholder="brith_Date" autocomplete="off">
	     
		 </tr>
		  <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Salary:</td>
		 <td><input type="salary" name="salary" size="30" required ="enter Salary"pattern="[0-9]{4,12}"required x-moz-errormessage="please Enter Salary" ></td>
	     </tr>
	
		  <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Position:</td>
		 <td><select name="usertype" required>
									<option></option>
									<option>admin</option>
									<option>Storeman</option>
									<option>User</option>
									<option>Departmenthead</option>
									<option>Collegedean</option>
									<option>Vicpresident</option>
									<option>Financedirectory</option>	
                               </tr>
		        <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font>Department:</td>
		 <td><select name="department" required>
	     <option></option>
				<option>Computing</option>
				<option>Mechanical</option>
				<option>Electrical</option>
				<option>CoTM</option>
				<option>Textile</option>
				<option>Civil</option>
				<option>Hydraulics</option>
				<option>Textile</option>
				<option>Civil</option>
				<option>Hydraulics</option>
				<option>Textile</option>
				<option>Civil</option>
				<option>Hydraulics</option>
		 </tr>
		 
             <tr>
              <th height="34" colspan="12" align="center" scope="row"><label>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="Register" value="Register"style="width:70px;"  />
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Submit2" value="Cancel"style="width:70px;" />
            </tr>

</table> 
  </form>
  <script type="text/javascript">
var password = new LiveValidation('password',{validMessage:"Correct"});
password.add( Validate.Presence );
password.add( Validate.Length, { minimum: 6, maximum: 15 } );
var confirmpassword = new LiveValidation('confirmpassword',{validMessage:"Correct"});
confirmpassword.add( Validate.Presence );
confirmpassword.add( Validate.Length, { minimum: 6, maximum: 15 } );
confirmpassword.add( Validate.Confirmation, { match: 'password' } );
</script>
	  </div>
    </div>
</body>
</html>
