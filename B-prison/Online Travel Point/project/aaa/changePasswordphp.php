<?php
        include("dbconnet.php");
		session_start();
		$name = $_SESSION['userName'];
		$role=$_SESSION['role'];
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
		
			$old_pass =  $_POST['oldpass'];
			$new_pass = $_POST['newpass'];
			$re_enter = $_POST['reenter'];
			$user_name = $_POST['username'];
			
		}
	    $old_pass = htmlspecialchars($old_pass);
		$new_pass = htmlspecialchars($new_pass); 
		
		
		$sql = "SELECT * FROM login WHERE password = '".$old_pass."' and username = '".$name."' and role = '".$role."' "; 
         
		mysql_select_db('prison');
		$result = mysql_query($sql,$conn);
	     if(!$result ) {  
				$_SESSION["error"] = "error The old password or user name is Not correct"; 
					if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}
				}
		$num=mysql_num_rows($result);
		If($num>0){
	   $db_field = mysql_fetch_assoc($result);
		$password = $db_field['password']; 
		
		if($password == $old_pass)
		{
		
			if($user_name !="" && $new_pass == "") 
			{
				$sql1 ="UPDATE login SET login.username = '".$user_name."'WHERE password = '".$old_pass."' and username = '".$name."' and role = '".$role."' ";
				  $retval1 = mysql_query( $sql1, $conn );
				  
				  if(!$retval1 ) {  
				  $_SESSION["error"] = "error The old password or user name is Not correct"; 
					if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}
				}
			}
			
			if($user_name =="" && $new_pass != "") 
			{
			      
				$sql1 ="UPDATE login SET login.password = '".$new_pass."' WHERE password = '".$old_pass."' and username = '".$name."' and role = '".$role."'";
				  $retval1 = mysql_query( $sql1, $conn );
				  
				  if(!$retval1 ) {  
				$_SESSION["error"] = "error The old password or user name is Not correct";  
				if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}
				}
			}
			if($user_name !="" && $new_pass != "") 
			{
					
				$sql ="UPDATE login SET login.username = '".$user_name."' WHERE password = '".$old_pass."' and username = '".$name."' and role = '".$role."'";
				  $retval = mysql_query( $sql, $conn );	
				$sql1 ="UPDATE login SET login.password = '".$new_pass."' WHERE password = '".$old_pass."' and username = '".$name."' and role = '".$role."'";
				  $retval1 = mysql_query( $sql1, $conn );

				  if(!$retval1 ) {  
				$_SESSION["error"] = "error The old password or user name is Not correct"; 
                    if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}				
				}
				
				if(!$retval ) {  
				$_SESSION["error"] = "error The old password or user name is Not correct"; 
					if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}
				}
			}
			
			else{
				
				$_SESSION["sucess"] = "The password and user name is successfully Changed";
				if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}
			}
				
}		
}
else{
	$_SESSION["error"] = "error The old password or user name is Not correct"; 
					if($role=='Admin'){header('Location: changePasswordAdmin.php');}
					else if($role=='RegistralOf'){header('Location: changePasswordRegistral.php');}
					else if($role=='policeOf'){header('Location: changePasswordAdmin.php');}
					else if($role=='diciplineOf'){header('Location: changePasswordDecisipline.php');}
					else if($role=='releaseCase'){header('Location: changePasswordReleaseOff.php');}
					else if($role=='CourtDecision'){header('Location: changePasswordCourt.php');}
	
}
		mysql_close($conn);   
?>
