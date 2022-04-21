<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Zarządzanie pracownikami');
$smarty->assign('content','

<br><br><br><br><br><br><br>

  <div class="row">
    <center>
  <h1>Zarzadzanie Pracownikami</h1>
  </center>
  </div>
  <br>

<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-4" role="group" aria-label="Basic example">
  <a href="dodawanie_pracownika.php" class="btn btn-primary btn-success btn-lg" role="button" aria-pressed="true">Zatrudnij</a>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-4" role="group" aria-label="Basic example">
  <a href="index.php" class="btn btn-primary btn-danger btn-lg" role="button" aria-pressed="true">Zwolnij</a>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-4" role="group" aria-label="Basic example">
    <a href="index.php" class="btn btn-primary btn-primary btn-lg" role="button" aria-pressed="true">Edytuj</a>
  </div>
</div>
');

$smarty->display('panel_administrator.tpl');

?>
