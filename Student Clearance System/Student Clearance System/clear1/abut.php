<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>About us</title>
  <link rel="stylesheet" type="text/css" href="magicslideshow/magicslideshow.css" media="screen"/>
        <!-- link to magicslideshow.js file -->
        <script src="magicslideshow/magicslideshow.js" type="text/javascript"></script>
        <style type="text/css">
        #slide-2 .mss-slider,
        #slide-2 .mss-selectors {
            background-color: #e7eabf;
        }
        #slide-2 .mss-slide { padding-left: 8px; }
        </style>
  <style type="text/css">
  </style>
  <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
  <link href="stylemain.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
  a:link {
	color: #C6F;
}
a:visited {
	color: #FCC;
}
a:hover {
	color: #F69;
}
a:active {
	color: #9F9;
}
  </style>
  <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
  </head>
  <body bgcolor="#adb9bc">
  <center>
  <div id="whole">
  <div id="header"><img src="IMAGE2/uogone1.jpg" width="900" height="162" /></div>
    <div id="menubar">
    <center> <ul id="MenuBar1" class="MenuBarHorizontal">
       <li><a href="clearhome.php" style="background:#191970"><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">Home</font></strong></a>       </li>
       <li><a href="abut.php" style="background:#191970"><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">About Us</font></strong></a>
      </li>
       <li><a href="#" style="background:#191970" class="MenuBarItemSubmenu"><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">Login</font></strong></a>
         <ul>
           <li><a href="adminlogin.php">Admin login</a></li>
           <li><a href="staffloginmain.php">Staff login</a></li>
           <li><a href="studloginmain.php">Student login</a></li>
         </ul>
       </li>
       <li><a href="gallary.php" style="background:#191970"><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">Gallary</font></strong></a></li>
       <li><a href="comment.php" style="background:#191970"><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">Comment</font></strong></a></li>
       <li><a href="contactmain.php"style="background:#191970" ><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">Contact Us</font></strong></a></li>
      <li><a href="help1.php"style="background:#191970" ><strong><font color="#FFFFFF" face="Times New Roman, Times, serif">Help</font></strong></a></li>
 
     </ul>
     </center>
  </div>
   <div id="main">
   <div id="right">
   <br />
   <img src="IMAGE2/IMG_20160518_180030.JPG" width="199" height="157" />
    <div id="link">
   <a href="#">
   <p><img src="IMAGE2/icon_youtube.png" /></p></a>  
 <p><a href="#"><img src="IMAGE2/icon_facebook.png" /></a></p>
 <p><a href="http://www.twitter.com/HaramayaUni"><img src="IMAGE2/icon_twitter.png" /></a></p>
 </div>
 <div id="right3">
   <script src="jss/time.js" language="javascript" type="text/javascript"></script>
		<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
