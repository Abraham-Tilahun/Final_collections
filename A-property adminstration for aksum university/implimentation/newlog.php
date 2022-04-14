
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	//unset($_SESSION['un']);
	//unset($_SESSION['fname']);
    //unset($_SESSION['lname']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Aksum University property Administration system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style8 {color: #000000; font-weight: bold; font-style: italic;}
.style10 {font-style: italic; color: #00FFFF; font-weight: bold; }
.style11 {	color: #0000CC;
	font-size: 12px;
}
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
     
	  
<ul class="style30" id="menu">
    <h1 class="style40"align="center"></h1>
  </ul>
    <!--close header-->

      <ul id="menu">
        <li><a href="login.php">LOGIN YOUR ACCOUNT</a></li>
		
      </ul>
    
	<div id="site_content">		

	  <!--close sidebar_container-->	
	 
	  <div id="content1">
        <div class="content_item">
		  <form id="form1" name="login" method="POST" action="login.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:center;" ><strong><font color="white" align="center" size="px" >Login form</font></strong></div>
<div style="float:right; margin-right:40px; background-color:#cccccc; width:40px;  text-align:center; border-radius:20px; height:12px;">
<a href="user.php" title="Close"><img src="images/efault.png"></a></div> 
 </div>
  <table width="250" align="center" height="100px">
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
</div></td>
  </tr>  
  <br><br><br>
   <tr>
              <th width="400" align="right" scope="row">User Name </th>
              <td width="400"><label>
               
				<input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
              </label></td>
            </tr>
            <tr>
              <th align="right" scope="row">Password</th>
              <td><label>
               <input type="password" name="password" id="password" placeholder="Password" required>
              </label></td>
            </tr>
			
			<tr>
              <th align="right" scope="row">Usertype</th>
              <td><label>
               <select name="usertype" required>
									<option></option>
									<option>admin</option>
									<option>Store man</option>
									<option>user</option>
									<option>Department head</option>
									<option>College dean</option>
									<option>Vice president</option>
									<option>Finance directory</option>
									</select>
              </label></td>
            </tr>
			
           
            <tr>
              <th height="30" colspan="2" align="right" scope="row"><label>
                <input type="submit" name="Submit" value="Login" />
                <input type="reset" name="Submit2" value="Cancel" />
            </tr>
			<tr>
          </table>
		    <p>&nbsp;</p>
		  </form>
		  <?php
			 if (isset($_POST['Submit'])){
// username and password sent from form 
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('storem');
$myusername=$_POST ['username']; 
$mypassword=$_POST['password']; 
$usertype=$_POST['usertype'];
if(! $con )
{  die('Could not connect: '. mysql_error());
}
else
 {
    echo "<font color='red'><h4>User name or password are incorrect. please fill again </h4> </font>"; 
	} 

/*UserName,Password,
administration,employee*/

$query = "SELECT * FROM accou WHERE username='$myusername' AND password='$mypassword' AND usertype='$usertype'";

								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									$id=$row["User_id"];
									if( $num_row > 0 ) {
									
									if($usertype=="User")
									{
									$_SESSION['id']=$id;
									header('location:userpage.php');
									}
									else if($usertype=="admin")
									{
										$_SESSION['id']=$id;
										header('location:adminPage.php');
								}
					
									else if($usertype=="Store man")

									{
											$_SESSION['id']=$id;
											header('location:Store manpage.php');

									}
									else if($usertype=="user")

									{
											$_SESSION['id']=$id;
											header('location:userpage.php');

									}
									else if($usertype=="Department head")

									{
											$_SESSION['id']=$id;
											header('location:Department headpage.php');


									}
									
									else if($usertype=="College dean")

									{
											$_SESSION['id']=$id;
											header('location:College deanpage.php');


									}else if($usertype=="Vice president")

									{
											$_SESSION['id']=$id;
											header('location:Vice presidentpage.php');


									}
									else if($usertype=="Finance directory")

									{
											$_SESSION['id']=$id;
											header('location:Finance directorypage.php');


									}
									
									
								
								else{
								
										echo 'you are not registered';	
								
								}
									}
									
									
									
									
									
							}
							?>
			 
          <p>&nbsp;</p>
        </div>
	  </div>
	  <!--close sidebar_container-->
    </div>
	<!--close sidebar-->
</body>
</html>


