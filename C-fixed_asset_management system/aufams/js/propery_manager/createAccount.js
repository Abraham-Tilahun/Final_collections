function createForm() {
    var letters = /^[A-Za-z]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

    if (document.create.fname.value == "" || document.create.fname.value == null) {
        document.getElementById("fname").innerHTML = "Please Enter First Name";
        document.create.fname.focus();
        return false;
    }
    if (!letters.test(document.create.fname.value )) {
        document.getElementById("fname").innerHTML = "Please Enter Letter Only";
        document.create.fname.focus();
        return false;
    }
   
    if (document.create.lname.value == "" || document.create.lname.value == null) {
        document.getElementById("lname").innerHTML = "Please Enter Last Name";
        document.getElementById("fname").innerHTML = '';
        document.create.lname.focus();
        return false;
    }
     if (!letters.test(document.create.lname.value )) {
        document.getElementById("lname").innerHTML = "Please Enter Letter Only";
        document.create.lname.focus();
        return false;
    }
    if (document.create.email.value == "" || document.create.email.value == null) {
        document.getElementById("email").innerHTML = "Please Enter Email";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.create.email.focus();
        return false;
    }
    if (!mailformat.test(document.create.email.value)) {
        document.getElementById("email").innerHTML = "Please Enter Valid Email adress";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.create.email.focus();
        return false;
    }
    if (document.create.confirm_email.value == "" || document.create.confirm_email.value == null) {
        document.getElementById("confirme").innerHTML = "Please Enter Confirmation  Email";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.create.confirm_email.focus();
        return false;
    }
    if (document.create.confirm_email.value != document.create.email.value) {
        document.getElementById("confirme").innerHTML = " Confirmation  Email Does not Match";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.create.confirm_email.focus();
        return false;
    }
    if (document.create.occupation.value == "" || document.create.occupation.value == null) {
        document.getElementById("occupation").innerHTML = " Please Enter users Occupation";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.create.occupation.focus();
        return false;
    }
    if (document.create.password1.value == "" || document.create.password1.value == null) {
        document.getElementById("password1").innerHTML = " Please Enter Password";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.create.password1.focus();
        return false;
    }
    if (document.create.password2.value == "" || document.create.password2.value == null) {
        document.getElementById("password2").innerHTML = " Please Enter Password";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.getElementById("password1").innerHTML = '';
        document.create.password2.focus();
        return false;
    }
    if (document.create.password2.value != document.create.password1.value) {
        document.getElementById("password2").innerHTML = " Confirmation Password not Match";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.getElementById("password1").innerHTML = '';
        document.create.password2.focus();
        return false;
    }
    if (document.create.user_type.value == "default") {
        document.getElementById("user_type").innerHTML = " Please Select User Type";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.getElementById("password1").innerHTML = '';
        document.getElementById("password2").innerHTML = '';
        document.create.user_type.focus();
        return false;
    }
    if (document.create.phone.value == "") {
        document.getElementById("phone").innerHTML = " Please Enter Phone Number";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.getElementById("password1").innerHTML = '';
        document.getElementById("password2").innerHTML = '';
        document.getElementById("user_type").innerHTML = '';
        document.create.phone.focus();
        return false;
    }
    if (document.create.phone.value.Length < '9') {
        document.getElementById("phone").innerHTML = " Phone number Length is At minimum 10";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.getElementById("password1").innerHTML = '';
        document.getElementById("password2").innerHTML = '';
        document.getElementById("user_type").innerHTML = '';
        document.create.phone.focus();
        return false;
    }
    if (document.create.adress.value == "") {
        document.getElementById("adress").innerHTML = " Please Enter Address";
        document.getElementById("fname").innerHTML = '';
        document.getElementById("lname").innerHTML = '';
        document.getElementById("email").innerHTML = '';
        document.getElementById("confirme").innerHTML = '';
        document.getElementById("occupation").innerHTML = '';
        document.getElementById("password1").innerHTML = '';
        document.getElementById("password2").innerHTML = '';
        document.getElementById("user_type").innerHTML = '';
        document.create.adress.focus();
        return false;
    }
    else {
        return true;
    }
}

