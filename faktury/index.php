<?php
require "../modules/db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$n=$_GET['nr'];
$id=$_GET['i'];
$nr=$n;
$q1="Select * from pacjenci, users where pacjenci.login=users.login and users.id='$id'";
$result1=mysqli_query($conn,$q1);

$qz="Update faktury set stan=0 Where nazwa='$nr'";
mysqli_query($conn,$qz);
while($obj=mysqli_fetch_array($result1))
{
@$rodzaj = 'przelew bankowy';
@$dla_i = $obj['imie'];
@$dla_n = $obj['nazwisko'];
@$dla_m = $obj['miejscowosc'];
@$dla_u = $obj['ulica'];
@$dla_d = $obj['nr_domu'];
@$dla_e = $obj['email'];
}
$q1="Select * from faktury where id_pacjenta='$id' and nazwa='$nr'";
$result1=mysqli_query($conn,$q1);
while($obj=mysqli_fetch_array($result1)){
@$od = $obj['data'];
@$do = $obj['data_k'];
}

echo '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function($)
			{

				$(document).on("click", ".btn_print", function(event)
				{
					event.preventDefault();


					var element = document.getElementById("content");

					//easy
					//html2pdf().from(element).save();

					//custom file name
					//html2pdf().set({filename: "code_with_mark_"+js.AutoCode()+"".pdf"}).from(element).save();


					//more custom settings
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
			</script>
	</head>

	<body>
<BR><BR><BR><BR>


<div id="content">
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="./images/logo1.png" alt="Company logo" style="width: 100%; max-width: 300px;" />
								</td>

								<td>
									Faktura: '.$nr.'<br/>
								  Wystawiona: '.$od.'<br />
									Do: '.$do.'
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="informacje">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Klinika Pixel<br />
									Kanałowa 2<br />
									Obra, 64-211 Wolsztyn
								</td>

								<td>
									'.$dla_i.' '.$dla_n.'<br />
									'.$dla_m.', '.$dla_u.' '.$dla_d.'<br />
									'.$dla_e.'
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Płatność</td>

					<td></td>
				</tr>

				<tr class="details">
					<td>'.$rodzaj.'</td>
				</tr>

				<tr class="heading">
					<td>Usługi</td>

					<td>Koszt</td>
				</tr>';
				$q2="Select uslugi.nazwa,uslugi.cena From uslugi, faktury where faktury.uslugi=uslugi.id and faktury.nazwa='$nr'";
				$q3="Select SUM(uslugi.cena) as cena From uslugi, faktury where faktury.uslugi=uslugi.id and faktury.nazwa='$nr'";
				$result3=mysqli_query($conn,$q3);
				while($obj=mysqli_fetch_array($result3)){
					$suma=$obj['cena'];
				}
				$result2=mysqli_query($conn,$q2);
			while($obj=mysqli_fetch_array($result2)){
				echo '	<tr>	<td>'.$obj['nazwa'].'</td>

									<td>'.$obj['cena'].' PLN</td></tr>';
			}
	echo '
				<tr class="total">
					<td></td>
					<td>Łącznie: '.$suma.' PLN</td>
				</tr>
			</table>
		</div>
		</div>
		<div class="text-center" style="padding:20px;">
			<input type="button" id="rep" value="Pobierz" class="btn btn-info btn_print">
		</div>
	</body>
</html>';
?>
