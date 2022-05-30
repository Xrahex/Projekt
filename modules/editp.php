<?php
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$log=$_GET['login'];
$q="Select * from pracownicy Where login='$log'";
$result=mysqli_query($conn,$q);
while($obj=mysqli_fetch_array($result))
{
  $i=$obj['imie'];
  $n=$obj['nazwisko'];
  $p=$obj['profesja'];
  $t=$obj['nr_telefonu'];
  $m=$obj['miejscowosc'];
  $k=$obj['kod_pocztowy'];
  $u=$obj['ulica'];
  $d=$obj['nr_domu'];
}
echo '<br><br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Edycja Pracownika</h1></div>
    <div class="card-body">
<form class="mx-1 mx-md-4" action="#" method="post">
  <br>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="imie" name="imie" class="form-control" value="'.$i.'" placeholder="Imie" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Imie</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nazwisko" name="nazwisko" class="form-control" value="'.$n.'" placeholder="Nazwisko" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nazwisko</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="profesja" name="profesja" class="form-control" value="'.$p.'" placeholder="Profesja" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Profesja</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nr_telefonu" name="nr_telefonu" class="form-control" value="'.$t.'" placeholder="Nr. telefonu" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nr. telefonu</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="miejscowosc" name="miejscowosc" class="form-control" value="'.$m.'" placeholder="Miejscowość" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Miejscowość</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="kod_pocztowy" name="kod_pocztowy" class="form-control" value="'.$k.'" placeholder="Kod pocztowy" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Kod Pocztowy</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="ulica" name="ulica" class="form-control" value="'.$u.'" placeholder="Ulica" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Ulica</label>
</div>

</div>
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nr_domu" name="nr_domu" class="form-control" value="'.$d.'" placeholder="Nr. domu" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nr. domu</label>
</div>
</div>
</div>
<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-12" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Aktualizuj</button>
  </div>
  </div>
</div>
</form>
</div>
</div>
';

@$imie=$_POST["imie"];
@$nazwisko=$_POST["nazwisko"];
@$profesja=$_POST["profesja"];
@$miejscowosc=$_POST["miejscowosc"];
@$kod_pocztowy=$_POST["kod_pocztowy"];
@$ulica=$_POST["ulica"];
@$nr_domu=$_POST["nr_domu"];
@$nr_telefonu=$_POST["nr_telefonu"];


$q1="Update pracownicy SET imie='$imie',nazwisko='$nazwisko',profesja='$profesja',miejscowosc='$miejscowosc',kod_pocztowy='$kod_pocztowy',ulica='$ulica',nr_domu='$nr_domu',nr_telefonu='$nr_telefonu' Where login='$log'";
if(isset($nazwisko)){
$result1=mysqli_query($conn,$q1);
if($result1)
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='success'><strong>Zmiany zostały zapisane.</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>  </div>";
}
}

?>
