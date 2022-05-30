<?php

echo '<br><br><br><br>
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-10">
            <div class="card mb-4">
                <div class="card-header" align="center"><h1>E-Recepty<h1></div>
                <div class="card-body">
                <table id="prac" name="prac" class="table table-striped table-bordered" style="width:100%"">
                <thead>
                <th>L.p</th>
                <th>Nazwa</th>
                <th>Data wystawienia</th>
                <th>Kod odbioru</th>
                <th>Akcja</th>
                </thead>
                <tbody>
                ';
                require "db.php";
                $conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
                mysqli_set_charset($conn,"utf8");
                $x=1;
                $i=$_SESSION['id'];
                $q2="Select nazwa,data,kod_odbioru from recepty Where pacjent_id='$i'  group by nazwa";
                $result2=mysqli_query($conn,$q2);
                $ile = mysqli_num_rows($result2);
                if($ile==0)
                {echo "<td colspan=5><center>Brak danych do wyświetlenia.</center></td>";}
                else{
                while($obj=mysqli_fetch_array($result2))
                {
                  echo "<tr>
                  <td>".$x."</td>
                  <td>".$obj['nazwa']."</td>
                  <td>".$obj['data']."</td>
                  <td>".$obj['kod_odbioru']."</td>
                  <td><a href=recepta/index.php?nr=".$obj['nazwa']."&i=".$i.">Wybierz</a></td>
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
