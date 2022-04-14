<?php
	session_start();
	
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
  <script type="text/javascript" src="calendar.js"></script>
  <script>
window.location.hash="no-back-button!!";
window.location.hash="Again-No-back-button!!";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
  <style type="text/css">
<script language="JavaScript">
			<!--
			function isNumberKey(evt)
			{
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
				
                return false +  alert("Please Enter Only Number for  phone");
			 return true;
			}
    
			</script>
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
<div id="menubar">
   <ul id="menu">
     <li><a href="index.php" style="height:24px;line-height:24px;"><img src="menubanner_files/css3menu3/home1.png" alt=""/>Home</a></li>
	<li ><a href="about.php"style="height:24px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="menubanner_files/css3menu3/service1.png" alt=""/>Aboutus</a></li>
	<li><a href="newss.php" style="height:24px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="menubanner_files/css3menu3/contact1.png" alt=""/>News</a></li>
	<li><a href="cntct.php" style="height:24px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="menubanner_files/css3menu3/blue_circle - phone.png" alt=""/>Contactus</a></li>
	<li style="float:right"><a class="active" href="login.php" style="height:20px;line-height:20px;"><img src="menubanner_files/css3menu3/register2.png" alt=""/>LOGIN</a></li>
       
      </ul>
    </div>
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
 <body bgcolor=#9494B8>
 <h3>Calender</h3>
	  <script src="css/calander.js" language="javascript" type="text/javascript"></script> 
           <br><br><br><br><br><br><br>
	 <h3
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
</table> 
</script></body>
			<table width="215" height="150">
              <tr>
                <th width="250" height="30" bgcolor="#808080" scope="row"><span class="style17">USERS LOGIN PAGE</span></th>
              </tr>
            </table>
			<p>&nbsp;</p>
			
          </div>
        </div>
      </div>
	<div>
     <div>
      <ul class="slideshow">
	     <li><img width="975" height="275" src="images/BREE.jpg"/></li>
      </ul>   	 
	 </div>
	 </div>
	 
	  <div id="content1">
        <div class="content_item">
		  <html xmlns="http://www.w3.org/1999/xhtml">
 
 <body>
<div style="background-color:#cccccc;width:550px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
  <form id="form1" name="login" method="POST" action="Login.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#none; padding:5px; height:30px;"> 
 <div style="float:center;" ><strong><font color="white" size="5px">Login In Your Account</font></strong></div>
 </div>
  <table width="350" align="center" height="150px">
  <tr>
    <td colspan="12"><div style="font-family:Arial, Helvetica, sans-serif; color:#none; font-size:20px;">
	<table cellpadding="10" align="center"cellspacing="10">
</div></td>
  </tr>  
   <tr>
   <th width="400" align="right" scope="row">User Name: </th>
   <td width="400"><label>
   <input type="text" name="username" id="username" autocomplete="off" placeholder="UserName" size="25"required ="enter your UserName"pattern="[A-Za-z]{3,21}"
	required x-moz-errormessage="Please Fill Correct User name" > </label></td>
         </tr>
            <tr>
              <th align="right" scope="row">Password:</th>
              <td width="400"><label>
               <input type="password" name="password" id="password" placeholder="Password" size="25" required="pleas fill your password" ></label></td>
         
			 </tr>
			<tr>
			
           <td><div align="left" size="300" ></div></td>
           <td class='para1_text' width="28px "size="5px" size="3"><a href="forgetpassword.php"><h6>Forget Your Password?  </a></td><br></h6>
          </tr>
            <tr>
              <th height="3" size="30" colspan="12" align="right" scope="row" ><label>
               &nbsp;&nbsp; <input type="submit" name="Submit" value="Login" style="width:70px" height="30" />
                &nbsp;&nbsp;<input type="reset" name="Submit2" value="Cancel" style="width:70px" height="30"/>
				
            </tr>
		</table>
		    <p>&nbsp;</p>
		  </form>
							<?php
	    if (isset($_POST['Submit']))
	   { 
	   $con=mysql_connect('localhost','root','');
   mysql_select_db('storem');
    $username=$_POST['username'];  
    $password=md5($_POST['password']); 
	if(! $con )
{  die('Could not connect: '. mysql_error());
}

	$sql = "SELECT * FROM accou WHERE username='$username' AND password='$password'";
	$result = mysql_query($sql); 
	$rowCheck = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
        $en=$row['enabled'];
		 if($row['usertype']=='admin'){ 
		 if($en==1)
		{
		$_SESSION['User_id']=$row['User_id'];
    echo'  <meta content="1;adminpage.php" http-equiv="refresh" />';
			} 
			else
		{
		echo'<p class="wrong"> Your Account is not active Please contact the system Admin </p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}	

			else if($row['usertype']=='Storeman'){
          if($en==1)
		{	
		$_SESSION['User_id']=$row['User_id'];
		
 
		          echo'  <meta content="1;Storeman page.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}
		
		
			else if($row['usertype']=='User'){
          if($en==1)
		{	
		$_SESSION['User_id']=$row['User_id'];
		
    
		echo'  <meta content="1;Userpage.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}

			else if($row['usertype']=='Departmenthead'){
          if($en==1)
		{	
		$_SESSION['User_id']=$row['User_id'];
		
       echo'  <meta content="1;Departmenthead page.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}
				else if($row['usertype']=='Collegedean'){
          if($en==1)
		{	
		$_SESSION['User_id']=$row['User_id'];
		
       echo'  <meta content="1;Collegedean page.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}
	 else if($row['usertype']=='Vicpresident'){
          if($en==1)
		{	
		$_SESSION['User_id']=$row['User_id'];
		
       echo'  <meta content="1;Vicpresident page.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}	
		else if($row['usertype']=='Financedirectory'){
          if($en==1)
		{	
		$_SESSION['User_id']=$row['User_id'];
		
       echo'  <meta content="1;Financedirectory page.php" http-equiv="refresh" />';
			}
			else
		{
		echo'  <p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}
		}
		
		
				
		else
     {
		 echo '<script language="javascript">';
        echo  'alert("Incorrect Username and Password !!"); location.href="login.php"';
       echo '</script>';
   
	} 
	   }
    ?>
          <p>&nbsp;</p>
        </div>
	  </div>
	  
    </div>
</body>
</html>

