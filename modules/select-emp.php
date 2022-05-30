<?php
echo "<br><br><br><br>
<form class='mx-1 mx-md-4' action='#' method='post'>
  <div class='row'>
    <center>
  <h1>Usuwanie pracownika</h1>
  </center>
  </div>
  <br>
  <select class='form-select' size='5' id='select' name='select' aria-label='size 3 select example'>";
require "modules/db.php";
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
echo '</select>
<BR>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
  <label class="form-check-label" for="defaultCheck1">
    Potwierdzam wykonanie operacji usunięcia.
    Operacji nie można cofnąć.
  </label>
</div>
<br>
<center><button type="submit" class="btn btn-primary btn-lg" >Zatwierdź</button></center>
</form>';
mysqli_close($conn);
?>

<?php
@$i=$_POST['select'];
require_once "modules/db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$r="DELETE pracownicy FROM pracownicy INNER JOIN users ON pracownicy.login = users.login Where users.id='$i'";
$r="DELETE FROM users WHERE id='$i'";

$result=mysqli_query($conn,$r);
if(isset($i))
{
if($result)
{
  echo "Usunięto pracownika.";
}
else {echo "Operacja zakończona niepowodzeniem.";}
}
?>
