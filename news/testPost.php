<?php
/*
if(count($_POST)>0){ foreach($_POST as $k=>$v){ 
	echo $k."=".$v."<br>"; }}
*/
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

$title=addslashes($_POST['title']);
$author=addslashes($_POST['author']);
$content=nl2br(addslashes($_POST['content']));
$category=addslashes($_POST['category']);


$sql="INSERT INTO md_news (title, author, Content, createTime, updateTime, category) VALUES
('$title','$author','$content',NOW(),NOW(),'$category')";

if(!mysqli_query($conn, $sql)){
	die('Error: ' . mysqli_error($conn));
}
echo "<br>1 record added";

mysqli_close($conn);

?>