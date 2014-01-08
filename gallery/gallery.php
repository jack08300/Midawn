<?php
//load db data
require('../config.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//set this page name
$thisPage = "gallery/gallery.php";
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
		<link rel="stylesheet" type="text/css" href="css/gallery.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<img src="pics/midawnLogo.png" height="30" width="172">
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
						<h2>GALLERY</h2>
					</div>
					<div class="filter">
						
					</div>
				</div>
				<div id="content">
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" fullPic= "pics/gallery/01.jpg" src="pics/gallery/01.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" fullPic= "pics/gallery/02.jpg" src="pics/gallery/02.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/03.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/04.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/05.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/Daily/01.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/NewOrleans/1.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/NewOrleans/2.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/NewOrleans/3.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/NewOrleans/4.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/NewOrleans/5.jpg"></div></div>
					<div class = "miniPicBlock"><div class="miniPicCell">
					<img class = "miniPicture" src="pics/gallery/NewOrleans/6.jpg"></div></div>
				</div>
				<div id="rightBar">
				</div>
			</div>
		</div>
		<div id="smokeScreen"></div>
		<div id="fullBody">
			<div id="fullContainer">
				<div id="fullPicBlock">
					<img id = "fullPicture" src="pics/gallery/NewOrleans/1.jpg">
				</div>
			</div>
		</div>
		</div>
	</body>
</html>

<?php mysqli_close($conn); ?>