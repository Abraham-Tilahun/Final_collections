<html>
<head>
<link rel="stylesheet" href="fontawesome.css"/>
<style type="text/css">
			.menu ul 
					{
				
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    width: 100%;
			    background-color: #554532;
			}

			.menu li a {
			    display: block;
			    color: #fff;
			    padding:15px;
			    text-decoration: none;
			    border-top: 1px solid white;
			}

			/* Change the link color on hover */
			.menu li a:hover {
			    background-color: #929c9c;
			    color: #fff;
			}
</style>

</head>
<body>
<div class="menu">
<p style="background-color: #278cd8;color: #e4ebe7;width: auto; height: 40px;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: -5px;"><b>User Links</b></p>
<ul>
<li style="color: #fff;margin-left: 50px;height: 40px;">
<div> 
				<script src="js/dateandtime.js"></script>
				<script type="text/javascript">
				var calendarDate = getCalendarDate();
				document.write(calendarDate);
				</script>
				<form name="clock">
				<input type="submit" class="trans" name="face" value="" style="color: #fff;border: none;">
			</form>
		</div></li>
	
	<li><a href="apply_for_voter.php"title="you can apply here"><i class="fa fa-question-circle"></i>Apply for Voter</a></li>
	<li><a href="apply_for_candidate.php"title="you can applay here"><i class="fa fa-question-circle"></i>Apply for Candidate</a></li>

</ul>
<div style="margin-top: 10px;">
<p style="background-color: #278cd8;color: #e4ebe7;width: auto; height: 40px;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: -5px;"><b>User View Links</b></p>
<ul>
<li style="border-top: none;"><a href="NoticeView.php"title="view notice"><i class="fa fa-info-circle"></i>Notice</a></li>
<li><a href="ViewElectionResult.php"title="view election result for all capmus presidant"><i class="fa fa-universal-access"></i>View Election Result</a></li>
<li>
<a href="viewaccountactivation.php" title="View Account Activation "><i class="fa fa-user"></i> Account Response</a> <br>
</li>
<li>
<a href="Admin/report.pdf"target="_blank">View Report</a> <br>
</li>
</ul>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>
</div>
</body>
</html>