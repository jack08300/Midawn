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

$picFolder="pics/crews/";

$name=addslashes($_POST['name']);
$codename=addslashes($_POST['codename']);
$position=addslashes($_POST['position']);
$detail=nl2br(addslashes($_POST['detail']));
$category=addslashes($_POST['category']);
$icon=$picFolder.addslashes($_POST['icon']);
$picture=$picFolder.addslashes($_POST['picture']);
$joinDate=$_POST['joinDate'];


$sql="INSERT INTO md_about (name, codename, position, detail, category, icon, picture, joinDate) VALUES
('$name','$codename','$position','$detail','$category','$icon','$picture','$joinDate')";

if(!mysqli_query($conn, $sql)){
	die('Error: ' . mysqli_error($conn));
}
echo "<br>1 record added<br>";

echo "name: ".$name."<br>";
echo "codename: ".$codename."<br>";
echo "position: ".$position."<br>";
echo "category: ".$category."<br>";
echo "icon: ".$icon."<br>";
echo "picture: ".$picture."<br>";
echo "joinDate: ".$joinDate."<br>";

mysqli_close($conn);

?>