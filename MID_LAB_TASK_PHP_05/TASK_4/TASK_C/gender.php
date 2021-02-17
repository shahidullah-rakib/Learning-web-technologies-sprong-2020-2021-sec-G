<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>GENDER</legend>
			<input type="radio" name="gender"> Male
			<input type="radio" name="gender"> Female
			<input type="radio" name="gender"> Other <br> value="<?php if(isset($_POST['gender'])){ echo $_POST['gender']; }?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>