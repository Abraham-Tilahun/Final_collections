function validateform() {
    var a = document.change_password.title.value;
    var  b= document.change_password.content.value;
    
    if (a== "" || a == null)
    {
        document.getElementById("title").innerHTML = "Please Enter Report Title";
        document.getElementById("cont").innerHTML = "";
       document.change_password.title.focus();
        return false;
    }
    else if (b== "" || b == null)
    {
        document.getElementById("cont").innerHTML = "Please Enter you Problem Report";
        document.getElementById("title").innerHTML = "";
        document.change_password.content.focus();
        return false;
    }
   
    else if (b.length<'6')
    {
        document.getElementById("cont").innerHTML = "Please Enter atleast 6 letters";
        document.getElementById("title").innerHTML = "";
       document.change_password.content.focus();
        return false;
    }
    

    return true;
}



