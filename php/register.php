<?php
session_start();
    if ((isset($_POST['nick'])) && (isset($_POST['email'])) && (isset($_POST['password']))) {
        $nick = $_POST['nick'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $laczenie=mysqli_connect('localhost', 'root', '', 'soccerdream');
        mysqli_query($laczenie, "SET NAMES utf8");
        $checkuser=mysqli_query($laczenie,"SELECT * FROM users WHERE nick='$nick'");
        $checkmail=mysqli_query($laczenie,"SELECT * FROM users WHERE email='$email'");
        if($checkuser->num_rows !=0){
            $_SESSION['zalogowany']=3;
            header("Location: ../index.php");
        }else if($checkmail->num_rows !=0){
            $_SESSION['zalogowany']=4;
            header("Location: ../index.php");
        }else{
             mysqli_query($laczenie, "INSERT INTO users (`id`, `nick`, `email`, `password`, `avatar`) VALUES ('', '$nick', '$email', '$password','0');");
                header("Location: ../index.php");
        }

    }
?>