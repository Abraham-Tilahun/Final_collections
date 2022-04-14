
CREATE TABLE user
( 

user_id numeric(20) not null,
Name varchar(50) not null,
  Lname varchar(50) not null,
  gender varchar(50),
  email varchar(50) not null,
  password varchar(50) not null,
  re_typepassword varchar(50) not null,
  Mobile numeric(20) not null,
  country varchar(50) not null,
  city varchar(50) not null,
  status varchar(50) not null,
  CONSTRAINT supplier_pk PRIMARY KEY (user_id,email)
);

CREATE TABLE reservation

( 
reservation_id numeric(10) not null AUTO_INCREMENT ,

 firstname varchar(50) not null,
  lastname varchar(50) not null,
   kifleketema varchar(50) not null,
    kebele numeric(10) not null,
	email varchar(50) not null,
	mobileno numeric(10) not null,
	payable numeric(20) not null,
	status varchar(50) not null,
	confirmation varchar(50) not null,
	homephoneno numeric(20) not null,
	street numeric(20) not null,
	houseno numeric(20) not null,
	delivery_date varchar(50) not null,
	date date,
	time time,
	payment varchar(20) not null,
	delivery_type varchar(30) not null,
	
	CONSTRAINT fk_lier_co
   FOREIGN KEY (email)
    REFERENCES user(email)
		
);

ALTER table orders ADD CONSTRAINT kk FOREIGN KEY (email) REFERENCES user(email);

CREATE TABLE message

( 
 name varchar(50) not null,
 email varchar(50) not null,
subject varchar(30) not null,
content text(200) not null,
  CONSTRAINT fff
   FOREIGN KEY (email)
    REFERENCES user(email)
);




CREATE TABLE orders

( 
 product_id varchar(50) not null,
 product varchar(50) not null,
qty numeric(30) not null,
confirmation varchar(50) not null,
price numeric(30) not null,
total numeric(30) not null,
  CONSTRAINT fk_sier_co
   FOREIGN KEY (product_id)
    REFERENCES products(product_id)
);
