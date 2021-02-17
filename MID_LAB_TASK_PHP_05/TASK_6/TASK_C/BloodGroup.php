<!DOCTYPE html>
<html>
<head>
	<title>bloodgroup Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Blood Group</legend>
            <select name="" id="">
                <option value="bloodgroup"></option>
                <option value="bloodgroup">A+</option>
                <option value="bloodgroup">A-</option>
                <option value="bloodgroup">B-</option>
                <option value="bloodgroup">B+</option>
                <option value="bloodgroup">O-</option>
                <option value="bloodgroup">O+</option>
                

            </select> <br> value="<?php if(isset($_POST['bloodgroup'])){ echo $_POST['bloodgroup']; }?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html> 
