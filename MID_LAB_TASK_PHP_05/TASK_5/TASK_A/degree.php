<?php
	if(isset($_POST['submit'])){

		$gender 		=  $_POST['item'];

		if($gender == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>