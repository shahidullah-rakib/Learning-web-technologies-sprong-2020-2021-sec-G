<?php

	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$type     = $_POST['type'];
		
		$user = ['id'=> $id, 'password'=> $password, 'type' => $type];
		$formdata = array(
			'id'=> $_POST["id"],
			'password'=> $_POST["password"],
			'type' => $_POST['type']
			
		 );

		$userFile = fopen("../model/data.json", "r");
		$userData = fread($userFile, filesize('../model/data.json'));
		//$data = file_get_contents('../model/data.json');
		$existingdata[]= json_decode($userData, true);
      
		if($id == "" || $password == "" || $type == ""){
			echo "null input...";
		}else{

			foreach ($existingdata as $key => $value) {
				foreach ($value as $k => $v) {	
			 
			if($v['id'] == $_POST['id'] && $v['password'] == $_POST['password'] && $v['type'] == $_POST['type'] ){
				$_SESSION['flag'] = true;
				//print_r($value['id']);
				
				if($type== 'user')
				{				
					$_SESSION['current_user'] =$formdata;
					header('location: ../view/data.php');
				}elseif($type== 'admin'){
					$_SESSION['current_user'] =$formdata;
					header('location: ../view/seller.php');

				}
				
			}else{
				echo "invalid user". "<br>";
				
			}
		  }
		 }	

		}
	}


?>