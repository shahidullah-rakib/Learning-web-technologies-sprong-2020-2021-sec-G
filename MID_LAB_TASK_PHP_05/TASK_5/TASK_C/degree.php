<!DOCTYPE html>
<html>
<head>
	<title>Degree Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			<input type="checkbox" name="degree"> SSC
			<input type="checkbox" name="degree"> HSC
			<input type="checkbox" name="degree"> BSc 
            <input type="checkbox" name="degree"> Msc <br> value="<?php if(isset($_POST['degree'])){ echo $_POST['degree']; }?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>