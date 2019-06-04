<?php
    session_start();
    $login=$_GET['login'];
    $laczenie=mysqli_connect('localhost', 'root', '', 'soccerdream');

    $sql=mysqli_query($laczenie, "SELECT * FROM users WHERE email='$login'");

    while ($r = mysqli_fetch_assoc($sql)) {
        echo "
            <div class='giereczka'><div class='avatar' style='background: ".$r['avatar']."'></div>
            Drybling: <progress max='100' value='50'></progress><br>
            Przechwycone podania: <progress max='100' value='70'></progress><br>
            Podania: <progress max='100' value='90'></progress><br>
            Strzały na bramke: <progress max='100' value='50'></progress><br>
            Kondycja: <progress max='100' value='50'></progress><br>
            <div class='skill'>Koszulka</div>
            <div class='skill'>Spodnie</div>
            <div class='skill'>Skarpetki</div>
            <div class='skill'>Buty</div>
            <div class='skill'>Amulet</div>
            <div class='progressbar'><progress max='100' value='0'></progress><br><span>Poziom popularnosci 1</span></div>
            Nick: ".$r['nick']."<br>
            Imie: ".$r['name']."<br>
            Data urodzenia: ".$r['birth_date']."<br>
            Pochodzenie: ".$r['nationality']."<br>
            Opis: ".$r['description']."<br>
            
            </div>
        ";
    }
?>