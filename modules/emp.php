<?php
echo "<br><br><br><br>
<center><h1>Pracownicy</h1></center>
<table id='prac' name='prac' class='table table-striped table-bordered' style='width:110%'>
<thead>
<th>Id</th>
<th>Imie</th>
<th>Nazwisko</th>
<th>Profesja</th>
<th>Miejscowość</th>
<th>Kod pocztowy</th>
<th>Ulica</th>
<th>Nr. domu</th>
<th>Nr. telefonu</th>
<th>Akcja</th>
</thead>
<tbody>
";
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q="Select * from pracownicy";
$result=mysqli_query($conn,$q);
$ile = mysqli_num_rows($result);
if($ile==0)
{echo "<td colspan=10><center>Brak danych do wyświetlenia.</center></td>";}
else{
while($obj=mysqli_fetch_array($result))
{
echo "<tr>
<td>".$obj['id']."</td>
<td>".$obj['imie']."</td>
<td>".$obj['nazwisko']."</td>
<td>".$obj['profesja']."</td>
<td>".$obj['miejscowosc']."</td>
<td>".$obj['kod_pocztowy']."</td>
<td>".$obj['ulica']."</td>
<td>".$obj['nr_domu']."</td>
<td>".$obj['nr_telefonu']."</td>
<td><a href=edit.php?login=".$obj['login'].">Edytuj</a></td>
</tr>";
}
echo "</tbody></table>";
echo "<script>
$(document).ready(function() {
    $('#prac').DataTable( {
        language: {
            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Polish.json'
        }
    } );
} );
</script>";
}
?>