<h4>Calender</h4>		
<script language="javascript">
monthnames = new Array("January","Februrary","March","April","May","June","July","August","September","October","November","Decemeber");
var linkcount=0;
function addlink(month, day, href) {
var entry = new Array(3);
entry[0] = month;
entry[1] = day;
entry[2] = href;
this[linkcount++] = entry;
}
Array.prototype.addlink = addlink;
linkdays = new Array();
monthdays = new Array(12);
monthdays[0]=31;
monthdays[1]=28;
monthdays[2]=31;
monthdays[3]=30;
monthdays[4]=31;
monthdays[5]=30;
monthdays[6]=31;
monthdays[7]=31;
monthdays[8]=30;
monthdays[9]=31;
monthdays[10]=30;
monthdays[11]=31;
todayDate=new Date();
thisday=todayDate.getDay();
thismonth=todayDate.getMonth();
thisdate=todayDate.getDate();
thisyear=todayDate.getYear();
thisyear = thisyear % 100;
thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
if (((thisyear % 4 == 0) 
&& !(thisyear % 100 == 0))
||(thisyear % 400 == 0)) monthdays[1]++;
startspaces=thisdate;
while (startspaces > 7) startspaces-=7;
startspaces = thisday - startspaces + 1;
if (startspaces < 0) startspaces+=7;
document.write("<table border=1 bgcolor=bluebrown width=200 height=200");
document.write("bordercolor=black><font color=black>");
document.write("<tr bgcolor=#CCCCCC><td colspan=7><center><strong>" 
+ monthnames[thismonth] + " " + thisyear 
+ "</strong></center></font></td></tr>");
document.write("<tr>");
document.write("<td align=center>Su</td>");
document.write("<td align=center>M</td>");
document.write("<td align=center>Tu</td>");
document.write("<td align=center>W</td>");
document.write("<td align=center>Th</td>");
document.write("<td align=center>F</td>");
document.write("<td align=center>Sa</td>"); 
document.write("</tr>");
document.write("<tr>");
for (s=0;s<startspaces;s++) {
document.write("<td> </td>");
}
count=1;
while (count <= monthdays[thismonth]) {
for (b = startspaces;b<7;b++) {
linktrue=false;
document.write("<td>");
for (c=0;c<linkdays.length;c++) {
if (linkdays[c] != null) {
if ((linkdays[c][0]==thismonth + 1) && (linkdays[c][1]==count)) {
document.write("<a href=\"" + linkdays[c][2] + "\">");
linktrue=true;
      }
   }
}
if (count==thisdate) {
document.write("<font color='FF0000'><strong>");
}
if (count <= monthdays[thismonth]) {
document.write(count);
}
else {
document.write(" ");
}
if (count==thisdate) {
document.write("</strong></font>");
}
if (linktrue)
document.write("</a>");
document.write("</td>");
count++;
}
document.write("</tr>");
document.write("<tr>");
startspaces=0;
}
document.write("</table></p>");
</script></div>
   </div>
    <div id="left">
    <br />
   <img src="IMAGE2/IMG_20160518_180030.JPG" width="199" height="157" /><br />
   <h3>Expected offices</h3>
   <div class="sidebar">
     <ul>
       <li><a href="#">Registrar</a></li>
       <li><a href="#">Book store</a></li>
       <li><a href="#">LAB</a></li>
       <li><a href="#">Department</a></li>
       <li><a href="#">Student Affairs</a></li>
       <li><a href="#">College Dean</a></li>
       <li><a href="#">College Advisor</a></li>
       <li><a href="#">Cafe</a></li>
       <li><a href="#">Sport master</a></li>
       <li><a href="#">Proctor</a></li>
       <li><a href="#">Library</a></li>
     </ul>
   </div>
   <br />
   <style>
.sidebar{
float:left;
width:200px;
background:#;
margin:-20;
left:10px;
}
.sidebar li {
	list-style-type:none;
	margin: 6px; padding: 5px;
    list-style-image: none;
	background:#0CF;
	font-weight:bold;
    font-family:Tahoma, Geneva, sans-serif;
	
}
.sidebar a {
	transition:all linear 0.15s;
    text-decoration:none;
	font-weight:bold;
    color:#33C;
}
.sidebar li:hover > a, {
    text-decoration:none;
    background-color:#9CC;
}
.sidebar > ul > li:hover > a, .sidebar  {
    display:block;
	color:#0C3;
	
}

   </style>
    </div>
    <div id="center">
    <div class="MagicSlideshow" data-options="width: 480; height: 46.8%; selectors: bottom;">
                <img src="Jonas photos/cafe.GIF" width="880"/>
                <img src="Jonas photos/cafe2.GIF" width="880"/>
                <img src="Jonas photos/gech.gif" width="880"/>
                <img src="Jonas photos/lib.gif" width="880"/>
                <img src="Jonas photos/lib.gif" width="880"/>
                <img src="Jonas photos/proctor.GIF" width="880"/>
                <img src="Jonas photos/reg.gif" width="880"/>
                <img src="Jonas photos/reg2.gif" width="880"/>
                <img src="Jonas photos/reg3.gif" width="880"/>
                <img src="Jonas photos/studaff.gif" width="880"/>
            </div><center><h2><I>Clearance </I></h2> </center>
            <p align="justify" style="font-family:'Times New Roman', Times, serif " >  
          In many institutions, when a person is about to disengage from an institution, the person under goes through a clearance process to determine the persons status, whether he/she will be permitted to disengage. If the person is free to disengage, then he or she will be issued a clearance.
          Clearance is a certificate giving permission for something to be done. In higher institution of learning, final year students, students those who end the semester and students those who left the class due to some problems like because of illness that have satisfied the academic requirements graduate must undergo a clearance process before they disengage from the university. The process of clearing involves the student’s academic department, faculty ,proctor, students affairs, library, cafe, sport department, bookstore and registrar(exams and records).A final year student is allowed to collect  his/her graduation certificate only after he/she has been cleared.  
            
            </p>
   </div>
   <div id="footer"><p  style="text-align:center;">&copy; Copyright 2016 - 2020  <a href="/about"> menberu,getachew,lincho yonas and  wobshet </a> unless otherwise noted | All Rights Reserved.</p>
  </div>
  
   </div>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
  </body>
  </html>
</div>
