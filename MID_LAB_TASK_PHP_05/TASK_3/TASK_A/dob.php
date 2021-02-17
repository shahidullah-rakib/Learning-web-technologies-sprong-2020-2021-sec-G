<?php
	if(isset($_POST['submit'])){

		$dob 		=  $_POST['dob'];

		if($dob == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>