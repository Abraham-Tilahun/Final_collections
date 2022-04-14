<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin login</title>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<style type="text/css">
#part {
	height: 250px;
	width: 400px;
	border-top-style: groove;
	border-right-style: groove;
	border-bottom-style: groove;
	border-left-style: groove;
	border-top-color: #FF0;
	background-color: #FFF;
}
#main {
	height: 270px;
	width: 350px;
	background-color: #999;
	margin: 80px;
	padding: 80px;
}
</style>
</head>

<body>
<center>
<form action="post">
<div id="main">
<center>
  <div id="part" align="center"> <h4><I>Admin Login page  </I>  </h4>
    <img src="image/manager_icon.png" width="100" height="50" />
      <p><label for="username">user name</label>
      <input name="username" type="text" id="username"  />
    </p>
    <p>
      <label for="password">password</label>
      <input type="password" name="password" id="password" />
    </p>
    <p>
      <input type="reset" name="Reset" id="button" value="Reset" />
      <input type="submit" name="button2" id="button2" value="login"/>
    </p>
    </div>
    </center>
</div>
</center>
</body>
</html>