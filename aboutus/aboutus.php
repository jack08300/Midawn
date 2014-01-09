<?php
//load db data
require('../config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//set this page name
$thisPage = "aboutus/aboutus.php";
//check GET
$getMode = 0;
if(isset($_GET['mode'])) {
	$getMode = $_GET['mode'];
	if(isset($_GET['codename'])) $getCodename = $_GET['codename'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>MiDawn</title>
		<base href="/Midawn/">
		<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
		<script src="js/home.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/aboutus.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<a href="index.php"><img src="pics/midawnLogo.png" height="30" width="172"></a>
			</div>
			<div id="navigationBar">
				<img id="naviArrow" src="pics/yarrow.png" height="15" width="15">
				<span class="naviBar" style="margin-left:380px;">	
					<a href="index.php">Home</a>
				</span>
				<span class="naviBar">
					<a href="news/news.php">News</a>
				</span>
				<span class="naviBar">
					<a href="products/products.php">Products</a>
				</span>
				<span class="naviBar">
					<a href="aboutus/aboutus.php">About Us</a>
				</span>
				<span class="naviBar">
					<a href="gallery/gallery.php">Gallery</a>
				</span>
			</div>
			<div id="main">
				<div id="sidebar">
					<div id="subTitle">
						<h2>ABOUT US</h2>
					</div>
					<div class="filter">
						<a href="aboutus/aboutus.php">
						<img class="sideIcon" src="pics/crews/MidawnIcon.png">
						<div class="sideTitle">MiDawn</div>
						</a>
					</div>
					<div class="filter">
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp MEMBERS<br>
						<?php
						$sql = "SELECT name, codename FROM md_about WHERE category='member'";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($result)){
							$name = $row['name'];
							$codename = $row['codename'];
							echo str_repeat("&nbsp", 16);
							$thisPagee="text";
							echo "<a href=\"".$thisPage."?mode=1&codename=".$codename."\">";
							echo $name."</a>";
							echo "<br>";
						}
						?>
					</div>
				</div>
				<div id="content">
					<?php
					if($getMode != 1) {
						$sql = "SELECT name, detail, picture FROM md_about WHERE aboutID=1";
						$result = mysqli_query($conn, $sql);
						if($row = mysqli_fetch_array($result)) {
							$name = $row['name'];
							$detail = $row['detail'];
							$picture = $row['picture'];
						}
						echo "<h1>".$name."</h1>";
						echo "<p>".$detail."</p>";
						echo "<img class=\"bigPicture\" src=\"".$picture."\">";
					} else {
						$sql = "SELECT name, position, detail, icon FROM md_about WHERE codename='".$getCodename."'";
						$result = mysqli_query($conn, $sql);
						if($row = mysqli_fetch_array($result)) {
							$name = $row['name'];
							$position = $row['position'];
							$detail = $row['detail'];
							$icon = $row['icon'];
						}
						echo '<img class="smallPicture" src="'.$icon.'">';
						echo "<h1>".$name."</h1>";
						echo "<h2>".$position."</h2>";
						echo "<p>".$detail."</p>";
					}
					?>
				</div>
				<div id="rightBar">
				</div>
			</div>
		</div>
	</body>
</html>

<?php mysqli_close($conn); ?>