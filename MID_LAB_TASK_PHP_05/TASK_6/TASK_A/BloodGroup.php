<?php
	if(isset($_POST['submit'])){

		$BloodGroup 		=  $_POST['BloodGroup'];

		if($BloodGroup == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>