<html>
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
<?php
echo "<br>";
$n=$_GET['nr'];
$nr=$n;
echo '<script type="text/javascript">
  $(document).ready(function($)
  {

    $(document).on("click", ".btn_print", function(event)
    {
      event.preventDefault();


      var element = document.getElementById("content");

      var opt =
      {
        margin:       1,
        filename:     "'.$nr.'.pdf",
        image:        { type: "jpeg", quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: "in", format: "letter", orientation: "portrait" }
      };

      // New Promise-based usage:
      html2pdf().set(opt).from(element).save();
    });
  });
  </script>';
?>
  </head>
  <body>
  <div id="content">
  <div id="invoice-POS">

    <center id="top">
      <div class="logo"></div>
      <div class="info">
        <h2>E-Recepta</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    <?php
    require "../modules/db.php";
    $conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
    mysqli_set_charset($conn,"utf8");

    $id=$_GET['i'];

    $q1="Select * from pacjenci, users where pacjenci.login=users.login and users.id='$id'";
    $qz="Update recepty set status=0 Where nazwa='$nr'";
    mysqli_query($conn,$qz);
    $result1=mysqli_query($conn,$q1);
    while($obj=mysqli_fetch_array($result1))
    {
    @$rodzaj = 'przelew bankowy';
    @$dla_i = $obj['imie'];
    @$dla_n = $obj['nazwisko'];
    @$dla_m = $obj['miejscowosc'];
    @$dla_u = $obj['ulica'];
    @$dla_d = $obj['nr_domu'];
    @$dla_k = $obj['kod_pocztowy'];
    @$dla_e = $obj['email'];
    @$dla_t = $obj['nr_telefonu'];
    }


    ?>
    <div id="mid">
      <div class="info">
        <h2>Dane Pacjenta:</h2>
        <p>
          <?php
            echo "$dla_i $dla_n <BR>";
            echo "$dla_u $dla_d $dla_k $dla_m<BR>";
            echo "$dla_e <BR>";
            echo "$dla_t <BR>";
          ?>
        </p>
      </div>
    </div><!--End Invoice Mid-->

    <div id="bot">
  <h2>Leki:</h2>

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Pozycja</h2></td>
							</tr>

<?php
	$q2="Select leki.nazwa From leki, recepty where recepty.lek=leki.id and recepty.nazwa='$nr'";
  $result2=mysqli_query($conn,$q2);
while($obj=mysqli_fetch_array($result2)){
  echo '	<tr class="service"><td class="tableitem"><p class="itemtext">'.$obj['nazwa'].'</p></td></td></tr>';
}
?>
				</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Dziękujemy za skorzystanie z naszych usług!</strong> Na realizację e-recepty masz 12 miesięcy. Po przekroczeniu tego terminu realizacja recepty będzię niemożliwa.
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
</div>
  <div class="text-center" style="padding:20px;">
    <input type="button" id="rep" value="Pobierz" class="btn btn-info btn_print">
  </div>
</body>
</html>
