<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	    function check()
  {
        if(document.getElementById("username").value =="")
   {
    alert('first fill username text field !!');
    document.getElementById("username").focus();
    return false;
   }
   if(document.getElementById("fname").value =="")
   {
    alert('first fill firstname text field !!');
    document.getElementById("fname").focus();
    return false;
   }
      if(document.getElementById("lname").value =="")
   {
    alert('first fill last name text field !!');
    document.getElementById("lname").focus();
    return false;
   }
      if(document.getElementById("sex").value =="")
   {
    alert('first fill sex text field!!');
    document.getElementById("sex").focus();
    return false;
   }
      if(document.getElementById("phone").value =="")
   {
    alert('first fill phone text field !!');
    document.getElementById("phone").focus();
    return false;
   }
     if(document.getElementById("addres").value =="")
   {
    alert('first fill addres text field !!');
    document.getElementById("addres").focus();
    return false;
   }
      if(document.getElementById("password").value =="")
   {
    alert('first fill password text field !!');
    document.getElementById("password").focus();
    return false;
   }
       if(document.getElementById("conf").value =="")
   {
    alert('first fill confirm  password text field !!');
    document.getElementById("conf").focus();
    return false;
   }
 
    if(document.getElementById("email").value =="")
   {
    alert('first fill Email text field !!'); 
    document.getElementById("email").focus();
    return false;
   }
   
  }
function formValidation(){
//assign the fields
     	var username = document.getElementById('username');
		var fname=document.getElementById('fname');
	   var lname= document.getElementById('lname');
	//var sex = document.getElementById('sex');
	  var phone = document.getElementById('phone');
	 var Password = document.getElementById('Password');
	 var ConfirmPassword = document.getElementById('ConfirmPassword');
     var email = document.getElementById('email');
if(isAlphabet(fname, "please enter Your First name in letters only")){
if(lengthRestriction(fname, 3, 30,"for your First name")){
if(isAlphabet(lname, "please enter Your Last name in letters only")){
if(lengthRestriction(lname, 3, 30,"for your Last name")){
if(emailValidator(email,"check your E-mail format")){

if(isAlphanumeric(Password,"Please Enter Correct Password")){
	   if(PasswordVal!=ConfirmPasswordVal)
       {
        $('.ShowPasswordNotMatchesError').show();
        }
if(lengthRestriction(Password, 3, 8,"for your Password")){
if(isAlphanumeric(username,"Please Enter Correct Password")){
if(lengthRestriction(username, 3, 25,"for your username")){
if(isNumeric(phone, "please enter Number only For Mobile Phone")){
if(lengthRestriction(phone, 10, 15,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}}
	}}}
	
return false;
		
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
       var PasswordVal=$('.Password').val();
       var ConfirmPasswordVal=$('.ConfirmPassword').val();
       if(PasswordVal!=ConfirmPasswordVal)
       {
        $('.ShowPasswordNotMatchesError').show();
        }
}	