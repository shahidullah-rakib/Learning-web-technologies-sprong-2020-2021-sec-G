<?php

	if(isset($_POST['submit'])){

		$degree 		=  $_POST['degree'];

		if($degree == ""){
			echo "Null submission...";
		}else{
			echo $degree;
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
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree"> SSC
			<input type="checkbox" name="degree"> HSC
			<input type="checkbox" name="degree"> BSc 
            <input type="checkbox" name="degree"> Msc <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>