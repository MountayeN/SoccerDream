<?php
session_start();

$name=$_POST['name'];
$date=$_POST['date'];
$nation=$_POST['nation'];
$desc=$_POST['description'];
$avatar=$_POST['avatar'];
$id = $_SESSION['id'];

$laczenie=mysqli_connect('localhost', 'root', '', 'soccerdream');
mysqli_query($laczenie, "SET NAMES utf8");
$update=mysqli_query($laczenie, "UPDATE users SET `avatar`='$avatar', `name`='$name', `birth_date`='$date', `nationality`='$nation', `description`='$desc' WHERE `id`='$id' ");
$_SESSION['zalogowany']=1;
header("Location:../");
