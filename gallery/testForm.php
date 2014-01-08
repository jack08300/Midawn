<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>test form</title>
</head>
<body>
	<form action="testPost.php" method="post">
		Description: <input type="text" name="description"><br>
		Category:
		<select type="text" name="category">
			<option value="New Orleans Trip">New Orleans</option>
			<option value="Coffee">Coffee</option>
			<option value="Daily">Daily</option>
		</select><br>
		icon location: <input type="text" name="icon"><br>
		picture location: <input type="text" name="picture"><br>
		Taken Date: <input type="date" name="pictureDate"><br>
		<input type="submit" value="SUBMIT">
	</form>
</body>
</html>