<html>
<head>
<link rel="stylesheet"
type="text/css"
href="css/sttyle.css">
<?php include'Language/lang.php';?>
<meta charset="utf-8">
</head>
<div id="links">
	<ul>
	<li><a href="#"><?php echo htmlspecialchars($lang['home']);?></a>
	</li>
	<li><a href="#"><?php echo htmlspecialchars($lang['t']);?></a>
	<ul>
	<li><a href="">Mission</a></li>
	<li><a href="">Vision</a></li>
	</ul>
	</li>
	<li><a href="Contact.php"target="myframe"><?php echo htmlspecialchars($lang['cus']);?></a></li>
	<li><a href="form1/Requestform.php"target="myframe"><?php echo htmlspecialchars($lang['req']);?></a></li>
	<li><a href="#"><?php echo htmlspecialchars($lang['view']);?></a>
	<ul>
	<li><a href="Viewindividualrequest.php"target="myframe"><?php echo htmlspecialchars($lang['response']);?></a></li>
	<li><a href="uploadddd.php"target="myframe"><?php echo htmlspecialchars($lang['notice']);?></a></li>
	<li><a href="ViewSchduleRequest.php"target="myframe"><?php echo htmlspecialchars($lang['schedule']);?></a></li>
	</ul>
	</li>
	<li><a href="login.php"target="myframe"><?php echo htmlspecialchars($lang['login']);?></a></li>
	<li><a href="post_and_comment/index.php"target="myframe"><?php echo htmlspecialchars($lang['comment']);?></a></li>
	<li><a href="Help.php"target="myframe"><?php echo htmlspecialchars($lang['help']);?></a>
	<ul>
	<li><a href="vedio.php"target="myframe"><?php echo htmlspecialchars($lang['video']);?></a></li>
	<li><a href="xxx.php"target="myframe"><?php echo htmlspecialchars($lang['text']);?></a></li>
	</ul>
	</li>
	<style>
	.lang a{
		
	color:white;
text-decoration:none;	
	}
	</style>
	<div class="lang">
	<a href ="index.php? lang=en">English &nbsp;||</a> <a href ="index.php? lang=it">አማርኛ </a>
	</div>
	</ul>
	</html>