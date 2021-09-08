<?php 

$cards  = array(
	"card1" => array("netcat tool", "netcat is a tool for penetration testing that allow us recive and send sockets a cross TCP/UDP protocols", "Hamza Elansari", "https://hkgang.com/%d8%a3%d8%af%d8%a7%d8%a9-netcat/"),

	"card2" => array("types of hackers", "Hackers can be classified into three different categories", "Abdelaziz Elkhazri", "https://hkgang.com/%d8%a3%d9%87%d9%85-%d8%a3%d9%86%d9%88%d8%a7%d8%b9-%d8%a7%d9%84%d9%87%d8%a7%d9%83%d8%b1%d8%b2/"),

	"card3" => array("ethical hacking steps", "Like all good projects, ethical hacking too has a set of distinct phases. It helps hackers to make a roadmap..", "Lelouche", "https://hkgang.com/%d8%a7%d9%84%d9%85%d8%b1%d8%a7%d8%ad%d9%84-%d8%a7%d9%84%d8%aa%d9%8a-%d9%8a%d8%aa%d8%a8%d8%b9%d9%87%d8%a7-%d8%a7%d9%84%d9%87%d8%a7%d9%83%d8%b1-%d8%a7%d9%84%d8%a3%d8%ae%d9%84%d8%a7%d9%82%d9%8a-%d8%ae-2/"),

	"card4" => array("injection attacks", "An injection attack is a malicious code injected in the network which fetched all the information from the database to the attacke", "Abdelaziz Elkhazri", "https://hkgang.com/%d8%b4%d8%b1%d8%ad-%d9%85%d8%a8%d8%af%d8%a1-%d8%a7%d9%84%d8%a5%d8%ae%d8%aa%d8%b1%d8%a7%d9%82-%d8%b9%d9%86-%d8%b7%d8%b1%d9%8a%d9%82-injection/"),

	"card5" => array("linux directories", "When you will be familiar with Linux, you'll find directories such as your home directory, tmp, usr...ect, each one of them has a specifec rulls", "Hamza Elansari", "https://hkgang.com/linux-directorys"),

	"card6" => array("Capture The FLag", "CTF events are cyber security competitions. Participants compete in security challenges for the purpose of obtaining the highest score.", "Abdelkarim mchklt", "https://hkgang.com/capture-the-flag"),

	"card7" => array("port scanning", "A port scan is determining which ports on a network are open. for gathering all services that you exsploit for accses into target machine", "Abdelaziz Elkhazri", "https://hkgang.com/%d9%81%d8%ad%d8%b5-%d8%a7%d9%84%d8%a8%d9%88%d8%b1%d8%aa%d8%a7%d8%aa/"),

	"card8" => array("scada systems", "A SCADA is an automation control system that is used in industries such as energy, oil and gas, water, power, and many more", "Hamza Elansari", "https://hkgang.com/scada-sys/"),
);

function set_card($elemts)
{
	foreach ($elemts as $card => $infos) {
		echo '<div class="articl-card">';
		echo "<h2>" . $infos[0] . "</h2>";
		echo "<p>" . $infos[1] . "</p>";
		echo '<span class="author">' . "Author: " . $infos[2] . "</span><br>";
		echo '<a href="' . $infos[3] . '" class="readmore">read more...</a>';
		echo "</div>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HKG - CYBER SECURITY</title>
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
			<li><a href="projects.php">projects</a></li>
			<li><a href="#" style="border-bottom: 5px solid rgb(120, 255, 140);color: rgb(120, 255, 140);">cyber security</a></li>
			<li><a href="#atricls-header">articls</a></li>
			<li id="right-nav">
				<form action="search.php">
					<input type="text" name="search" placeholder="search..." required>
				</form>
			</li>
		</ul>
	</div>
	<div class="cybersec-header">
		<h1>HKG - cyber security</h1><br>
		<h4>we are HKG members we talk to machines.</h4>
		<h2>HKG cyber security</h2>
		<p id="center-text">HKG is a moroccan community so that we promot sharing cyber security or hacking in general articls with<span id="special"> arabic language </span> on our articles website. we are sharing also courses, resourses, videos, stories and roadmapes.<br>
		enjoy reading our articls and we will happy if you shared an ideas, comments, motivaion with us.<br>
		<a href="https://hkgang.com" target="_blank" id="articls">our articls website</a><br>
	</div>
	<div class="atricls-header" id="atricls-header">
		<div class="row">
			<h1>Articls</h1>
			<?php set_card($cards); ?>
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>