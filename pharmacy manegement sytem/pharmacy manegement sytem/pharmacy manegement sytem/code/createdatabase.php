<?php
$conn= mysql_connect("localhost","root","");
     if(!$conn){

	  die('Could not connect: ' . mysql_error());
	 }
	 
	 //Create database
$sql='CREATE DATABASE pharmacy';
if(mysql_query($sql,$conn))
  {
 
 
                 echo 'CONGRATULATIONS!!!'."<br>";
				 echo 'pharmacy management system created  successfully.'."<br>";
				 
 
  }
else
  {
  echo 'Error creating database: ' ;
  }
 
 //create    account table 
 mysql_select_db("pharmacy",$conn);
 
 
 $sql="CREATE TABLE account
 (
  acountid int(11) NOT NULL,
  username varchar(40)NOT NULL,
  password varchar(40) NOT NULL,
  position varchar(40) NOT NULL,
  confirmpassword varchar(40) NOT NULL,
  PRIMARY KEY (acountid))";
 //Excute query
 if(mysql_query($sql,$conn))
 {
  echo "acount table created successfully."."<br>";
	  }
	  $sql="CREATE TABLE customer
 (
  customerid INT NOT NULL AUTO_INCREMENT,
  firstname varchar(40) NOT NULL,
  midlename varchar(40) NOT NULL,
  lastname varchar(40) NOT NULL,
  age INT NOT NULL,
  sex varchar(5) NOT NULL,
  region varchar(40) NOT NULL,
  wereda varchar(40) NOT NULL,
  kebele varchar(40) NOT NULL,
  PRIMARY KEY (customerid))";
  if(mysql_query($sql,$conn))
 {
 
	  echo "customer table created successfully."."<br>";
				
 }
$sql="CREATE TABLE employee
 (
 firstname varchar(40) NOT NULL,
  lastname varchar(40) NOT NULL,
  employeeid int(11) NOT NULL,
  sex varchar(10) NOT NULL,
  age int NOT NULL,
  salary FLOAT,
  address varchar(40) NOT NULL,
  PRIMARY KEY (employeeid))"; 
  if(mysql_query($sql,$conn))
 {
 
	  echo " Employee table created successfully."."<br>";
				
 }
$sql="CREATE TABLE drug (
  empid int(11) NOT NULL,
  drugname varchar(40) NOT NULL,
  companyname varchar(40) NOT NULL,
  bachnumber int NOT NULL,
  quantity int NOT NULL,
  unitprice int NOT NULL,
  shelfnumber int NOT NULL,
  expirydate date NOT NULL,
  PRIMARY KEY (bachnumber))";
  if(mysql_query($sql,$conn))

 {
 
	  echo "drug table created successfully."."<br>";
				
 }
 
$sql="CREATE TABLE solddrug
 (
  sellnumber int(11) NOT NULL AUTO_INCREMENT,
  empid int(11) NOT NULL,
  customerid int(11) NOT NULL,
  bachnumber int(11) NOT NULL,
  quantity int(11) NOT NULL,
  date date NOT NULL,
  status varchar(10) NOT NULL,
  audited varchar(10) NOT NULL,
  PRIMARY KEY (sellnumber))";
   if(mysql_query($sql,$conn))

 {
 
	  echo " solddrug table created successfully."."<br>";
				
 }
 //$sql="CREATE TABLE createacount
// (
// acountid varchar(40) NOT NULL,
//  username varchar(40) NOT NULL,
//  position varchar(11) NOT NULL,
//  password varchar(10) NOT NULL,
//  password varchar(10) NOT NULL,
//  confirmpassword varchar(40) NOT NULL,"; 
//  if(mysql_query($sql,$conn))
// {
// 
//	  echo " createacount table created successfully."."<br>";
//				
// }

 else
 {
 echo"Error creating table:".mysql_error($conn);
 echo "<html>";

echo "<head>";

echo '<style type="text/css">';


echo "A:hover {color:blue; font-weight:bold;}"; /* style for active links – bold and red */

echo "</style>";

echo "</head>";
echo '<body background="capture.png" width="10%">';

echo '<table align="center" width="40%" heigth="800" border="0" >';


              echo "<tr>";
              echo '</tr>';
        echo '<tr bgcolor="lightblue" height="" >';
                echo '<th colspan="3" valign="top">';
				 echo "<br>";
				  echo "<br>";
                echo "Account created successfully.";
				 echo "<br>";
				 echo "<br>";
                echo '</th>';
        echo '</tr>';
echo '<tr bgcolor="#E4EBEB" >';
 echo '<th colspan="3" valign="top">';
  echo "<br>";
   echo "<br>";
echo "<a href='index.php'> <STRONG>GO TO HOME PAGE</STRONG></a>";
 echo "<br>";
 echo "<br>";
 echo '</th>';
 
 echo '</tr>';
 
echo '</table>';
echo '</body>';

echo '</html>';
 }
?>
	
 