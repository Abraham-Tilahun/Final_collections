 <?php
if(isset($_POST['changepassword']))
{
$password = md5($_POST['password']);
$pass = md5($_POST['pass']);
$rpass = md5($_POST['rpass']);
$query="select * from accou where password='{$opassword}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
} 
 if($new_password=$confirmpassword){
	      		 
$query="update accou set password='{$new_password}',confirmpassword='{$confirmpassword}' where password='{$opassword}'";
        $result=mysql_query($query);
		 echo'  <p class="success">Your password has been changed successfuly!</p>';
         //echo' <meta content="10;chengepass.php" http-equiv="refresh" />';  
  
		 }
		else
		{ 
		echo'  <p class="wrong">New Password and Confirm Password does not Match!</p>';                              
		  // echo' <meta content="5;chengepass.php" http-equiv="refresh" />';
		}
}
?>