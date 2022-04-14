<?php
			$dbhost = 'localhost';
			$dbuser = 'prison';
			$dbpass = 'prison';
			$conn =mysql_connect($dbhost, $dbuser, $dbpass);
			mysql_select_db('prison');
		$sql7 = "CREATE TABLE Message("."Name varchar(20) NOT NULL , "
						."Email VARCHAR(50) NOT NULL, "
						."Message VARCHAR(1000) NOT NULL);";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";	 
	
/*1================================================================= creating address table ===================================================*/
			$sql7 = "CREATE TABLE Address("
					."adressId int  NOT NULL , "
					."House_Phone_No int NOT NULL, "
					."Office_Phone_No int NOT NULL, "
					."Cell_Phone int NOT NULL, "
					."Region VARCHAR(15) NOT NULL, "
					."Kebele VARCHAR(15) NOT NULL, "
					."city VARCHAR(20) NOT NULL, "
					."PRIMARY KEY (adressId)); ";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
/*2===============================================================creating person table ============================================================*/
			$sql7 = "CREATE TABLE Person("."personId varchar(15) NOT NULL , "
			."fName VARCHAR(15) NOT NULL, "
			."lName VARCHAR(20) NOT NULL, "
			."birtDate VARCHAR(15) NOT NULL, "
			."sex VARCHAR(7) NOT NULL, "
			."adressId int NOT NULL , "
			."PRIMARY KEY (personId), "
			."FOREIGN KEY (adressId) REFERENCES Address(adressId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
/*3=================================================================   creating login  table   ================================================== */
		$sql7 = "CREATE TABLE login("."loginId int NOT NULL, "
			."username VARCHAR(20) NOT NULL, "
			."password VARCHAR(20) NOT NULL, "
			."PRIMARY KEY (loginId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
/*4=================================================================   creating administrator table  ===============================================*/
			$sql7 = "CREATE TABLE administrator("."adminId int NOT NULL , "
			."personId varchar(15) NOT NULL , "
			."loginId int NOT NULL , "
			."PRIMARY KEY (adminId), "
			."FOREIGN KEY (personId) REFERENCES Person(personId),"
			."FOREIGN KEY (loginId) REFERENCES login(loginId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
                                                              

/*5=================================================================  creating schedule table   =================================================*/
			$sql7 = "CREATE TABLE Schedule("."scheduleId int auto_increment not null,"
					."date varchar(10) NOT NULL, "
					."month varchar(10) NOT NULL, "
					."year varchar(10) NOT NULL, "
					."time varchar(10) NOT NULL, "
					."PRIMARY KEY(scheduleId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
/*6=================================================================  creating judge table ==================================================*/
			$sql7 = "CREATE TABLE judge("."judgeId int NOT NULL , "
					."personId varchar(15) NOT NULL , "
					."loginId int NOT NULL , "
					."PRIMARY KEY (judgeId), "
					."FOREIGN KEY (personId) REFERENCES Person(personId),"
					."FOREIGN KEY (loginId) REFERENCES login(loginId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
                                  
/*7=================================================================    creating court table    ====================================================*/
			$sql7 = "CREATE TABLE court("."courtCode varchar(20) NOT NULL , "
					."courtName varchar(30) NOT NULL, "
					."location varchar(30) NOT NULL, "
					."PRIMARY KEY (courtCode));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
			
/*8=================================================================   creating staff  table  ======================================================*/
			$sql7 = "CREATE TABLE staff("."officerId int NOT NULL , "
					."personId varchar(15) NOT NULL , "
					."loginId int NOT NULL , "
					."PRIMARY KEY (officerId), "
					."FOREIGN KEY (personId) REFERENCES Person(personId),"
					."FOREIGN KEY (loginId) REFERENCES login(loginId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
/*9=================================================================   creating prison table   =======================================================*/ 
			
			
				$sql7 = "CREATE TABLE PRISON("."prisonName varchar(50) NOT NULL , "
					."location varchar(50) NOT NULL, "
					."PRIMARY KEY (prisonName));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
			
/* /*10=================================================================  creating block table  ======================================================*/
			$sql7 = "CREATE TABLE block("."blockName varchar(50) NOT NULL,"
					."prisonName varchar(50) NOT NULL , "
					."No_Room int not null,"
					."PRIMARY KEY (blockName),"
					."FOREIGN KEY (prisonName) REFERENCES  PRISON(prisonName));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
			
