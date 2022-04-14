    function transfer(){
if( document.myForm.fName.value == "" ){
           alert( "Please provide your First name!" );
             document.myForm.fName.focus() ;
              return false;}
if( document.myForm.lName.value == "" ){
            alert( "Please provide Last name!" );
            document.myForm.lName.focus() ;
             return false; }
if( document.myForm.cause.value == "" ) {
            alert( "Please provid  cause!" );
            document.myForm.cause.focus() ;
             return false;}
if( document.myForm.prid.value == "" ){
           alert( "Please provide your identify num!" );
             document.myForm.prid.focus() ;
              return false;}
if( document.myForm.fpname.value == "" ){
            alert( "Please provide your from!" );
            document.myForm.fpname.focus() ;
if( document.myForm.topname.value == "" ){
            alert( "Please provide your to!" );
            document.myForm.topname.focus() ;
             return false; }
 if( document.myForm.date.value == "" ){
            alert( "Please provide your date!" );
            document.myForm.date.focus() ;
             return false; }
return(true);
}