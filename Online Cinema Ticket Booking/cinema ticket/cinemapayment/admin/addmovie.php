
<script type="text/javascript">
function validateForm()
{


 var e=document.forms["addroom"]["image"].value;
if (e==null || e=="")
  {
  alert("Pls. browse an image");
  return false;
  }

}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}

</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
  movie_Id<br />
  <input name="pro_id" type="text" class="ed" pattern="\d{1,10}" required x-moz-errormessage="Please Enter Number Only " title="Please Enter Number Only "  /><br />
  total seat<br />
  <input name="qnt" type="text" class="ed" pattern="\d{1,10}" required x-moz-errormessage="Please Enter Number Only " title="Please Enter Number Only "  /><br />
 movie type<br />
  <input name="model" type="text" class="ed" pattern="\w{1,30}" required x-moz-errormessage="Please Enter The movie type " title="Please Enter The movie type"  /><br />
 movieName<br />
    <input name="rate" type="text" id="rate" class="ed" pattern="\D{1,30}" required x-moz-errormessage="Please Enter The movie name " title="Please Enter The BrandName"  /><br />
 
 movie seen timee<br />
    <input name="desc" type="text" class="ed" pattern="\D{1,30}" required x-moz-errormessage="Please Enter The movie seen time " title="Please Enter Themovie seen time "  /><br />
	
	moviet_price<br />
    <input name="des" type="text" class="ed"  pattern="\d{1,30}" required x-moz-errormessage="Please Enter The movie price Price Number only " title="Please Enter The movie Price Number only "  /><br />
	movie Description<br />
   <textarea cols="21" rows="5" name="de" class="ed" pattern="\w{1,30}" required x-moz-errormessage="Please Enter The Product Description " title="Please Enter The Product Description "  maxlength="200" placeholder='Please write the Description of the product...'></textarea><br />
    
 movie Image: <br /><input type="file" name="image" class="ed" required x-moz-errormessage="Please Browse Image " title="Please Browse Image "><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
