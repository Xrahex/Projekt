<?php
require_once "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q1 = $mysqli->query("SELECT * FROM pracownicy");
while ($r = $q1->fetch_assoc()) {
    echo "<p>Imię: ".$r["imie"].", nazwisko: ".$r["nazwisko"]."</p>";
}
$q1->free();
?>
