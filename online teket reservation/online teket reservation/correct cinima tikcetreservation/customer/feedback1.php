<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="form.css" />

<script>
	$(document).ready(function(){
    
    //called when key is pressed in textbox
	
	$("#first_name").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if(e.which!=32 &&(e.which<97 || e.which>122) &&(e.which<65||e.which>90))
	  {
		//display error message
		$("#errmsg1").html("Please enter only alphabates ,a-z or A-Z").show().fadeOut("slow"); 
	    return false;
      }	
	});
$("#last_name").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if(e.which!=32 &&(e.which<97 || e.which>122) &&(e.which<65||e.which>90)&& (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg2").html("Please enter only alphabates ,a-z or A-Z").show().fadeOut("slow"); 
	    return false;
      }	
	});

  });
  </script>
</head>

<body bgcolor="#66FFFF">
<center>
<div id="container">
<form action="commentins.php" method="post">
<h3>comment about sport management</h3>

 <div><label for="first_name"> First Name</label> <input type="text" name="first_name" id="first_name" authofocus /><span style="background:white; color:red; border: solid white 1px;" id="errmsg1"> </div><br>
 <div><label for="last_name">Last Name</label><input type="text" name="last_name" id="last_name" /><span style="background:white; color:red; border: solid white 1px;" id="errmsg2"></div><br>
 
<div><label  for="email"> Email</label><input type="text" name="email" id="email"/></div><br>
<div><label for="comment"> Comment</label> <textarea cols="60" rows="4" name="comment" ></textarea> </div><br>
   
<div id="lower"><input type="submit" value="Submit" />
      <input type="submit" value="Cancel" /></div>
     
 </form>
 </div>
 </center>
</body>
</html>
