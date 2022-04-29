<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->assign('title','Usuwanie Pracownika');
$smarty->assign('content','
<br><br><br><br>
<form class="mx-1 mx-md-4" action="usuwanie_pracownika.php" method="post">
  <div class="row">
    <center>
  <h1>Usuwanie pracownika</h1>
  </center>
  </div>
  <br>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>
</form>
');
require_once "modules/db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q1 = $mysqli->query("SELECT * FROM pracownicy");
while ($r = $q1->fetch_assoc()) {
    echo "<p>Imię: ".$r["imie"].", nazwisko: ".$r["nazwisko"]."</p>";
}
$q1->free();


$smarty->display('panel_administrator.tpl');
?>
