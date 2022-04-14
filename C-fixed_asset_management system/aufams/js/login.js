function loginform() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var y = document.login.email.value;
    var x = document.login.password.value;
    if (y == "" || y == null) {
        document.getElementById("email").innerHTML = "Please Enter Email";
        document.getElementById("password").innerHTML = "";
        document.login.email.focus();
        return false;
    }
    else if (!mailformat.test(y)) {
        document.getElementById("email").innerHTML = "Please Enter  Valid Email format";
        document.getElementById("password").innerHTML = "";
        document.login.email.focus();
        return false;

    }
    else if (x == "" || x == null) {
        document.getElementById("password").innerHTML = "Please Enter password";
        document.getElementById("email").innerHTML = "";
        document.login.password.focus();
        return false;

    }
    
    return true;

}
