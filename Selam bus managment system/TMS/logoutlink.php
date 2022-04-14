
<html>
<head>
<link rel="stylesheet"
type="text/css"
href="../css/sttyle.css">
<?php include'Language/lang.php';?>
<meta charset="utf-8">

</head>
<body>
<div id="links">
	<ul>
	<li><a href="#"><?php echo htmlspecialchars($lang['home']);?></a>
	</li>
	<li><a href="#.php"target="myframe"><?php echo htmlspecialchars($lang['t']);?></a>
	<ul>
	<li><a href="">Mission</a></li>
	<li><a href="">Vision</a></li>
	</ul>
	</li>
	<li><a href="Contact.php"target="myframe"><?php echo htmlspecialchars($lang['cus']);?></a></li>
	<li><a href="form1/Requestform.php"target="myframe"><?php echo htmlspecialchars($lang['req']);?></a></li>
	
	<li><a href="Help.php"target="myframe"><?php echo htmlspecialchars($lang['help']);?></a>
	<ul>
	<li><a href="vedio.php"target="myframe"><?php echo htmlspecialchars($lang['video']);?></a></li>
	<li><a href="xxx.php"target="myframe"><?php echo htmlspecialchars($lang['text']);?></a></li>
	</ul>
	</li>
	<li><a href="../logout.php"><?php echo htmlspecialchars($lang['logout']);?></a></li>


		<?php
$r=$_SESSION['USER_ID'];
$logout_query=mysql_query("select * from Account where USER_ID='$r'");
$row=mysql_fetch_array($logout_query);
$type=$row['ROLE'];
?>
<p><font color="white">Welcome:
<b><?php echo $row['USER_NAME'] ;
?>
	</b></ul>
	</body>
	</html>