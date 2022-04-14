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
