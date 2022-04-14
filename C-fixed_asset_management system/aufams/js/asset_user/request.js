function validRequest() {
    var a = document.request.aname.value;
    var  b= document.request.type.value;
    var c = document.request.quantity.value;
    var d = document.request.note.value;
    if (a== "" || a == null)
    {
        document.getElementById("aname").innerHTML = "Please Enter an Asset Name";
        document.getElementById("type").innerHTML = "";
        document.getElementById("quantity").innerHTML = "";
        document.request.aname.focus();
        return false;
    }
    else if (c== "" || c == null)
    {
        document.getElementById("quantity").innerHTML = "Please Enter Number asset";
        document.getElementById("type").innerHTML = "";
        document.getElementById("aname").innerHTML
        document.getElementById("quantity").innerHTML = "";
        document.request.quantity.focus();
        return false;
    }
    else if (d== "" || d == null)
    {
        document.getElementById("note").innerHTML = "Please Enter Description of withdraw";
        document.getElementById("type").innerHTML = "";
        document.getElementById("aname").innerHTML
        document.getElementById("quantity").innerHTML = "";
        document.request.note.focus();
        return false;
    }
    else if (d.length<'6')
    {
        document.getElementById("note").innerHTML = "Please Enter atleast 6 letters";
        document.getElementById("type").innerHTML = "";
        document.getElementById("aname").innerHTML
        document.getElementById("quantity").innerHTML = "";
        document.request.note.focus();
        return false;
    }
    

    return true;
}
