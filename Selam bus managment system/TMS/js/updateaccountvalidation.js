$(function(){
	$("#uname_error").hide();
	$("#pass_error").hide();
	$("#role_error").hide();
	var uname=false;
	var pas=false;
	var rol=false;
	$("#un").focusout(function(){
		check_uname();
	});
	$("#pass").focusout(function(){
		check_password();
	});
	$("#role").focusout(function(){
		check_role();
	});
	//for user name
		function check_uname()
	{
		var una=$("#un").val();
		var len=$("#un").val().length;
		var pattern = /^[A-Z][a-z]*$/;
		if(una=="")
		{
			uname=true;
			$("#uname_error").html("please fill form");
			$("#uname_error").show();
			$("#un").css("border-bottom","1px solid red");
		}
		 else if(len < 3 || len > 25)
		{
		  uname=true;
			$("#uname_error").html("please enter betwwen 3-25 character");
			$("#uname_error").show();
			$("#un").css("border-bottom","2px solid red");
		}
		else 
		if(pattern.test(una) == "")
	{
	uname=true;
			$("#uname_error").html("please enter  valid character");
			$("#uname_error").show();
			$("#un").css("border-bottom","2px solid red");
	}
		else 
		{
			uname=false;
			$("#un").css("border-bottom","1px solid green");
			$("#uname_error").hide();
		}
	}
		//password
		function check_password()
	{
		var p=$("#pass").val();
		var len=$("#pass").val().length;
		if(p=="")
		{
			pas=true;
			$("#pass_error").html("please fill form");
			$("#pass_error").show();
			$("#pass").css("border-bottom","1px solid red");
		}
		else 
		if(len < 8)
				{
			pas=true;	
		$("#pass_error").html("please enter more than 8 ");
		$("#pass_error").show(); 
		$("#pass").css("border-bottom","1px solid red");
				}
			else
				
		{
			pas=false;
			$("#pass").css("border-bottom","1px solid green");
			$("#pass_error").hide();
		}
	}
		//role
		function check_role()
	{
		var ro=$("#role").val();
		if(ro=="")
		{
			rol=true;
			$("#role_error").html("please fill form");
			$("#role_error").show();
			$("#role").css("border-bottom","1px solid red");
		}
			else
		{
			rol=false;
			$("#role").css("border-bottom","1px solid green");
			$("#role_error").hide();
		}
	}
	$("#cform").submit(function(){
	   uname=false;
	   pas=false;
	   rol=false;
	   check_uname();
	   check_password();
	   check_role();
	   //for user name
	   if(uname === false && pas === false && rol==false )
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	});
});