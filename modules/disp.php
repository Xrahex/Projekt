<?php
$n=$_SESSION['nr'];

require "db.php";
$conn1=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn1,"utf8");
$q="Select * from zgloszenia group by nr_zgloszenia";
$result=mysqli_query($conn1,$q);

while($obj=mysqli_fetch_array($result))
{
  $kto=$obj['na_kogo'];
  $opinia=$obj['opinia'];

}
$q1="Select * from pracownicy,users where users.login=pracownicy.login and users.id='$kto'";
$result1=mysqli_query($conn1,$q1);
while($obj=mysqli_fetch_array($result1))
{
  $imie=$obj['imie'];
  $nazwisko=$obj['nazwisko'];

}
$dane="$imie $nazwisko";

echo '<br><br><br><br>
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-10">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header" align="center"><h1>Zgłoszenie<h1></div>
                <div class="card-body">
                    <form method="post" action="#">
                        <!-- Form Row -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-2">
                              <label class="fw-bold" style="display:inline-block;">Na kogo</label>
                            </div>
                            <div class="col-md-10">
                                <input style="width:100%;" readonly value="'.$dane.'" type="text">
                            </div>
                            <p></p>
                            <div class="col-md-2">
                              <label class="fw-bold" style="display:inline-block;">Treść</label>
                            </div>
                            <div class="col-md-10">
                                <textarea readonly style="height:300px; width:100%; resize:none;">'.$opinia.'</textarea>
                            </div>
                            <p></p>
                            <div class="col-md-2">
                              <label class="fw-bold" style="display:inline-block;">Załączniki</label>
                            </div>
                            <div class="col-md-10">
                            </div>
                            <table id="prac" name="prac" class="table table-striped table-bordered" style="width:100%"">
                            <thead>
                            <th>L.p</th>
                            <th>Nazwa pliku</th>
                            <th>Akcja</th>
                            </thead>
                            <tbody>
                            ';
                            $x=1;
                            $q2="Select zdjecie,zdj_name from zgloszenia where nr_zgloszenia='$n'";
                            $result2=mysqli_query($conn1,$q2);
                            while($obj=mysqli_fetch_array($result2))
                            {
                              echo "<tr>
                              <td>".$x."</td>
                              <td>".$obj['zdj_name']."</td>
                              <td><a href=".$obj['zdjecie']." download>Pobierz</a></td>
                              </tr>";
                              $x++;
                            }
                            echo '</tbody></table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
';
$qz="Update zgloszenia set status=0 Where nr_zgloszenia='$n'";
mysqli_query($conn1,$qz);

echo "<script>
$(document).ready(function() {
    $('#prac').DataTable( {
        language: {
            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Polish.json'
        }
        'searching': false
    } );
} );
</script>";



?>
