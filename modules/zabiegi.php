<?php
echo "<br><br>
<center><h1>Zabiegi</h1></center>
<table id='prac' name='prac' class='table table-striped table-bordered' style='width:110%'>
<thead>
<th>L.p</th>
<th>Imię Pacjenta</th>
<th>Nazwisko Pacjenta</th>
<th>Zabieg</th>
<th>Termin</th>
</thead>
<tbody>
";
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q="Select * from zabiegi";
$result=mysqli_query($conn,$q);
$ile = mysqli_num_rows($result);
$x=1;
if($ile==0)
{echo "<td colspan=5><center>Brak danych do wyświetlenia.</center></td>";}
else{
while($obj=mysqli_fetch_array($result))
{
echo "<tr>
<td>".$x."</td>
<td>".$obj['imie']."</td>
<td>".$obj['nazwisko']."</td>
<td>".$obj['zabieg']."</td>
<td>".$obj['data']."</td>
</tr>";
$x++;
}
echo "</tbody></table>";
echo "<script>
$(document).ready(function() {
    $('#prac').DataTable( {
        language: {
            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Polish.json'
        },
        pageLength: 3,
        lengthChange: false
    } );
} );
</script>";
}
?>
