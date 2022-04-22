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
$smarty->assign('menu','');
$smarty->assign('content','
<br><br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Dodawanie wizyty</h1></div>
    <div class="card-body">
<form class="mx-1 mx-md-4" action="modules/dodanie_wizytyphp.php" method="post">
  <div class="row">
    <center>
  <br>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="title" name="title" class="form-control" placeholder="Nazwa" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nazwa</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="user_id" name="user_id" class="form-control" placeholder="user_id" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">User_id</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="datetime-local" id="start_event" name="start_event" class="form-control" placeholder="Data rozpoczecia" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Data rozpoczecia</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="datetime-local" id="end_event" name="end_event" class="form-control" placeholder="Data zakonczenia" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Data zakonczenia</label>
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

if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
