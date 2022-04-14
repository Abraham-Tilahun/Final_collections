function validateRequest(){
    if(document.request.withdraw_type.value=="default"){
        document.getElementById("withdraw_type").innerHTML='Please select withdraw type';
        return false;
        
    }
    else{
        return true;
    }
}