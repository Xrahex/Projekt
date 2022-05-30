<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();



$smarty->assign('title','Strona');
$smarty->assign('content','
<center><div class="p-3 mb-2 bg-success text-white">Zalogowano na konto administratora</div></center>
<br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Twój profil</h1></div>
<div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Imie</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <p> Admin </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nazwisko</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <p> Admin </p>
                    </div>
                  </div>

                    </div>
                  </div>
</div>

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

                    $test

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
require_once "modules/db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z bazą danych");
mysqli_set_charset($conn,"utf8");
$login=$_SESSION['login'];


if ($_SESSION['typ']==1)
{
  $smarty->assign('content1','');
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)

{
$q="SELECT * From pracownicy, users Where pracownicy.login=users.login and users.login='$login'";
$result=mysqli_query($conn,$q);
while($obj=mysqli_fetch_assoc($result))
{
  @$imie=$obj['imie'];
  @$nazwisko=$obj['nazwisko'];
  @$telefon=$obj['nr_telefonu'];
  @$miejscowosc=$obj['miejscowosc'];
  @$poczta=$obj['kod_pocztowy'];
  @$ulica=$obj['ulica'];
  @$dom=$obj['nr_domu'];
  @$mail=$obj['email'];
}
@$smarty->assign('imie',$imie);
@$smarty->assign('nazwisko',$nazwisko);
@$smarty->assign('telefon',$telefon);
@$smarty->assign('email',$mail);
@$smarty->assign('miejscowosc',$miejscowosc);
@$smarty->assign('poczta',$poczta);
@$smarty->assign('ulica',$ulica);
@$smarty->assign('dom',$dom);
$smarty->display('panell.tpl');
}
if ($_SESSION['typ']==3)
{
  $q="SELECT * From pacjenci, users Where pacjenci.login=users.login and users.login='$login'";
  $result=mysqli_query($conn,$q);
  while($obj=mysqli_fetch_assoc($result))
  {
    @$imie=$obj['imie'];
    @$nazwisko=$obj['nazwisko'];
    @$pesel=$obj['pesel'];
    @$telefon=$obj['nr_telefonu'];
    @$mail=$obj['email'];
    @$miejscowosc=$obj['miejscowosc'];
    @$poczta=$obj['kod_pocztowy'];
    @$ulica=$obj['ulica'];
    @$dom=$obj['nr_domu'];
  }
  @$smarty->assign('imie',$imie);
  @$smarty->assign('nazwisko',$nazwisko);
  @$smarty->assign('pesel',$pesel);
  @$smarty->assign('telefon',$telefon);
  @$smarty->assign('email',$mail);
  @$smarty->assign('miejscowosc',$miejscowosc);
  @$smarty->assign('poczta',$poczta);
  @$smarty->assign('ulica',$ulica);
  @$smarty->assign('dom',$dom);
$smarty->display('panelp.tpl');
}
?>
