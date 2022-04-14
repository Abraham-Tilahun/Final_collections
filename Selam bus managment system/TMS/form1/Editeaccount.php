
<html>
<head>

</head>
<body style="">
   <div id="sidebar1">
                <?php
if ( (isset($_GET['USER_ID'])) ) { 
$id = stripslashes($_GET['USER_ID']);
} elseif ( (isset($_POST['USER_ID'])) ) { 
$id = stripslashes($_POST['USER_ID']);
} else { 

}
  session_start();
 include "../connection/connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();
	if (empty($_POST['id'])) {
       $errors[] = 'You forgot to enter user id.';
    } else {
       $ids = mysql_real_escape_string(trim($con,$_POST['id']));
    }
 }
	if (empty($_POST['un'])) {
       $errors[] = 'You forgot to enter username.';
    } else {
       $un = mysql_real_escape_string(trim($con,$_POST['un']));
    }
if (empty($_POST['pw'])) {
      $errors[] = 'You forgot to enter password.';
    } else {
     $pw = mysql_real_escape_string(trim($con,$_POST['pw']));
     }
		if (empty($_POST['role'])) {
       $errors[] = 'You forgot to enter Role.';
    } else {
       $role = mysql_real_escape_string(trim($con,$_POST['role']));
   
	
	if (empty($_POST['email'])) {
       $errors[] = 'You forgot to enter email.';
    } else {
       $email = mysql_real_escape_string(trim($con,$_POST['email']));
    }
	if (empty($_POST['status'])) {
       $errors[] = 'You forgot to enter email.';
    } else {
       $st = mysql_real_escape_string($con,trim($_POST['status']));
    }
	
	if (empty($errors)) { 
$q = "UPDATE  Account SET USER_ID='".$ids."',USER_NAME='".$un."',PASSWORD='".$pw."',ROLE='".$role."',EMAIL='".$email."',STATUS='".$st."' WHERE USER_ID='".$id."' LIMIT 1";
$result = $db->query($q);
if (mysql_affected_rows == 1) { 
echo '<h3 style=color:#390><img src="../Image/righti.jpg" width="20" >account has been edited.</h3>';
} else { 
echo '<p style=color:#FF0000 align="center"> could not be edited.</p>'; 
//echo '<p>' . mysqli_error($db) . '<br />Query: ' . $q . '</p>'; 
}
} else { 
echo '<p align="center">The following error(s) occurred:<br />';
foreach ($errors as $msg) { 
echo "<p style=color:#FF0000> - $msg<br />\n</p>";
}
echo '<p align="center">Please try again.</p>';
} 
} 
if (!get_magic_quotes_gpc()){
$id = addslashes($id);
}
$q3 = "SELECT USER_ID,USER_NAME,PASSWORD,ROLE,EMAIL,STATUS FROM  Account WHERE USER_ID='".$id."'";
$result2 = mysql_query($q3,$con);
if (mysql_affected_rows==1) {
$row = $result.mysql_fetch_assoc();
echo '<table align="center"><form action="editaccount.php" method="post">
<tr><td><label class="label" for="id">Emp_id:</label></td><td><input id="id" type="text" name="id"  maxlength="30"value="' . $row['emp_id'] . '"></td></tr>

<tr><td><label class="label" for="un">Username:</label></td><td><input id="un" type="text" name="un"  maxlength="30"value="' . $row['Username'] . '"></td></tr>

<tr><td><label class="label" for="pw">Password:</label></td><td><input type="password" name="pw" size="30" maxlength="80" value="' . $row['Password'] . '"></td></tr>

<tr><td><label class="label" for="role">Role:</label></td>><td><select name="role"  maxlength="30" onBlur="statusselect()">
                          <option> ' . $row['ROLE'] . '</option>
                          <option>Administrator</option>
                          <option>Employee</option>
                          <option>Personnel</option>
                        
                          
        </select></td></tr>
<tr><td><label class="label" for="email">Email :</label></td><td><input type="text" name="email" size="30" maxlength="80" value="' . $row['email'] . '"></td></tr>

<tr><td><label class="label" for="status">Email :</label></td><td><input type="text" name="status" size="30" maxlength="80" value="' . $row['status'] . '"></td></tr>

<tr><td><input id="submit" type="submit" name="submit" value="Update"></td><td><input type="hidden" name="USER_ID" value="' . $id . '" /> </td>
</form>';
 echo'</form>
        <form action="updateaccount.php" method="post" >

        <td><input type="submit" name="submit" value="Back" /></td></tr>
         </form> </table>';

} else { // The record could not be validated
echo '';
}
$result2=mysql_free_result();
mysql_close();
?>
 </div>
    
</body>
</html>

