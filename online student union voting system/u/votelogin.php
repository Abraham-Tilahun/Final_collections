<?php
session_start();
if(isset($_session['counter']))
	$_session['counter']+=1;
	else
	$_session['counter']=1;
	?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content
{
	background-color: white;
	width: 80%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}
.login {
  width: 70%;
  margin: 0px auto;
  font-size: 16px;
  
}
/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}
/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}
.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: capitalize;
  color: #fff;
}

.login-container {
  background: #ddd;
  padding: 20px;
}
/* Every row inside .login-container is defined with p tags */
.login p {
	
		color: #555;
		font-weight: bolder;
		font-family: Times New Roman;
		font-size: 20px;
		padding: 5px;
}
.login input {
  display: block;
  width: 100%;
  padding: 16px;
  font-family: inherit;
  font-size: 0.95em;
}
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border: none;
  color: #555;
}
/* Text fields' focus effect */
.login input[type="text"]:focus,
.login input[type="password"]:focus {
border: none;
}
.login input[type="submit"] {
  background: #a5aaa4;
  width: 150px;
  color: #fff;
  cursor: pointer;
  border: none;
}
.login input[type="submit"]:hover {
  background: #a2d2d7;
}
/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
/* Text fields' focus effect */
.login input[type="text"]:focus,
.login input[type="password"]:focus {
border: none;
}
.login input[type="reset"] {
  background: #a5aaa4;
  width: 250px;
  color: #fff;
  cursor: pointer;
  border: none;
}
.login input[type="reset"]:hover {
  background: #a2d2d7;
}
/* Buttons' focus effect */
.login input[type="reset"]:focus {
  border-color: #05a;
}
</style>
<script>
function show_password(){
	
	var pass = document.getElementById("password");
	var checkbox = document.getElementById("checkbox");
	
	if(pass.type == "password"){
		pass.type = "text";
		checkbox.checked = true;
	}else{
		pass.type = "password";
		checkbox.checked = false;
	}
   }
   function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("please enter	Only letters! ")
            return false;
			}}
</script>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("headerhome.php");
	   ?>	
		</div>
		<div id="menu">
		<?php
		include("menu.php");
		?>
	     </div>
			<div id="content">
				<div class="login" style="margin-left:0%;" >
				 <div class="login-triangle" style="margin-left;"></div>
				  <h2 class="login-header">Just Login here</h2>
				 <form class="login-container" method="post" enctype="multipart/form-data">
			  <p><i class="fa fa-user"></i>User Name:<input type="text" placeholder="username" name="username" onkeypress="return ValidateAlpha(event)"></p>
			  <p> <i class="fa fa-unlock-alt"></i>Password:<input type="password" placeholder="********" name="password" id="password" pattern=".{3,}" title="three or more characters"></p>
			<script type="text/javascript">
			 var f1 = new LiveValidation('password');
			 f1.add(Validate.Presence,{failureMessage: "X"});
			</script>
			<p><input type="submit" value="Login" name="login"></p>
			 <label style="margin-left: 100px;float: right;margin-top: -50px;">
			<input type="checkbox" name="checkbox" id="chekbox" onClick="show_password();">Show Password
				  </label>
			<P><a href="insertforgetpasswordinfor.php" style="text-decoration:none;font-style: italic;">Forget Password</a></P>
			 <span style="width: 10px;"><input type="reset" value="Reset" style="width: 150px;float: right;margin-top: -40px;"/></span>
					  </form>
			    <?php   
      		include("Database/connection.php");	 
    	if($conn)
	 	{
     if(isset($_POST['username'])&&isset($_POST['password']))
	 {
	if(isset($_POST['login']))
     {
		$uname=$_POST['username'];
		$upass=$_POST['password'];
		  if(empty($uname)||empty($upass)){
			
			 echo "<script type='text/javascript'>alert(' please fill  all field')</script>";
			 }
			else{
		//$pass=md5($upass);
		$result=mysqli_query($conn,"Select * from user where (user.username='$uname' and 
		user.password='$upass' and  user.status=1)");
		$row=mysqli_fetch_array($result);
		$username=$row['username'];
		$password=$row['password'];
		$role=$row['role'];
		$photo=$row['photo'];
		$userid=$row['userid'];
		$campus=$row['campus'];
		
	   
		if($username==$uname&&$password==$upass)
		{	
	$sql=mysqli_query($conn,"delete from attempt");
			$_SESSION['username']=$uname;
			$_SESSION['password']=$upass;
			$_SESSION['role']=$role;
			$_SESSION['userid']=$userid;
			$_SESSION['sphoto']=$photo;
			$_SESSION['campus']=$campus;
			if($_SESSION['role']=="Adminstrator")
			echo"<script>window.open('Admin/Admin.php?mes=Access Denied..','_self');</script>";
			else if($_SESSION['role']=="SSD")
				echo"<script>window.open('ssd/SSD.php?mes=Access Denied..','_self');</script>";
			//header("location:ssd/SSD.php");
			else if($_SESSION['role']=="Candidate"&&$_SESSION['campus']=="tedy")
			header("location:Tedycandidate/Candidate.php");
			else if($_SESSION['role']=="Voter"&&$_SESSION['campus']=="tedy")
			header("location:Tedyvoter/Voter.php");
		    else if($_SESSION['role']=="Candidate"&&$_SESSION['campus']=="marki")
			header("location:Marakicandidate/Candidate.php");
			else if($_SESSION['role']=="Voter"&&$_SESSION['campus']=="marki")
			header("location:Marakivoter/Voter.php");
		    else if($_SESSION['role']=="Candidate"&&$_SESSION['campus']=="Facil")
			header("location:Facilcandidate/Candidate.php");
			else if($_SESSION['role']=="Voter"&&$_SESSION['campus']=="Facil")
echo"<script>window.open('ssd/SSD.php?mes=Access Denied..','_self');</script>";
		    else if($_SESSION['role']=="Candidate"&&$_SESSION['campus']=="Tseda")
			header("location:Tsedacandidate/Candidate.php");
			else if($_SESSION['role']=="Voter"&&$_SESSION['campus']=="Tseda")
			header("location:Tsedavoter/Voter.php");
		  else if($_SESSION['role']=="Candidate"&&$_SESSION['campus']=="GC")
			header("location:GCcandidate/Candidate.php");
			else if($_SESSION['role']=="Voter"&&$_SESSION['campus']=="GC")
			header("location:GCvoter/Voter.php");
			else if($_SESSION['role']=="Registrar")
			echo"<script>window.open('ssd/SSD.php?mes=Access Denied..','_self');</script>";

		    else if($_SESSION['role']=="discipline_committee")
			 header("location:discipline_committee/discipline_committe.php");
			else
			
		echo "Unknown Role";
		   		
	    }
else
	{
$count="insert";
$sql=mysql_query("select*from attempt");
$total=mysql_num_rows($sql);
$total++;
if($total>3)
{
header("location:logincounter.php");
}
else
{
	   
echo "<script type='text/javascript'>alert(' Please enter correct username and password')</script>";
echo "<script type='text/javascript'>alert('You have 4 Chance now you tries $total times')</script>";
//echo "<font color=red>Please enter correct username and password</font>";
//echo "<br>You have 4 Chance now you tries $total times";
$insert=mysql_query("insert into attempt values('$count')");	
}
}
}
}else
echo "Database not connected!";
		}}
?>  </div>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			
			?>
			<a name="bottom"></a>
	</div>
	</div>

</body>
</html>