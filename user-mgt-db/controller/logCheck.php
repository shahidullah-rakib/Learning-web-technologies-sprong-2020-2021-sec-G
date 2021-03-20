<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			//$user = $_SESSION['current_user'];
			
			require('../model/db_connect.php');

			$sql="select password from 'sign up' where name='$username'";
			$result1=mysqli_query($conn, $sql);

			$row=mysqli_fetch_assoc($result1);

			//print_r($row);

			if($password == $row['password']){
				$_SESSION['flag'] = true;
				$_SESSION['username']=$username;
				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>