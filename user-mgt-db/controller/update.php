<?php 
    require('../model/db_connect.php');
    session_start();
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $id=$_SESSION['edit_id'];

        $sql="update 'sign up' set name='$name', password='$pass', email='$email' where ID='$id'";
        mysqli_query($con, $sql);

        //echo $id;
        header('location: ../view/home.php');

    }

?>