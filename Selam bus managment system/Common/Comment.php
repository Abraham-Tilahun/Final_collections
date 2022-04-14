<?php
if(isset($_POST['name'])) {
	include("../Common/connection.php");
	mysql_query("insert into comment values('', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['body']."')");
     echo "Commented  Successfully ";
}
?>
<html>
<head>
<link href="formmapt.css" rel="stylesheet" type="text/css" />

<style type="text/css">
	.error {
		  	color: red;
		  	display: none;
		}  
</style>
</head>  
<body>
<center>
<br>
<h2> Give Comment</h2>
<div class = "Comment" style ="width:700px;margin-left:50px; border: 1px solid black; padding-top: 20px; border-radius: 10px;">
<img src="../image/comment.gif" align="left" width="220" height="200" color="#ffffcc">
<form name="f1" action="?" method="post" onsubmit="return check()">  
<table  border = "0 "style="color:black"width: 372px; margin-left: 0px>
<tr>
	<td>Sender Name:</td><td><input type="text" name="name" id="sender_name"></td>
	<td id="sender_name_error" class="error">Please fill your name</td>
		<td id="sender_name_2" class="error">name should be string only</td>
</tr> 
<tr>
	<td>Sender Email*:</td><td><input type="email" name="email" id="email"></td>
	<td id="email_error" class="error">email address is required</td>
		

</tr> 
<tr>

	<td>Your Message:</td><td><textarea  name="body" id="message" style="height:150px;width:200px;" ></textarea></td>
	<td id="message_error" class="error">write your comment</td>
	

</tr> 
<tr><td colspan="2"><center><input type="submit" value="Send"> 
<input type="reset" value="Cancel" name="Cancel"id="b2"/></div>
</center> </td></tr>
</table>
</form>
</div>
<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var stringWithSpace = /^[a-zA-Z_ ]*$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp1 = /^\d{3}\d{3}\d{4}$/;
		
		if(document.getElementById("sender_name").value=="")  {
			document.getElementById('sender_name_2').style.display = "block";
			return false;
		} else {
			document.getElementById('sender_name_2').style.display = "none";
		}
		
		if (document.getElementById("message").value=="") {
			document.getElementById('message_error').style.display="block";
			return false;
		}
		else{
			document.getElementById("message_error").style.display="none";
		}
		

	}
</script>
</body>  
</html>