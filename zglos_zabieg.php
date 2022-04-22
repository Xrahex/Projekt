<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Zgłoś zabieg');
$smarty->assign('menu','');
$smarty->assign('content','

<br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Zgłoś zabieg</h1></div>
    <div class="card-body">
<form class="mx-1 mx-md-4" action="modules/dodanie_zabiegu.php" method="post">
  <div class="row">
  </div>
  <br>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="imie" name="imie" class="form-control" placeholder="Imie" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Imie</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nazwisko" name="nazwisko" class="form-control" placeholder="Nazwisko" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nazwisko</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="zabieg" name="zabieg" class="form-control" placeholder="Zabieg" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Zabieg</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="datetime-local" id="data" name="data" class="form-control" placeholder="Data" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Data wykonania</label>
</div>
</div>
</div>
<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Zapisz</button>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="reset" class="btn btn-danger btn-lg" >Wyczyść</button>
  </div>
</div>
</form>
</div>
</div>
');
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
?>
