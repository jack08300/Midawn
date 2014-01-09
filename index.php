<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>MiDawn</title>
		<base href="/Midawn/" >
		<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
		<script src="js/home.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
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
				<div id="news">
					<div id="newsLabels" style="float:right; margin-right:35px">
						<a href="news/news.php"><img src="pics/newsLabel.png" height="30" width="80" style="float:right;"></a>
						<img src="pics/newsLabel_1.png" height="30" width="27" style="float:right; margin-right:2px;">
						<img src="pics/newsLabel_4.png" height="30" width="27" style="float:right; margin-right:2px;">
					</div>
					<div id="newsPics1" class="newsPics" style="margin-left:15px; clear:both">	
						<img src="pics/newsThumb_01.png" height="140" width="180" >
					</div>
					<div id="newsPics2" style="height:140px; width:140px; border-right:0px;float:left">
						<div id="newsPics2a" class="newsPics">
							<img src="pics/newsThumb_02.png" height="69" width="69">
						</div>
						<div id="newsPics2b" class="newsPics">
							<img src="pics/newsThumb_02.png" height="69" width="69">
						</div>
						<div id="newsPics2c" class="newsPics">
							<img src="pics/newsThumb_02.png" height="69" width="69">
						</div>
						<div id="newsPics2d" class="newsPics">
							<img src="pics/newsThumb_02.png" height="69" width="69">
						</div>
					</div>
					<div id="newsPics3" class="newsPics">
						<img src="pics/newsThumb_03.png" height="140" width="180">
					</div>
					<div id="newsPics4" class="newsPics" style="margin-left:15px; clear:both">
						<img src="pics/newsThumb_04.png" style="height:100px; width:120px;">
					</div>
					<div class="newsPics">
						<img src="pics/newsThumb_02.png" height="60" width="60">
					</div>
					<div class="newsPics">
						<img src="pics/newsThumb_05.png" height="130" width="170">
					</div>
					<div class="newsPics">
						<img src="pics/newsThumb_06.png" height="110" width="150">
					</div>
					<div style="height:18px;float:left; clear:both">
						<img src="pics/yarrow.png" height="15" width="15" style="float:left; margin-left:15px;">
						<span style="line-height:15px;margin-left:1px;float:left"><a href="news/news.php">Read more...</a></span>
					</div>
					
				</div>
				<div id="products">
					<div id="productsWindow">
						<a href="products/products.php">
						<div class="productsPics" style="width:100px; height:110px; background-color:#fbcc02;color:black; line-height:110px">MyOutfit</div>
						</a>
						<div class="productsPics" style="width:150px; height:110px; line-height:110px">?</div>
						<div class="productsPics" style="width:50px; height:110px; line-height:110px">?</div>
						<div class="productsPics" style="width:50px; height:50px; line-height:50px">?</div>
						<div class="productsPics" style="width:200px; height:50px; line-height:50px">?</div>
						<div class="productsPics" style="width:50px; height:50px; line-height:50px">?</div>
					</div>
					<div id="productsLabel">
						<a href="products/products.php"><span class="labels">
							PRODUCTS
						</span></a>
						<span class="labels" style="width:25px; margin-left:1px"></span>
					</div>
					<div id="productsContent" style="font-size:small; text-align:justify">
						 <b>MyOutfit</b> is a website based on fashion trend and social network. It's very welcome to everyone.
						 Our user testing is coming soon. Please sign up to be the first user. We are providing big surprise for a lucky user.
					</div>
				</div>
				<div id="aboutUs">
					<div id="aboutUsLabel">
						<a href="aboutus/aboutus.php">
							<span class="labels labelsAboutUs">ABOUT US</span>
						</a>
						<a href="aboutus/aboutus.php?mode=1&codename=W">
							<span id="wei" class="labels labelsAboutUs" style="width:20px; margin-left:1px"></span>
						</a>
						<a href="aboutus/aboutus.php?mode=1&codename=J">
							<span id="jay" class="labels labelsAboutUs" style="width:20px; margin-left:1px"></span>
						</a>
						<a href="aboutus/aboutus.php?mode=1&codename=I">
							<span id="iris" class="labels labelsAboutUs" style="width:20px; margin-left:1px"></span>
						</a>
						<a href="aboutus/aboutus.php?mode=1&codename=B">
							<span id="brian" class="labels labelsAboutUs" style="width:20px; margin-left:1px"></span>
						</a>
					</div>
				</div>
				<div id="gallery">
					<div id="galleryLabel">
						<span id="galleryLabel_1" class="labels" style="width:20px"></span>
						<span id="galleryLabel_2" class="labels" style="width:20px; margin-left:1px"></span>
						<span id="galleryLabel_3" class="labels" style="width:20px; margin-left:1px"></span>
						<span id="galleryLabel_4" class="labels" style="width:20px; margin-left:1px"></span>
						<span id="galleryLabel_5" class="labels" style="width:20px; margin-left:1px"></span>
						<a href="gallery/gallery.php">
							<span class="labels" style="margin-left:1px">GALLERY</span>	
						</a>
					</div>
					<div id="galleryWindow">
						<div id = "galleryTruck">
							<div id="galleryPic_1" class="galleryPics">
								<img src="pics/gallery/01.jpg" class="galleryPngs" >
							</div>
							<div id="galleryPic_2" class="galleryPics">
								<img src="pics/gallery/02.jpg" class="galleryPngs" >
							</div>
							<div id="galleryPic_3" class="galleryPics">
								<img src="pics/gallery/03.jpg" class="galleryPngs" >
							</div>
							<div id="galleryPic_4" class="galleryPics">
								<img src="pics/gallery/04.jpg" class="galleryPngs" >
							</div>
							<div id="galleryPic_5" class="galleryPics">
								<img src="pics/gallery/05.jpg" class="galleryPngs" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>