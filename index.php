<?php
error_reporting(0);
session_start();
include "elements/header.html";
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
}
    if (!empty($_GET)) {
        $katalog="elements/forms/";
        $plik=$_GET['id']."_inc.html";
        $path=$katalog.$plik;
        if(file_exists($path)){
            include($path);
        }
    }
    else {
        echo $check;
        echo "<div id='xd' style='display: none'>".$_SESSION['login']."</div>";
        if ($_SESSION['zalogowany']==1) {
            include "elements/game.html";
        }
        else if ($_SESSION['zalogowany']==2) {
            include "elements/body.html";
            include "elements/error.html";
            include "elements/forms/login.html";
            $_SESSION['zalogowany']=0;
        } else if($_SESSION['zalogowany']==3){
            include "elements/error_name.html";
            $_SESSION['zalogowany']=0;
        }else if($_SESSION['zalogowany']==4){
            include "elements/error_email.html";
            $_SESSION['zalogowany']=0;
        }else if ($_SESSION['zalogowany']==5) {
            include "elements/avatar.html";
        }else{
            include "elements/body.html";
            include "elements/forms/login.html";
        }
    }


include "elements/footer.html";
?>