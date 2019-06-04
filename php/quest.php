<?php
//kazde zadanie zabiera 5 energii
//3 zadania sie losuja
$laczenie=mysqli_connect('localhost', 'root', '', 'soccerdream');

$sql=mysqli_query($laczenie, "SELECT * FROM quest");
echo "<div class='giereczka'>";

while ($r = mysqli_fetch_assoc($sql)) {
    echo "
    <div class='quest'>
    <div class='quest_nazwa'>Tytuł: ".$r['nazwa']."</div>
    <div class='quest_opis'>Opis: ".$r['opis']."</div>
    <div class='quest_atrybut'>Atrubut: ".$r['atrybut']."</div>
    </div>";
    
  

}
echo   "</div>";