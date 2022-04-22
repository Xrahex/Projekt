<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Strona');
$smarty->assign('content','
<div align="center"><h1>Profil administratora</h1></div>
');
$smarty->assign('menu','

<br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Twój profil</h1></div>
<div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Imie</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q1
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nazwisko</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q2
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pesel</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q3
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nr. telefonu</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q4
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adres email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q5
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Miejscowość</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q6
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Kod pocztowy</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q7
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ulica</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q8
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nr. domu</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      $q9
                    </div>
                  </div>
</div>
');

if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
if ($_SESSION['typ']==3)
{
$smarty->display('panel_pacjent.tpl');
}
?>
