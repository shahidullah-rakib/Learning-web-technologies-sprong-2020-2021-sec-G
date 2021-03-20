<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				//$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				//$_SESSION['current_user'] = $user;

				require('../model/db_connect.php');

				$sql="insert into 'sign up' values('','$username', '$password', '', '$email' )";
				$result=mysqli_query($conn, $sql);

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>