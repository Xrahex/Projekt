<?php
echo '
<br><br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Wystaw Fakturę</h1></div>
    <div class="card-body">
<form class="mx-1 mx-md-4" method="post" action="#">
  <br>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="nazwa" name="nazwa" class="form-control" placeholder="Nazwa" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nazwa</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<b>Wybierz pacjenta</b>
<Select class="js-example-basic-single" name="pacj" required id="pacj" style="width: 100%; height:100%"/>';
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q="Select imie,nazwisko,users.id as id from users, pacjenci where users.login=pacjenci.login";
$result=$conn->query($q);
$x=1;
while($obj = $result->fetch_object())
{
  echo "<Option value=$obj->id>".$obj->imie." ".$obj->nazwisko."</Option>";
  $x++;
}
echo '</Select>
</div>
</div>
</div>


<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="date" id="data" name="data" class="form-control" placeholder="Data końcowa" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Data końcowa</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="date" id="data_k" name="data_k" class="form-control" placeholder="Data wystawienia" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Data wystawienia</label>
</div>
</div>
</div>

<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<b>Wybierz usługi</b>
<Select class="js-example-basic" multiple="multiple" name="uslugi[]" required id="uslugi[]" style="width: 100%; height:100%"/>';

$conn1=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q1="Select * FROM uslugi order by nazwa";
$result=$conn->query($q1);
$x=1;
while($obj = $result->fetch_object())
{
  echo "<Option value=$obj->id>".$obj->nazwa."</Option>";
  $x++;
}
echo '</Select>
</div>
</div>

<div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Wystaw</button>
  </div>
</form>
</div>
</div>
';
echo '<script>$(document).ready(function() {
    $(".js-example-basic-single").select2({language: "pl"});
});
</script>';
echo '<script>$(document).ready(function() {
    $(".js-example-basic").select2({language: "pl"});
});
</script>';

@$nazwa = $_POST['nazwa'];
@$data = $_POST['data'];
@$data_k = $_POST['data_k'];
@$pacjent = $_POST['pacj'];
@$p=$_POST['uslugi'];

if(isset($p)){
$fakt= "FA/".date("Y/m/d")."/".$nazwa;
for($i=0;$i<sizeof($p);$i++)
{
  $qa = "Insert into faktury Values(NULL,'$fakt','$data','$data_k',1,'$pacjent','$p[$i]')";
  mysqli_query($conn1,$qa);
}
if($i==sizeof($p))
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='success'><strong>Dodano nową fakturę!</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>  </div>";
}



}

?>
