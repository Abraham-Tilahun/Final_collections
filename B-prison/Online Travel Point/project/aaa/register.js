   
    function Register(){
if( document.myForm.fname.value == "" ){
           alert( "Please provide your First name!" );
             document.myForm.fname.focus() ;
              return false;}
if( document.myForm.lname.value == "" ){
            alert( "Please provide Last name!" );
            document.myForm.lname.focus() ;
             return false; }
if( document.myForm.Address.value == "" ) {
            alert( "Please provid  Address!" );
            document.myForm.Address.focus() ;
             return false;}
if( document.myForm.Datec.value == "" ){
           alert( "Please provide your date of conveciton!" );
             document.myForm.Datec.focus() ;
              return false;}
if( document.myForm.region.value == "" ){
            alert( "Please provide your Region!" );
            document.myForm.region.focus() ;
             return false; }
if( document.myForm.Courtc.value == "" ) {
            alert( "Please provide date of conveciton!" );
            document.myForm.Courtc.focus() ;
             return false;}
	
if( document.myForm.prid.value == "" ){
            alert( "Please provide identify num!" );
            document.myForm.prid.focus() ;
             return false; }
			 
if( document.myForm.court.value == "" ) {
            alert( "Please provide court!" );
            document.myForm.court.focus() ;
             return false;}
			 
if( document.myForm.age.value == "" ) {
            alert( "Please provide age!" );
            document.myForm.age.focus() ;
             return false;}
			 
if( document.myForm.sex.value == "" ) {
            alert( "Please provide sex!" );
            document.myForm.sex.focus() ;
             return false;}
if( document.myForm.crimeCode.value == "" ) {
            alert( "Please provide crime code!" );
            document.myForm.crimeCode.focus() ;
             return false;}	
if( document.myForm.Judement.value == "" ) {
            alert( "Please provide Judement!" );
            document.myForm.Judement.focus() ;
             return false;}
if( document.myForm.offty.value == "" ) {
            alert( "Please provide offence committed!" );
            document.myForm.offty.focus() ;
             return false;}			 



return(true);
}  
