<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Zarejestruj pacjenta');
$smarty->assign('content','


<form class="mx-1 mx-md-4" action="modules/register.php" method="post">
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="imie" name="imie" class="form-control" placeholder="Imie" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Imie</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nazwisko" name="nazwisko" class="form-control" placeholder="Nazwisko" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nazwisko</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="pesel" name="pesel" class="form-control" placeholder="Pesel" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Pesel</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="miejscowosc" name="miejscowosc" class="form-control" placeholder="Miejscowość" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Miejscowość</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="kod_pocztowy" name="kod_pocztowy" class="form-control" placeholder="Kod pocztowy" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Kod Pocztowy</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="ulica" name="ulica" class="form-control" placeholder="Ulica" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Ulica</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nr_domu" name="nr_domu" class="form-control" placeholder="Nr. domu" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nr. domu</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nr_telefonu" name="nr_telefonu" class="form-control" placeholder="Nr. telefonu" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nr. telefonu</label>
</div>
</div>
<div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Zarejestruj</button>
  <button type="reset" class="btn btn-danger btn-lg" >Wyczyść</button>
</div>
</form>

');

if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
?>
