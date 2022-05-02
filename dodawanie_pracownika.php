<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();

$smarty->assign('title','Dodawanie Pracownika');
$smarty->assign('menu','');
$smarty->assign('content','

<br><br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Dodawanie Pracownika</h1></div>
    <div class="card-body">
<form class="mx-1 mx-md-4" action="modules/rejestracja_pracownika.php" method="post">
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
<input type="text" id="profesja" name="profesja" class="form-control" placeholder="Profesja" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Profesja</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nr_telefonu" name="nr_telefonu" class="form-control" placeholder="Nr. telefonu" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nr. telefonu</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="miejscowosc" name="miejscowosc" class="form-control" placeholder="Miejscowość" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Miejscowość</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="kod_pocztowy" name="kod_pocztowy" class="form-control" placeholder="Kod pocztowy" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Kod Pocztowy</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="ulica" name="ulica" class="form-control" placeholder="Ulica" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Ulica</label>
</div>

</div>
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nr_domu" name="nr_domu" class="form-control" placeholder="Nr. domu" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nr. domu</label>
</div>
</div>
</div>
<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Zarejestruj</button>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="reset" class="btn btn-danger btn-lg" >Wyczyść</button>
  </div>
</div>
</form>
</div>
</div>
');
$smarty->display('panel_administrator.tpl');
?>
