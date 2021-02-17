<?php

	if(isset($_POST['submit'])){

		$gender 		=  $_POST['gender'];

		if($gender == ""){
			echo "Null submission...";
		}else{
			echo $gender;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>GENDER</legend>
			<input type="radio" name="gender"> Male
			<input type="radio" name="gender"> Female
			<input type="radio" name="gender"> Other <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>