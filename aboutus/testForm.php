<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>test form</title>
</head>
<body>
	<form action="testPost.php" method="post">
		Name: <input type="text" name="name"><br>
		Codename: <input type="text" name="codename"><br>
		Position: <input type="text" name="position"><br>
		Detail: <br><textarea style="width:300px;height:500px" name="detail"></textarea><br>
		Category: 
		<select type="text" name="category">
			<option value="company">Company</option>
			<option value="member">Member</option>
		</select><br>
		icon location: <input type="text" name="icon"><br>
		picture location: <input type="text" name="picture"><br>
		Join Date: <input type="date" name="joinDate"><br>
		<input type="submit" value="SUBMIT">
	</form>
</body>
</html>