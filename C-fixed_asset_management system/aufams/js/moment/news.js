function printDiv() {
    var printContents = document.getElementById("printableArea").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
    return true;
}
function validateform() {
    var y = document.change_password.current_password.value;
    var x = document.change_password.new_password.value;
    var z = document.change_password.confirm_password.value;
    if (y == "" || y == null)
    {
        document.getElementById("current").innerHTML = "Please Enter Current Password";
        document.getElementById("new").innerHTML = "";
        document.getElementById("confirm").innerHTML = "";
        document.change_password.current_password.focus();
        return false;
    }
    else if (x == "" || x == null)
    {
        document.getElementById("new").innerHTML = "Please Enter New Password";
        document.getElementById("current").innerHTML = "";
        document.getElementById("confirm").innerHTML = "";
        document.change_password.new_password.focus();
        return false;

    }

    else if (z == "" || z == null)
    {
        document.getElementById("confirm").innerHTML = "Please Enter Confirmation Password ";
        document.getElementById("current").innerHTML = "";
        document.getElementById("new").innerHTML = "";
        document.change_password.confirm_password.focus();
        return false;
    }

    return true;
}

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
