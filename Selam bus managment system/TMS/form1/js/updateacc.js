$(function(){
	$("#fname_error").hide();
	$("#new_name_error").hide();
	$("#old_password_error").hide();
	$("#new_password_error").hide();
	$("#con_password_error").hide();
	var fnam=false;
	var nnam=false;
	var opas=false;
	var npas=false;
	var cpas=false;
	$("#oname").focusout(function(){
		check_oname();
	});
	$("#nname").focusout(function(){
		check_nname();
	});
	$("#opass").focusout(function(){
		check_opass();
	});
	$("#npass").focusout(function(){
		check_npass();
	});
	$("#cpass").focusout(function(){
		check_cpass();
	});
	//
	function check_oname()
	{
		var name1=$("#oname").val();
		if(name1=="")
		{
			fnam=true;
			$("#old_name_error").html("please fill form");
			$("#old_name_error").show();
			$("#oname").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#oname").css("border-bottom","1px solid green");
			$("#old_name_error").hide();
		}
	}
	//for new name
		function check_nname()
	{
		var name2=$("#nname").val();
		if(name2=="")
		{
			nnam=true;
			$("#new_name_error").html("please fill form");
			$("#new_name_error").show();
			$("#nname").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#nname").css("border-bottom","1px solid green");
			$("#new_name_error").hide();
		}
	}
	//old password
		function check_opass()
	{
		var op=$("#opass").val();
		if(op=="")
		{
			opas=true;
			$("#old_password_error").html("please fill form");
			$("#old_password_error").show();
			$("#opass").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#opass").css("border-bottom","1px solid green");
			$("#old_password_error").hide();
		}
	}
		//old password
		function check_npass()
	{
		var np=$("#npass").val();
		if(np=="")
		{
			npas=true;
			$("#new_password_error").html("please fill form");
			$("#new_password_error").show();
			$("#npass").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#npass").css("border-bottom","1px solid green");
			$("#new_password_error").hide();
		}
	}
		//confirm password
		function check_cpass()
	{
		var cp=$("#cpass").val();
		if(cp=="")
		{
			cpas=true;
			$("#con_password_error").html("please fill form");
			$("#con_password_error").show();
			$("#cpass").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#cpass").css("border-bottom","1px solid green");
			$("#con_password_error").hide();
		}
	}
	$("#accform").submit(function(){
	   fnam=false;
	   nnam=false;
	   pho=false;
	   check_oname();
	   check_nname();
	   check_opass();
	   check_npass();
	   check_cpass();
	   if(fnam === false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	   //for new name
	   if(nnam === false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	    //for  old
	   if(opas === false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	      //for new pass
	   if(npas === false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	   if(cpas==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	});
});