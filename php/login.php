<?php
session_start();
$login=$_POST['email'];
$password=$_POST['password'];
$laczenie=mysqli_connect('localhost', 'root', '', 'soccerdream');
mysqli_query($laczenie, "SET NAMES utf8");

$check=mysqli_query($laczenie, "SELECT * FROM users WHERE email='$login' AND password='$password'");
$isset_avatar = mysqli_query($laczenie, "SELECT avatar FROM users WHERE email='$login' AND avatar='0'");
while($row=mysqli_fetch_assoc($check)){
    $_SESSION['id']=$row["id"];
}
if($check->num_rows == 0){
    $_SESSION['zalogowany']=2;
    header('Location: ../index.php');

} else if ($isset_avatar->num_rows == 1) {
    $_SESSION['zalogowany']=5;
    header('Location: ../index.php');
}else if ($isset_avatar->num_rows == 0){
    $_SESSION['zalogowany']=1;
    $_SESSION['login']=$login;
    header('Location: ../index.php');

}