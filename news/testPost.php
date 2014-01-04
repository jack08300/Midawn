<?php
if(count($_POST)>0){ foreach($_POST as $k=>$v){ 
	echo $k."=".$v."<br>"; }}

	
?>

<?php
$dbhost = 'localhost';
$dbuser = 'midawner';
$dbpw = 'midawner';
$dbname = 'midawn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*
$result = mysqli_query($conn, "SELECT * FROM md_news");

while($row = mysqli_fetch_array($result)){
	echo $row['title']."<br>".$row['author'].str_repeat('&nbsp;', 5).date('M j, Y',strtotime($row['updateTime']));
	echo "<br>".$row['content']."<br><br>";
}
*/
	
mysqli_close($conn);
?>