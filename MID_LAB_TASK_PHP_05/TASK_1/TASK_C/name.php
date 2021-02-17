<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?>"> <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html> 
