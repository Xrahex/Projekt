<?php

$id=$_SESSION['id'];

echo "<br><br><br><br>
<center><h1>Zgłoszenia</h1></center>
<table id='prac' name='prac' class='table table-striped table-bordered' style='width:110%'>
<thead>
<th>L.p</th>
<th>Numer Zgłoszenia</th>
<th>Data Zgłoszenia</th>
<th>Akcja</th>
</thead>
<tbody>
";
require "db.php";
$conn1=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn1,"utf8");
$q="Select * from zgloszenia group by nr_zgloszenia";
$result=mysqli_query($conn1,$q);
$ile = mysqli_num_rows($result);
if($ile==0)
{echo "<td colspan=4><center>Brak danych do wyświetlenia.</center></td>";}
else{
$x=1;
while($obj=mysqli_fetch_array($result))
{
echo "<tr>
<td>".$x."</td>
<td>".$obj['nr_zgloszenia']."</td>
<td>".$obj['data']."</td>
<td><a href=wyswietl.php?nr=".$obj['nr_zgloszenia'].">Wybierz</a></td>
</tr>";
$x++;
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
mysqli_close($conn1);




?>
