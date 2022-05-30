<?php

echo '<br><br><br><br>
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-10">
            <div class="card mb-4">
                <div class="card-header" align="center"><h1>Historia leczenia<h1></div>
                <div class="card-body">
                <table id="prac" name="prac" class="table table-striped table-bordered" style="width:100%"">
                <thead>
                <th>L.p</th>
                <th>Nazwa Zabiegu</th>
                <th>Data</th>
                <th>Wykonawca</th>
                </thead>
                <tbody>
                ';
                require "db.php";
                $conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
                mysqli_set_charset($conn,"utf8");
                $x=1;
                $l=$_GET['lo'];
                $q2="Select  historia_pacjenta.opis, historia_pacjenta.data_wykonania,concat(pracownicy.imie,' ',pracownicy.nazwisko) as wykonawca from historia_pacjenta,pracownicy where  historia_pacjenta.id_doktora=pracownicy.id and  historia_pacjenta.login='$l'";
                $result2=mysqli_query($conn,$q2);
                $ile = mysqli_num_rows($result2);
                if($ile==0)
                {echo "<td colspan=4><center>Brak danych do wyświetlenia.</center></td>";}
                else{
                while($obj=mysqli_fetch_array($result2))
                {
                  echo "<tr>
                  <td>".$x."</td>
                  <td>".$obj['opis']."</td>
                  <td>".$obj['data_wykonania']."</td>
                  <td>".$obj['wykonawca']."</td>
                  </tr>";
                  $x++;
                }

echo '
</tbody></table>
                </div>
            </div>
        </div>
    </div>
</div>';
echo "<script>
$(document).ready(function() {
    $('#prac').DataTable( {
        language: {
            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Polish.json'
        },
        pageLength: 8,
        lengthChange: false
    } );
} );
</script>";
}

?>
