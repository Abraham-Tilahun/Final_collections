function validateform() {
    var y = document.change_password.current_password.value;
    var x = document.change_password.new_password.value;
    var z = document.change_password.confirm_password.value;
    if (y == "" || y == null)
    {
        document.getElementById("current").innerHTML = "yep";
        document.getElementById("new").innerHTML = "";
        document.getElementById("confirm").innerHTML="";
        document.change_password.current_password.focus();
        return false;
    }
    else if (x == "" || x == null)
    {
        document.getElementById("new").innerHTML = "<?php echo $ln_changePasswordCurrent;?>";
        document.getElementById("current").innerHTML = "";
        document.getElementById("confirm").innerHTML="";
        document.change_password.new_password.focus();
        return false;

    }

    else if (z == "" || z == null)
    {
        document.getElementById("confirm").innerHTML = "<?php echo $ln_changePasswordCurrent;?>";
        document.getElementById("current").innerHTML = "";
        document.getElementById("new").innerHTML = "";
        document.change_password.confirm_password.focus();
        return false;
    }
  
    return true;
}