<?php
//config
$dbhost = 'localhost';
$dbuser = 'midawner';
$dbpw = 'midawner';
$dbname = 'midawn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//set this page name
$thisPage = "news/testFilter.php";
//check GET
$getMode = 0;
if(isset($_GET['mode'])) {
	$getMode = $_GET['mode'];
	if(isset($_GET['year'])) $getYear = $_GET['year'];
	if(isset($_GET['month'])) $getMonth = $_GET['month'];
	if(isset($_GET['category'])) $getCategory = $_GET['category'];
	if(isset($_GET['newsID'])) $getId = $_GET['newsID'];
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
		<link rel="stylesheet" type="text/css" href="css/news.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<img src="pics/midawnLogo.png" height="30" width="172">
			</div>
			<div id="navigationBar">
				<img id="naviArrow" src="pics/yarrow.png" height="15" width="15">
				<span class="naviBar" style="margin-left:380px;">	
					<a href="index.html">Home</a>
				</span>
				<span class="naviBar">
					<a href="news/news.html">News</a>
				</span>
				<span class="naviBar">
					<a href="products/products.html">Products</a>
				</span>
				<span class="naviBar">
					<a href="aboutus/aboutus.html">About Us</a>
				</span>
				<span class="naviBar">
					<a href="gallery/gallery.html">Gallery</a>
				</span>
			</div>
			<div id="main">
				<div id="sidebar">
					<div id="filterDate" class="filter">
						DATE<br>
						<?php
							$months=array(" ","January","February","March","April","May","June","July","August","September","October","November","December");
							$previousYear = 5000;
							$sql = "SELECT DISTINCT year(updateTime),month(updateTime) FROM md_news  ORDER BY updateTime DESC";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result)) {
								$year=$row[0];
								$monthNum=$row[1];
								if($year < $previousYear){
									$previousYear = $year;
									echo str_repeat('&nbsp;', 8).'<a href="'.$thisPage.'?mode=1&year='.$year.'">';
									echo $previousYear.'</a><br>';
								}
								echo str_repeat('&nbsp;', 16).'<a href="'.$thisPage.'?mode=2&year='.$year.'&month='.$monthNum.'">';
								echo $months[$monthNum].'</a><br>';
							}
						?>
					</div>
					<div id="filterCategory" class="filter">
						CATEGORY<br>
						<?php
							$sql = "SELECT DISTINCT category FROM md_news";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result)) {
								echo str_repeat('&nbsp;', 8).'<a href="'.$thisPage.'?mode=3&category='.$row['category'].'">';
								echo $row['category'].'</a><br>';
							}
						?>
					</div>
				</div>
				<div id="content">
				<?php
				switch($getMode) {
				case 1: //filter by year
					$contentSql = "SELECT * FROM md_news WHERE year(updateTime)=".$getYear." ORDER BY updateTime DESC";
					break;
				case 2: //filter by month
					$contentSql = "SELECT * FROM md_news WHERE year(updateTime)=".$getYear." AND month(updateTime)=".$getMonth;
					$contentSql = $contentSql." ORDER BY updateTime DESC";
					break;
				case 3: //filter by category
					$contentSql =  "SELECT * FROM md_news WHERE category='".$getCategory."' ORDER BY updateTime DESC";
					break;
				case 4: //single post filter by newsID
					$contentSql =  "SELECT * FROM md_news WHERE newsID=".$getId;
					break;
				default:	//show summary of all news
					$contentSql = "SELECT * FROM md_news ORDER BY updateTime DESC";
				}
				$result = mysqli_query($conn, $contentSql);
				//show summary part
				if($getMode!=4){
					while($row = mysqli_fetch_array($result)){
						echo '<div class="newsSummary">';
						echo '<a href="'.$thisPage.'?mode=4&newsID='.$row['newsID'].'">'.$row['title'].'</a>';
						echo "<br>".$row['author'].str_repeat('&nbsp;', 5);
						echo date('M j, Y',strtotime($row['updateTime']));
						echo "<br>".$row['category']."<br>";
						//trim whole content to summary(preview)
						$summary = $row['content'];
						$summaryLen = 400;
						if(strlen($summary) > $summaryLen){
							$summary = substr($summary, 0, $summaryLen);
							$summary = substr($summary,0, strrpos($summary," "));
						}
						echo $summary.'... (<a href="'.$thisPage.'?mode=4&newsID='.$row['newsID'].'">read more</a>)<br><br>';
						echo "</div>";
					}
				} 
				// show single whole article part
				else {
					if($row = mysqli_fetch_array($result)) {
						echo "<div>";
						echo $row['title']."<br>".$row['author'].str_repeat('&nbsp;', 5);
						echo date('M j, Y',strtotime($row['updateTime']));
						echo "<br>".$row['category']."<br>";
						echo $row['content'];
						echo "</div>";
					}
				}
				mysqli_close($conn);
				?>
				</div>
			</div>
		</div>
	</body>
</html>