/*11=============Room table==============================*/
$sql7 = "CREATE TABLE Room("."R_Id int NOT NULL,"
					."Room_No int NOT NULL, "
					."NO_Bed int NOT NULL, "
					."Floar_No int NOT NULL, "
					."blockName VARCHAR(20) NOT NULL, "
					."PRIMARY KEY (R_Id),"
					."FOREIGN KEY (blockName) REFERENCES  block(blockName));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";

/*12=================================================================  creating prisoner table ======================================================*/
			  $sql7 = "CREATE TABLE prisoner("."prisonerId varchar(20) NOT NULL , "
						."dateOfEntrance VARCHAR(20) NOT NULL, "
						."offenceType VARCHAR(20) NOT NULL, "
						."personId varchar(15) NOT NULL , "
						."R_Id int NOT NULL , "
						."prisonName varchar(50) NOT NULL , "
						."PRIMARY KEY (prisonerId), "
						."FOREIGN KEY (personId) REFERENCES Person(personId),"
						."FOREIGN KEY (prisonName) REFERENCES PRISON(prisonName),"
						."FOREIGN KEY (R_Id) REFERENCES  room(R_Id));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table prisoner: ' . mysql_error());
			 }
			echo "Table created successfully\n";
			

/*13=================================================================  creating CourtDecision table   ================================================*/ 
			$sql7 = "CREATE TABLE CourtDecision("."DecisionId int auto_increment NOT NULL , "
			."courtOfConviction varchar(30) NOT NULL, "
			."dateOfConviction Date NOT NULL, "
			."caseType VARCHAR(30) NOT NULL, "
			."DecisionType VARCHAR(30) NOT NULL, "
			."yearOfPunishment int NOT NULL, "
			."date_of_release date NOT NULL, "
			."prisonerId varchar(20) NOT NULL , "
			."Conditional_release int NOT NULL , "
			."PRIMARY KEY (DecisionId),"
			."FOREIGN KEY (prisonerId) REFERENCES prisoner(prisonerId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";

	

/*14================================================================= creating visitor table ===============================================*/
			$sql7 = "CREATE TABLE VISITOR("."visitorId int NOT NULL, "
					."personId varchar(15) NOT NULL , "
					."PRIMARY KEY (visitorId), "
					."FOREIGN KEY (personId) REFERENCES Person(personId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
			
/*transferred prisoner table*/		
	 $sql7 = "CREATE TABLE Transfered_prisoner("."prisonerId varchar(20) NOT NULL , "
						."dateOfEntrance VARCHAR(20) NOT NULL, "
						."offenceType VARCHAR(20) NOT NULL, "
						."personId varchar(15) NOT NULL , "
						."prisonName varchar(50) NOT NULL , "
						."PRIMARY KEY (prisonerId), "
						."FOREIGN KEY (personId) REFERENCES Person(personId),"
						."FOREIGN KEY (prisonName) REFERENCES PRISON(prisonName));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
/*15=================================================================  creating transfer request table ==================================*/
			$sql7 = "CREATE TABLE TRANSFER_REQUEST("."requestId int NOT NULL , "
					 ."prisonerId varchar(20) NOT NULL ,"
					."caseOfTransfer varchar(20) NOT NULL, "
					."fromm varchar(20) NOT NULL, "
					."too varchar(20) NOT NULL, "
					."date_of_transfer date NOT NULL, "
					."PRIMARY KEY(requestId), "
					."FOREIGN KEY (prisonerId) REFERENCES prisoner(prisonerId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
																
/*16=================================================================  creating conditional release case request table ===================*/
			$sql7 = "CREATE TABLE CONDITIONAL_RELEASE_CASE_REQUEST("."requestId int auto_increment , "
					."prisonerId varchar(20) NOT NULL , "
					."year_of_punishment float NOT NULL , "
					."crime_committed varchar(30) NOT NULL , "
					."date_of_request date NOT NULL , "
					."PRIMARY KEY (requestId),"
					." FOREIGN KEY (prisonerId) REFERENCES prisoner(prisonerId));";
			mysql_select_db('prison');
			$retval = mysql_query( $sql7, $conn );
			if(!$retval){  
			die('Could not create table: ' . mysql_error());
			 }
			echo "Table created successfully\n";
											

			mysql_close($conn);
?>

