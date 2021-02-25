<?php

	session_start();

	if(isset($_POST['submit']))
    {

		$user = $_SESSION['current_user'];
		$email2 = $_POST['email2'];
		
		$newpass = $_POST['newpassword'];

		if($user['email']==$email2)
		{

			if ($newpassword ="" ) 
			{
				echo "Enter a new Password";
			}

				else if ($password1=="@" ||$password1=="#" || $password1=="$" ||$password1=="%" and strlen($password1)<8) 
				{
					$user['password']=$newpassword;
					echo "Password changed";
				}
				else
				{
					echo "Enter a Valid password ";
 				}
		
		}else{
				echo "Invalid Input";
			}
	}
?>