function validateform() {
    var y = document.change_password.current_password.value;
    var x = document.change_password.new_password.value;
    var z = document.change_password.confirm_password.value;
    if (y == "" || y == null)
    {
        document.getElementById("current").innerHTML = "<?php echo $ln_changePasswordCurrent;?>";
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
function registerAsset() {
    var x = document.register.aname.value;
    var y = document.register.amodel.value;
    if (x == "") {
        document.getElementById("aname").innerHTML = "please enter asset name";
        document.register.aname.focus();
        return false;
    }
   else if (document.register.quantity.value == "") {
        document.getElementById("quantity").innerHTML = "please enter quantity";
        document.getElementById("amodel").innerHTML = "";
        document.getElementById("aname").innerHTML = "";
        document.register.quantity.focus();
        return false;
    }

    else if (document.register.price.value == "") {
        document.getElementById("price").innerHTML = "please enter price";
        document.getElementById("quantity").innerHTML = "";
        document.getElementById("amodel").innerHTML = "";
        document.getElementById("aname").innerHTML = "";
        return false;
    }

    return true;

}
function generateReport() {
   if (document.create.content.value == "") {
        document.getElementById("contents").innerHTML = "Please write some description of the report";
        document.create.contents.focus();
        return false;
    }
    
    return true;
  
}
