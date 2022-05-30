<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();



$smarty->assign('title','Zarządzanie pracownikami');
$smarty->assign('menu','');
$smarty->assign('content','

<br><br><br><br><br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Zarzadzanie Pracownikami</h1></div>
    <div class="card-body">
  <br>

<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-4" role="group" aria-label="Basic example">
  <a href="dodawanie_pracownika.php" class="btn btn-primary btn-success btn-lg" role="button" aria-pressed="true">Zatrudnij</a>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-4" role="group" aria-label="Basic example">
  <a href="usuwanie_pracownika.php" class="btn btn-primary btn-danger btn-lg" role="button" aria-pressed="true">Zwolnij</a>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-4" role="group" aria-label="Basic example">
    <a href="emp-managment.php" class="btn btn-primary btn-primary btn-lg" role="button" aria-pressed="true">Edytuj</a>
  </div>
</div>
</div>
</div>
');
  $smarty->assign('content1','');
$smarty->display('panel_administrator.tpl');

?>
