<?php
    session_start(); 
	$dbhost = 'localhost';
	$dbusername = 'prison';
	$dbpassward = 'prison';
	$conn =mysql_connect($dbhost, $dbusername, $dbpassward);
    mysql_select_db('prison');
	$uname=$pd="";
	$sql="SELECT username, password,role from login WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
	$retval = mysql_query( $sql, $conn );
			if(!$retval )
			{
				die('Could not fiche data: ' . mysql_error());
			}
	$row = mysql_fetch_array($retval, MYSQL_ASSOC);
	   $uName = $row['username'];
	   $pass = $row['password'];
	   $role = $row['role'];
	if($uName==$_POST['username'] && $pass==$_POST['password']){
		$_SESSION["userName"] = "$uName";
		$_SESSION["role"] = "$role";
		mysql_close($conn);
		if(isset($_SESSION["url"])){
			$url = $_SESSION["url"]; 
			unset($_SESSION['url']);
			header("Location: $url");
		}
		else
			header("Location: login.php");
	}
	else
			header("Location: login.php");
   
?> 
