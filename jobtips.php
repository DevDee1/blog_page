<?php
require "connec.php";
?>

<!DOCTYPE html>
<html>
<head>
<style>
#main{overflow:auto; padding-bottom:100px}
.footer{position:fixed; left:0; bottom:0; width:100%; background-color:black;color:#fff}
.copyright{float:left;margin-left:30px}
.contact{float:right; padding:10px;margin-right:30px}





.readmore:hover{font-weight:bold}
.readmore{padding:4px; font-size:9px; background:black; border:0; color:white;}
.btn{padding:6px; background:black;color:white; border:0;font-size:12px;}
.btn:hover{font-weight:bold}
.search-box{width:210px;height:25px;font-family:arial;font-size:15px;border:0;background:rgb(200,200,200)}
.search {width:15%;float:left;margin-right:30px; padding:0;font-size:15px}
.wrapper{width:100%;margin:120px auto}



.links {width:15%; margin-left:30px;float:left;background:white; position:relative; font-family:arial}
.links h3{background:yellow; color:black;text-align:center}
.links a{color:blue; font-size:15px;font-size:13px; display:block}
.links a:hover{text-decoration:underline; color:blue}

a{text-decoration:none}
fieldset{width:165px; text-align:center;background:rgb(210,210,210);float:left; height:135px;
 margin-left:5px;
 margin-top:2px; border:0}
.frame{text-align:center; width:60%; float:left; margin:0px auto;font-size:13px;
font-family:arial}
body{margin:auto;background:#f3f3f3; padding:0}
.banner{width:100%; margin:auto; font-size:15px;background:black; color:white; text-align:center; 
padding:5px;position:fixed}
.container{position:relative; display:inline-block}
.content{display:none; position: absolute}
div .content a{text-decoration:none; display:block; padding:7px; color:blue; 
z-index:1;background:#f3f3f3}
.container:hover .content{display:block}
div .content a:hover{color:green; opacity:0.8}



.nav-main{width:100%; height:50px;background-color:black; 
display:flex; flex-wrap:wrap;z-index:1000; position:fixed; top:0}

.nav-main ul{display:flex; flex-wrap:wrap;padding-left:15px}
.nav-main ul li{list-style:none; line-height:15px;float:left}
.nav-main ul li a{display:block;height:100%;padding:5px; line-height:12px;text-transform:uppercase;
text-align:center; width:150px;text-decoration:none; color:#fff;font-family:arial; font-size:15px;}
.nav-main ul li a:hover:not(.services){color:green; font-weight:bold}
.nav-main .services{font-weight:bold;color:green}

</style>
</head>
<body>
<div id="cover">
<div id="main">

<div class="nav-main">
<div class="btnn-menu" onclick = "sideToggle()"></div>
<ul>
<li><a class="home" href="home.php" target="_blank">Home</a></li>
<li><a class="info" href="jobopenings.php" target="_blank">Job Openings</a></li>
<li><a class="about" href="about.php" target="_blank">About Us</a></li>
<li><a class="services" href="jobtips.php">Job Tips</a>
</li>
</ul>
</div>
<div class="wrapper">



<?php
include_once "recentpost.php";
?>

<div class="frame">
<fieldset class="fieldset">
<h4>Top-12<br>
Questions and Answers<br>
Job Interview</h4>
<p>You might feel that the answers to... <a class="readmore" href="top12.php" target="_blank">Read More</a></p>
</fieldset>

<fieldset class="fieldset">
<h4>25 Interviewing Tips</h4>
<p>1. Relax. The employment interview is just... <a class="readmore" href="intervingtips.php" target="_blank">Read More</a> </p> 
</fieldset>

<fieldset class="fieldset">
<h4>General Guidelines in Answering Interview Questions</h4>
<p>Everyone is nervous on interviews. If... <a class="readmore" href="guidelines.php" target="_blank">Read More</a></p> 
</fieldset>

<fieldset class="fieldset">
<h4>25 “What Do I Do Now That I Have My Resume?” Tips</h4>
<p>1. Develop a team of people who will be your... <a class="readmore" href="resume.php" target="_blank">Read More</a></p>
</fieldset>

<fieldset class="fieldset">
<h4>25 Tips For Using The Internet In Your Job Search</h4>
<p>1. When typing your resume out with the intent of emailing... <a class="readmore" href="jobinternet.php" target="_blank">Read More</a></p>
</fieldset>


<fieldset class="fieldset">
<h4>25 “What Do I Do Now That I Have My Resume?” Tips</h4>
<p>1. Develop a team of people who will be your... <a class="readmore" href="networking.php" target="_blank">Read More</a></p>
</fieldset>

</div>





<div class ="search">
<form action="searchcode.php" method="POST">
<input type="text" class="search-box" name="search" placeholder="Search..."/><button type="submit" class="btn"
 name="search-btn">Search</button>
</form>
</div>
</div>

</div>
</div>
<footer class="footer">
<div class="copyright">
<p>posted by: Infoscarrier</p>
copyright &copy2019 infoscarrier. All Right Reserved
</div>
<div class="contact">
<h4>Contact</h4>
Tel: +2347039531877
</div>
</div>
</footer>
</body>

</html>