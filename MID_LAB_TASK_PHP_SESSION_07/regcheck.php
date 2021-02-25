<?php
    session_start(); 

    if(isset($_POST['signup']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $email = $_POST['email'];

        if($name == "" ||$email == "" || $username =="" || $confirmPass == "" ||  $dob == "")
        {
            echo "null value found......";
        }
        else
        {
            if($password == $confirmPass)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                //echo "Success...";
                header('location: home.html');
            }
            else
            {
                echo "Password and Comfirm Password is not same...";
            }
        }
    }
    

?>
