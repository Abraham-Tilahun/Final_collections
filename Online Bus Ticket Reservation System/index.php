		<!DOCTYPE HTML>
		<HTML>
		<HEAD charset="utf-8"><TITLE>design the interface</TITLE>
		<style>
		.dropbtn {
		background-color: #339966;
		color: #fff;
		padding: 20px 25px;
		border: 0px solid #fff;
		text-decoration: none;
		}

		.dropdown {
		position: relative;
		display: inline-block;
		}

		.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		}

		.dropdown-content a:hover {
		background-color: #f1f1f1
		}
		.dropdown:hover .dropdown-content {
		display: block;
		}
		.dropdown:hover .dropbtn {
		background-color: #3e8e41;
		}
		</style>
		</HEAD>
		<link rel="stylesheet" type="text/css" href="designHomePage.css">
		<BODY>
		<fieldset>
		<legend align="center"><i><p id="lpara">Welcome to Ethio Online bus Ticket Reservation</p></i></legend>
		<div id="menu">
		<a href="#" class="header_buttons"><i>Home<i></a>
		<a href="contact.html" class="header_buttons"><i>Contact-Us<i></a>
		<a href=" fetchComments.php" class="header_buttons"><i>Recieved Comments:<i></a>
		<a href="help.html" class="header_buttons"><i>Help<i></a>
		<a href="aboutus.html" class="header_buttons"><i>About-us<i></a>
		<div class="dropdown">
		<button class="dropbtn"><i>Adimn</i></button>
		<div class="dropdown-content">
		<a href="signup.html">sign_up</a>
		</div>
		</div>
		</a>
		<a href="term.html" class="header_buttons"><i>Terms-and-Rules<i></a>
		<a href="place.html" class="header_buttons"><i>Place To Know<i></a>
		<div class="dropdown">
		<button class="dropbtn"><i>User</i></button>
		<div class="dropdown-content">
		<a href="userLogin.html">LogIn</a>
		</div>
		</div>

		<div id="divider"></div>
		<div id="news">
		<div id="in_news">
		<video width="100%px" height="100%px" src="images/v.webm" controls autoplay></br>
		</div>
		<div>
		<p>Group members:</p>
		<ol style="color:green">
		<li>Abraham Tilahun...1010667</li>
		<li>Tinsae Mesifin...1011071</li>
		<li>Dereje Bantie...1010824</li>
		<li>Mikaya Zeleke...1010584</li></ol></div>
		<div>
		<img src="images/Addis_Ababa_by_night_activity.jpg" Alt="Advertisment">
		<img src="images/flower.PNG" Alt="Advertisment">
		</div>
		</div>
		<div id="content">
		<p><h3 style="color:blue" align="center"><i>Welcome to Ethio online bus ticket.<i></h3></p><br/><br/><br/>
		<?php include("slideshow.html");?>
		</div>
		<div id="foot">
		<img width="100%px" height="40px"src="images/selam.PNG">
		<div align="center"><i><h4 style="color:blue">&copy;2012 E.c Ethio online bus ticket</hr></i></div>
		</fieldset>
		</BODY>
		</HTML>
