<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>test form</title>
</head>
<body>
	<form action="testPost.php" method="post">
		Title: <input type="text" name="title"><br>
		Author: 
		<select type="text" name="author">
			<option value="inwolf">inwolf</option>
			<option value="Bri'an C">Bri'an C</option>
			<option value="Raisive Crowx">Raisive Crowx</option>
		</select><br>
		Content: <br><textarea style="width:300px;height:500px;" name="content"></textarea><br>
		Category: 
		<select type="text" name="category">
			<option value="Company">Company</option>
			<option value="Other">Other</option>
		</select><br>
		<input type="submit" value="SUBMIT">
	</form>
</body>
</html>