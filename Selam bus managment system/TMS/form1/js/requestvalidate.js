$(function(){
	$("#fname_error").hide();
	$("#fathername_error").hide();
	$("#phone_error").hide();
	$("#kebele_error").hide();
	$("#request_error").hide();
	$("#bordno_error").hide();
	$("#sideno_error").hide();
	$("#noset_error").hide();
	var fnam=false;
	var fanam=false;
	var pho=false;
	var keb=false;
	var reque=false;
	var bor=false;
	var si=false;
	var ss=false;
	$(".textInput").focusout(function(){
		check_fname();
	});
	$("#father").focusout(function(){
		check_faname();
	});
	$("#phon").focusout(function(){
		check_phone();
	});
	$("#kebele").focusout(function(){
		check_kebele();
	});
	$("#req").focusout(function(){
		check_request();
	});
	$("#bord").focusout(function(){
		check_bordno();
	});
	$("#side").focusout(function(){
		check_sideno();
	});
	$("#set").focusout(function(){
		check_noset();
	});
	//
	function check_fname()
	{
		var name1=$(".textInput").val();
		if(name1=="")
		{
			fnam=true;
			$("#fname_error").html("please fill form");
			$("#fname_error").show();
			$(".textInput").css("border-bottom","1px solid red");
		}
		else 
		{
			$(".textInput").css("border-bottom","1px solid green");
			$("#fname_error").hide();
		}
	}
	//
	function check_faname()
	{
		var name2=$("#father").val();
		if(name2=="")
		{
			fanam=true;
			$("#fathername_error").html("please fill form");
			$("#fathername_error").show();
			$("#father").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#father").css("border-bottom","1px solid green");
			$("#fathername_error").hide();
		}
	}
	
	//phone_error
	function check_phone()
	{
		var p=$("#phon").val();
		if(p=="")
		{
			pho=true;
			$("#phone_error").html("please fill form");
			$("#phone_error").show();
			$("#phon").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#phon").css("border-bottom","1px solid green");
			$("#phone_error").hide();
		}
	}
	//for kebele
	function check_kebele()
	{
		var k=$("#kebele").val();
		if(k=="")
		{
			keb=true;
			$("#kebele_error").html("please fill form");
			$("#kebele_error").show();
			$("#kebele").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#kebele").css("border-bottom","1px solid green");
			$("#kebele_error").hide();
		}
	}
	//for request
	function check_request()
	{
		var r=$("#req").val();
		if(r=="")
		{
			reque=true;
			$("#request_error").html("please fill form");
			$("#request_error").show();
			$("#req").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#req").css("border-bottom","1px solid green");
			$("#request_error").hide();
		}
	}
	//for bordno
	function check_bordno()
	{
		var b=$("#bord").val();
		if(b=="")
		{
			bor=true;
			$("#bordno_error").html("please fill form");
			$("#bordno_error").show();
			$("#bord").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#bord").css("border-bottom","1px solid green");
			$("#bordno_error").hide();
		}
	}
	//for sideno
	function check_sideno()
	{
		var s=$("#side").val();
		if(s=="")
		{
			si=true;
			$("#sideno_error").html("please fill form");
			$("#sideno_error").show();
			$("#side").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#side").css("border-bottom","1px solid green");
			$("#sideno_error").hide();
		}
	}
	//for noset
	function check_noset()
	{
		var se=$("#set").val();
		if(se=="")
		{
			si=true;
			$("#noset_error").html("please fill form");
			$("#noset_error").show();
			$("#set").css("border-bottom","1px solid red");
		}
		else 
		{
			$("#set").css("border-bottom","1px solid green");
			$("#noset_error").hide();
		}
	}
	$("#requestform").submit(function(){
	   fnam=false;
	   fanam=false;
	   pho=false;
	   keb=false;
	   req=false;
	   bor=false;
	   si=false;
	   ss=false;
	   check_faname();
	   check_fname();
	   check_phone();
	   check_kebele();
	   check_request();
	   check_bordno();
	   check_sideno();
	   check_noset();
	   if(fnam === false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	   //fathername
	   if(fanam ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	    //phone number
	   if(pho ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	     //for kebele
	   if(keb ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	      //for request
	   if(reque ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	         //for bordno
	   if(bor ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	           //for sideno
	   if(si ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	    if(ss ==false)
	   {
		   return true;
	   }
	   else{
		   return false;
	   }
	});
});