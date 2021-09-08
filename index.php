<!DOCTYPE html>
<html>
<head>
	<title>HKG - HOME</title>
	<meta name = "author" content = "Hamza Elansari" />
	<link rel = "icon" href = "img/hkgicon.png" type = "image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/nav-bar.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/projects.css">
	<link rel="stylesheet" type="text/css" href="css/cybersec.css">
	<link rel="stylesheet" type="text/css" href="css/articls.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<div class="menu">
		<ul>
			<li><a href="#" style="border-bottom: 5px solid rgb(120, 255, 140);color: rgb(120, 255, 140);">home</a></li>
			<li><a href="projects.php">projects</a></li>
			<li><a href="cybersec.php">cyber security</a></li>
			<li id="right-nav">
				<form action="search.php">
					<input type="text" name="search" placeholder="search..." required>
				</form>
			</li>
		</ul>
	</div>
	<div class="home-header">
		<h1>HKG - HOME</h1><br>
		<h4>we are HKG members we talk to machines.</h4>
		<h2>what is HKG ?</h2>
		<p id="center-text">HKG is a short name means HACKING GANG, its a moroccan organization contain genius and talented members, working on many it fields, cyber security, penatration testing, bug bounty hunting, front end, back end, problem solving, web applications, desktop applications and more fields by publishing articls and sharing there knowledge.<br>
		<a href="https://hkgang.com" target="_blank" id="articls">our articls website</a><br>
	</div>
	<div class="project1" style="margin: 15px; padding:20px;">
		<h1>maroc web awards</h1>
		<a href="img/index.jpg"><img style="float: right; border-radius: 10px;" id="pic" src="img/mwa.jpg"></a>
		<p>The Maroc Web Awards are considered to be the best web competition taking part in the North Africa and Middle East region. Its primary objective is to support content creators and promote the opportunities offered by the Moroccan digital market, while celebrating, inspiring and cultivating the spirit of innovation and creativity.<br>our organization Won Two Titles In Different Categories By "Moroccan Web Awards" in tow years 2020 and 2021<br></p>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>