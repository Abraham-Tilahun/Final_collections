<?php
	include("includes/db.php");

  
 session_start();



if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
  
 }
 else 
 {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<?php
include('db.php');
$busnum=$_POST['movie_name'];
$date=$_POST['date'];
$qty=$_POST['qty'];
$result = mysql_query("SELECT * FROM movie_name WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysql_query("SELECT sum(seat_reserve) FROM reserve where date = '$date'");
							while($rows = mysql_fetch_array($query))
							  {
							  $inogbuwin=$rows['sum(seat_reserve)'];
							  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
	}
?>
<?php
if ($avail < $qty){
echo 'Qty reserve exced the available seat of the cinema hall';
}
else if($avail > 0)
{
?>

<script type="text/javascript">
function validate()
{
 
	 
if(document.form.fname.value=="")
   { alert("Please fill first name!" );
    document.form.fname.focus() ;
    return false;
   }
   var str=document.form.fname.value;
		   if(str.length>1 && str.length<40)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert  letters only");
	          document.form.fname.value="";
	          document.form.fname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for your name.");
		         document.form.fname.value="";
	             document.form.fname.focus();
	             return false;
		      } 
			  
			  
  if(document.form.lname.value=="")
   { alert("Please fill  last name!" );
    document.form.lname.focus() ;
    return false;
   }
   var str=document.form.lname.value;
		   if(str.length>2 && str.length<42)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for last name");
	          document.form.lname.value="";
	          document.form.lname.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for last name.");
		         document.form.lname.value="";
	             document.form.lname.focus();
	             return false;
		      } 
			  
 if(document.form.address.value=="")
   { alert("Please fill address  " );
    document.form.address.focus() ;
    return false;
   }
   var str=document.form.address.value;
		   if(str.length>1 && str.length<42)
		   {
	       var valid="abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ ";
	      for(i=0;i<str.length;i++)
	       {
	        if(valid.indexOf(str.charAt(i))==-1)
	         {
	          alert("please insert alphabet characters for address " );
	          document.myform.address.value="";
	          document.myform.address.focus();
	          return false;
	         }
	       }
		  }
		 else
		      {
		         alert("please enter at least three alphabet characters for address.");
		         document.myform.address.value="";
	             document.myform.address.focus();
	             return false;
		      } 
			  		  
if(document.myform.contact.value=="")
	{
	alert("please enter contact ");
	document.myform.contact.value="";
	document.myform.contact.focus();
	return false;
	}
	if(document.myform.contact.value<="17")
	{
	alert("  contact  can not less than 10");
	document.myform.contact.value="";
	document.myform.contact.focus();
	return false;
	}
	var str=document.myform.contact.value;
	var valid="0123456789";
	for(i=18;i<str.length;i++)
	{
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("please insert age number only number");
	document.myform.contact.value="";
	document.myform.contact.focus();
	return false;
	}
	}	
	
}

</script>
<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<label>Seat Number
<span class="small"> <a rel="facebox" href="seatlocation.php?id=<?php echo $busnum; ?>"></a></span>
</label>
<input type="text" name="setnum" value="
<?php
$N = $qty;
for($i=0; $i < $N; $i++)
{
echo $i+$setnum.', ';
} 
 ?>
" id="name" readonly/><br>
<label>First Name
<span class="small">Enter first name</span>
</label>
<input data-progression="" TYPE="text" name="fname" id="fname" placeholder="enter only texts for first name"required="required" CLASS="basetxt" TABINDEX="2" data-helper="fill!"   >

<!--<input type="text" name="fname"  id="name"/><br>-->
<label>Last Name
<span class="small">Enter last name</span>
</label><!--
<input type="text" name="lname"  id="name"/><br>-->
<input data-progression="" TYPE="text" name="lname" id="name" placeholder="enter only texts for last name"required="required" CLASS="basetxt" TABINDEX="4" data-helper="fill!"   >

<label>Address
<span class="small">Enter Address</span>
</label><!--
<input type="text" name="address"  id="name"/><br>
<label>Contact-->
<input data-progression="" TYPE="text" name="address" id="name" placeholder="enter only texts for address"required="required" CLASS="basetxt" TABINDEX="6" data-helper="fill!"   >

<span class="small">Enter Contact Number</span>
</label>
<input type="number" name="contact"  id="name" placeholder="enter only numbers for contact"/><br>
<!--<input data-progression="" TYPE="number" name="contact number" id="name" placeholder="enter only numbers for contact"required="required" CLASS="basetxt" TABINDEX="8" data-helper="fill!"   >-->

<button type="submit">Confirm</button>
</form>
</div>
<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
?>