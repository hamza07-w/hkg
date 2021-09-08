<?php
$searchs = array(

	"projects"     =>  array("projects.php", "projects.php#cms-ripper", "projects.php#ransomware", "projects.php#cryptoghost"),
	"ransomware"   =>  array("projects.php#ransomware"),
	"cms"          =>  array("projects.php#cms-ripper"),
	"hash"		   =>  array("projects.php#cryptoghost", "projects.php#cryptoghost"),
	"crypto"       =>  array("projects.php" , "projects.php#ransomware", "projects.php#cryptoghost"),
	"informations" =>  array("projects.php#cms-ripper"),
	"server"       =>  array("projects.php#cms-ripper"),

	"cyber"        =>  array("cybersec.php"),
	"security"     =>  array("cybersec.php", "projects.php"),
	"hacking"      =>  array("cybersec.php", "projects.php"),
	"articls"      =>  array("cybersec.php#articls")

);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$file= test_input($_GET['search']);
$result_count = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>search - <?php echo $file; ?> </title>
	<meta name = "author" content = "Hamza Elansari" />
	<meta name = "description" content = <?php echo "search result for " . $file; ?> />
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
			<li><a href="cybersec.php">cyber security</a></li>
			<li id="right-nav" style="border-bottom: 2px solid rgb(120, 255, 140);color: rgb(120, 255, 140);">
				<form action="search.php">
					<input type="text" name="search" placeholder="search..." required>
				</form>
			</li>
		</ul>
	</div>
	<div class="project1" style="padding:60px;">
		<h1 style="padding: 20px;"><?php echo "search result for -" . $file ; ?></h1>
		<div style="float: left">
			<h2>search keyword:</h2>
			<h2 style="color: white;"><?php echo $file; ?></h2>
		</div>
		<div style="float: right;">
			<h2>result:</h2>
			<?php
				foreach ($searchs as $keyword => $result) {
					if ($file == $keyword){
						for($i=0 ; $i<=count($result); $i++){
							if (substr($result[$i],-4) == ".php") {
								echo '<a id="links" href="' . $result[$i] . '">' . $result[$i] . '</a><br>';
							}
							else {
								echo '<a id="links" href="' . $result[$i] . '">' . substr($result[$i], 12) . '</a><br>';
							}
							$result_count++;
						}
					}
				}
				if ($result_count == 0) {
					echo '<span style="color: red;padding-right:10px;font-size:18px;"> no result found!</span>';
				}
			?>
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>






