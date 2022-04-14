<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#main {
	height: 400px;
	width: 800px;
	background-color: #CCC;
	border-top-style: groove;
	border-right-style: groove;
	border-bottom-style: groove;
	border-left-style: groove;
	border-top-color: #0F0;
	border-right-color: #F00;
	border-bottom-color: #F00;
	border-left-color: #F00;
	margin: 80px;
	padding: 80px;
}
#page {
	height: 250px;
	width: 500px;
	background-color: #FFF;
	border-top-style: groove;
	border-right-style: groove;
	border-bottom-style: groove;
	border-left-style: groove;
	border-top-color: #60F;
	border-right-color: #60F;
	border-bottom-color: #60F;
	border-left-color: #60F;
}
</style>
</head>

<body>
<center>
<div id="main">
<center>
  <div id="page">
  <form method="post" action="staffloginco.php">
  <center><h4><I> Staff Login page</I>      </h4>
    <p>
        <label for="username">user name</label>
      <input name="username" type="text" id="username"/>
</p>
    <p>
      <label for="password">password</label>
      <input type="password" name="password" id="password" /> </p>
    User type
    <table><tr><td>
    <select name="usertype"  style="margin-left:px;width:220px;height:35px;"  size="1" class="login-inp">
    <option value="null">select staff</option>
          <option>Book Store</option>
          <option>College Dean</option>
          <option>College Advisor</option>
	        <option>Library</option>
            <option>Lab Assistance</option>
	        <option>Student affaris</option>
	        <option>Caffe</option>
	        <option>Department</option>
	        <option>proctor</option>
	        <option>Sport master</option>
	        <option>Registrar</option>
        </select>
        </td></tr></table>
<p>
  <input type="reset" name="Reset" class="button" value="Reset" />
    <input type="submit" name="submit" class="button2" value="login" /><a href="staffcreat.php"><I><b>create new account</b></I></a></p></center>
  </form>
  </div>
  </center>
</div>
</center>
</body>
</html>