<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
$Fname = $_POST['Fname'];
$Mname = $_POST['Mname'];
$Lname = $_POST['Lname'];
$username = $_POST['username'];
$phone_number = $_POST['phone_number'];
$email_address =$_POST['email_address'];
$Gender = $_POST['Gender'];
$brith_Date = $_POST['brith_Date'];
$department = $_POST['department'];
$salary=$_POST['salary'];
$password = md5($_POST['password']);
$confirmpassword = md5($_POST['confirmpassword']);
$usertype = $_POST['usertype'];
if($password!=$confirmpassword)
{
//echo "does not mutch the password";
  echo '<script language="javascript">';
  echo  'alert("does not mutch the password and confirmpassword!!"); location.href="register.php"';
  echo '</script>';
}
else if($usertype=='Storeman')
{
$query_Storeman=mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary',  'Storeman' )"); 
if($query_Storeman==true){
	echo '<script language="javascript">';
    echo 'alert("Storeman is successfully registered"); location.href="register.php"';
    echo '</script>';
}
}
elseif($usertype=='admin')
{
$query_admin=mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary',  'admin' )");

if($query_admin > 0){
echo '<script language="javascript">';
    echo 'alert("admin is successfully registered"); location.href="register.php"';
    echo '</script>';
}
}
elseif($usertype=='User')
{
$query_User=mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary',  'User' )");

if($query_User > 0){
echo '<script language="javascript">';
    echo 'alert("User is successfully registered"); location.href="register.php"';
    echo '</script>';

}
}
elseif($usertype=='Financedirectory')
{
$query_Financedirectory= mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary', 'Financedirectory' )");

if($query_Financedirectory > 0){
	echo '<script language="javascript">';
    echo 'alert("Financedirectory is successfully registered"); location.href="register.php"';
    echo '</script>';
}
}
elseif($usertype=='Departmenthead')
{
$query_Departmenthead=mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary',  'Departmenthead' )");

if($query_Departmenthead > 0){
echo '<script language="javascript">';
    echo 'alert("Departmenthead is successfully registered"); location.href="register.php"';
    echo '</script>';
}
}
elseif($usertype=='Collegedean')
{
$query_Collegedean=mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary',  'Collegedean' )");

if($query_Collegedean > 0){
echo '<script language="javascript">';
    echo 'alert("Collegedean is successfully registered"); location.href="register.php"';
    echo '</script>';
}
}
elseif($usertype=='Vicpresident')
{

mysql_query("INSERT INTO accou (Fname,Mname,Lname,username,  password , confirmpassword ,Phone_number, email_address, Gender,brith_Date,department, salary,  usertype) VALUES ('$Fname ' ,'$Mname ' ,'$Lname ' ,'$username ' , '$password','$confirmpassword', '$phone_number', '$email_address', '$Gender','$brith_Date','$department', '$salary',  'Vicpresident' )");

{

echo '<script language="javascript">';
    echo 'alert("Vicpresident is successfully registered"); location.href="register.php"';
    echo '</script>';
}}
?> 











