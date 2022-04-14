
<?php
require_once('function.php');
session_start();
?>
<!doctype html>
<html><br>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Account</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<!--<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>-->
	<!--<script type="text/javascript" src="js/jquery.equalHeight.js"></script>-->
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

<style type="text/css">
table.test {
    width           :  1000px;
    /*border-collapse : collapse;*/
    table-layout    : fixed;
	background:#FFF;
	
}

th.author {
    width    : 120px;
    border   : 1px solid red;
}

th.di {
    width    : 150px;
    border   : 1px solid red;
	
}

td.long {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid black;
}

th.id {
    overflow    : hidden;
    white-space : nowrap;
    width       : 30px;
    border      : 1px solid black;
}

th.title {
    overflow    : hidden;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
}

th.heading {
    overflow    : hidden;
    white-space : nowrap;
    width       : 100px;
   border      : 1px solid red;
}

th.body {
    overflow    : hidden;
    white-space : nowrap;
    width       : 150px;
    border      : 1px solid red;
}

th.ed {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
}

td.id {
    overflow    : hidden;
    white-space : nowrap;
    width       : 30px;
    border      : 1px solid red;
	background:#C63;
}

td.title {
    overflow    : HIDDEN;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
	text-align:center;
}

td.heading {
    overflow    : HIDDEN;
    white-space : nowrap;
    width       : 200px;
    border      : 1px solid red;
	word-wrap: break-word;
	text-align:center;
}


td.body {
	overflow-y:scroll;
	overflow-x: scroll;
    overflow    : scroll;
    
	/*height:80px;*/ /*word-wrap: break-word;*/
	/*word-wrap: break-word;*/
	white-space : nowrap;
    width       : 800px;
    border      : 1px solid red;
	text-align:center;
	text-overflow: ellipsis;
	overflow: auto;
	position:relative;
	
	
}

td.author {
    overflow    : scroll;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
	text-align:center;
}

td.di {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
	text-align:center;
}

td.ed {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
	text-align:center;
	background:#3CF;
}

td.blank {
	width    : auto;
	border      : 1px solid red;
	height: auto;
	border-bottom-style: groove;
	padding: 10px;
}

/*p.test
{
word-wrap:break-word;
}*/ 

.style1 {
	font-size: 12px;
	font-weight: bold;
}
</style>
</head>
<br>
<body bgcolor="#5F9EA0">
<!--div class="container">
<div class="header">
  <p>-->
    <form>
<?php include("adlogoadmin.php"); ?> 
</form>
  <form>

</form> 

<div style="clear:both"></div></center><?php include("adminverticalbar.php"); ?>
       <p style="text-align:justify; font-size:18px; color:#003366;">  
	  <script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
<style type="text/css">
body{
    
	font-family:"Times New Roman", Times, serif;
	color:#000000;
	}
h2{
    text-align:center;
	font-size:36px;
	margin:0px;
   }
</style>  
	
   <form id="form1" name="abc" method="post" action="editaccount-exec.php" onSubmit="return validateForm1()">

<div style="float:left;"><strong>Update Account</strong></div>
 <div style="float:right; margin-right:3px; background-color:#cccccc; width:25px; text-align:center; height:22px;"><a href="admin_commit.php">X</a></div>
 
 
 </div>
  <table width="368" align="center">
	<tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div></td>
  </tr>
  <tr>
  <td>
<?php
//include('allmembers.php');
				  if (isset($_GET['id']))
	{
	
 echo '<form action="editaccount-exec.php" method="post" name="abc" onsubmit="return validateForm1()">';
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>"
			include('config.php');
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM Account WHERE id = $id");

			while($row = mysql_fetch_array($result))
  			{
			echo '<strong>Account Id:</strong>'.'<input type="text" name="id" value="'. $row['id'] .'">'; 
			echo '<br>';
			echo '<strong>Fullname:</strong>'.'<input type="text" name="fullname" value="'. $row['fullname'] .'">'; 
			echo '<br>';
  			echo '<strong>Username:</strong> '.'<input type="text" name="username" value="'. $row['username'] .'">'; 
			   echo '<br>';
			  echo '<strong>Password: '.'<input type="text" name="password" value="'. $row['password'] .'">';
			   echo '<br>';
			   echo '<strong>Phone No:</strong> '.'<input type="text" name="phone_number" value="'. $row['phone_number'] .'">'; 
			   echo '<br>';
			  echo '<strong>Account type: </strong>'.'<input type="text" name="account_type" value="'. $row['account_type'] .'">';
			   echo '<br>';
			   echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			  echo '<input name="" type="submit" value="Update" />';
			  //echo '<input name="" type="reset" value="Clear" />';
  			}
	echo '</form>';
			}
			?>
			</td></tr></table></form></center>
		
<br/>
</body>
</html> 

 <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br>
 
	<!---------------------------------- end container -------------------------------->

<?php include("footer.php"); ?>
</body>
</html>