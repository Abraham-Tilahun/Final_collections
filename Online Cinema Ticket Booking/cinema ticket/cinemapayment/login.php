<head>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script></head><?php
	include("includes/db.php");

	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	
//Sanitize the POST values
	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 3) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}
$confirmation = createRandomPassword();
?>

<html>
<head>
	<title>Online ticket booking system for Hibret Hotel</title>

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    
 	 
</head>
<body bgcolor="black">


<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa; ">
<tr>
<td align="center" id="heder" width=900 height=30 ><p align=right style="margin-right:3%;">
<a href="singup.php" title="Register">Register</a>
<a href="\cinema ticket\index.php" title="Login">home</a>
<a href="http://www.facebook.com" target=_blank ></a>
<a href="http://www.twitter.com" target="_blank"></a>
<a href="http://www.youtube.com" target="_blank"></a>
<a href="http://www.google.com" target="_blank"></a></p>

</td>
</tr>
<tr>
<td >
<img src="image/11.PNG" width=900 height=100>
<span class="style5">HIBRET HOTEL ,DEBRE TABOR TOWN,AMHARA REGION,ETHIOPIA</span></td>


</td>
</tr>

	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="100" width="180"  id="menu-bar" id="table2" > 
<h2><big ><font size=4> additional information</font></big></h2><br>

<br>
<br>
<br>
<br>
<br>
<br>
	 <a href="aboutus.php"><img src="images1/widget-arrow.png" width="15" />about us</a>
	 <a href="contact.php"><img src="images1/widget-arrow.png" width="15" />contact</a>
	 </td>
</td>

	
	</td>
<td valign="top" id="tad" style=" background-color:white;">	
<div align="center">
<!-------------- -->
<table border=0 width="500" >
<tr>
<td>

<form action="login.php" method="post">


<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:8px 15px 8px black;" width="500px" height="300px" align="center">
<tr><td colspan=2 align=right><font color=black><p style="margin-right:3%;"></td></tr><tr>
<tr>
<td colspan=2 align=center><font color=black>Members Login </td>
</tr>
<tr>
<td><font color=red> * </font><font color=black>Email</td><td><input type="text" name="mail" placeholder="Email"></input></td></tr>
<tr>
<td><font color=red> * </font><font color=black>Password</td><td><input type="password" name="pass"   placeholder="Password"></input></td></tr>
<tr>
<td colspan=2 align=center><input type='submit' class="button_example" value='login' name='submitMain'
<input type='reset' class="button_example" value='Reset'/></td></tr>
<tr>
<td colspan=2 align=center><a href="forget.php"><font color=blue>Forget Password?</a></td></tr>

</form>
<!--Php Script-->  
	<?php
	if(isset($_POST['submitMain']))
 {
   $user =$_POST['mail'];
   $_SESSION['mail']=$_POST['mail'];
   $password=$_POST['pass'];
   
   
   $query = "SELECT * FROM user WHERE 	email= '{$user}' AND password= '{$password}';";
	$result = mysql_query($query); 
		// TO check that at least one row was returned 
		$rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
		
		 if($row['status']==1){ 
	
		$_SESSION['SESS_MEMBER_ID']=$confirmation;
		
        echo "<script>window.location='../cinema ticket/admin/product.php';</script>";
			} 
			else if($row['status']==2){ 
		$_SESSION['SESS_MEMBER_ID']=$confirmation;
		
        echo "<script>window.location='/cinema ticket/admin/manager/add_news.php';</script>";
			}
		
						else if($row['status']==4){ 
		$_SESSION['SESS_MEMBER_ID']=$_POST['mail'];
		echo "<script>window.location='/cinema ticket/customer/veiwseat.php';</script>";
          
			}	


		else {
		
		echo"<p  class='wrong'>User Name & Password Not Match !!</p>"; 
		 echo'<meta content="5;login.php" http-equiv="refresh" />';
		}
}
mysql_close($conn);
?>
</fieldset>
</table>
</table>
</div>
</div>
</td>
<td  valign="top" height="700" width="150"  id="td2" > 
<h2><p valign=top><font size=3></font></h3></p><a href="">
<marquee  direction=down align=middle height=500px scrollamount=3 style="background:url('img/main/blue.jpg');height:400;">
<img src="image11/60.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/14.jpg" alt="" width=150 height=300/>
<img src="image11/2962_1b14.jpg" alt="" width=150 height=300/>
<img src="image11/12.jpg" alt="" width=150 height=300/>
<img src="image11/428355_422367841176516_92060453_n.jpg"  alt="" width=150 height=300/>
</marquee>
</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>GROUP  7&copy; 2009/2017 COPY &reg;RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>
