<?php
echo '<br><br><br><br>
<div class="card mb-4">
    <div class="card-header" align="center"><h1>Wyraź opinie</h1></div>
    <div class="card-body">
<form class="mx-1 mx-md-4" enctype="multipart/form-data" action="zgloszenia.php" method="post">
  <br>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<b>Wybierz osobę do zgłoszenia</b>
<Select class="js-example-basic-single" name="lek" required id="lek" style="width: 100%; height:100%"/>';
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q="Select imie,nazwisko,users.id as id from users, pracownicy where users.login=pracownicy.login";
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
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
<textarea rows="5" cols="50" id=opinia name="opinia" placeholder="Wyraź swoja opinie" required style="resize:none;"></textarea>
</div>
</div>
<input type="file" id="image" name="image[]" class="form-control" placeholder="Załącz plik" multiple autocomplete="off"/>
<label class="form-label" for="form3Example1c"></label>
</div>
</div>
<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Wyślij</button>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="reset" class="btn btn-danger btn-lg" >Wyczyść</button>
  </div>
</div>
</form>
</div>';
echo '<script>$(document).ready(function() {
    $(".js-example-basic-single").select2({language: "pl"});
});
</script>';
if(isset($_POST['opinia'])){
@$na_kogo=$_POST["lek"];
@$opinia=$_POST["opinia"];
@$data=date("Y/m/d");
function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
}
@$h=rand_string(8);
@$countfiles = count($_FILES['image']['name']);
@$uploaddir = './img/upl/'; // katalog gdzie ma zostać zapisany plik
@$zg= "ZG/".date("Y/m/d")."/".$h;
for($i=0;$i<@$countfiles;$i++){
@$image=$_FILES["image"]['name'][$i];
if(move_uploaded_file(@$_FILES['image']['tmp_name'][$i], $uploaddir.@$_FILES['image']['name'][$i])){
require_once "db.php";
$conn1=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn1,"utf8");
$q1="INSERT INTO zgloszenia(nr_zgloszenia,data,na_kogo,opinia,zdjecie,zdj_name,status) VALUES ('$zg','$data','$na_kogo','$opinia','img/upl/$image','$image',1)";
if(isset($image)){
$result1=mysqli_query($conn1,$q1);
if($result1)
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='success'><strong>Dodano nowe zgłoszenie!</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>  </div>";
}}
}
}}

?>
