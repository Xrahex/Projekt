<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Cennik');
$smarty->assign('content','
<main>

<div class="container marketing">
	<br>
     <h1 class="text-center">Cennik</h1>
          <p></p>
		  <table class="table align-middle table table-hover table-bordered">
  <thead>
    <tr class="table-dark" align="center">
      <th scope="col">Rodzaj zabiegu</th>
      <th scope="col">Cena</th>
	 </center>
    </tr>
  </thead>
  <tbody>
  
     <tr>
      <td>Konsultacja anestezjologiczna</td>
      <td>200 zł</td>
    </tr>
  
    <tr>
      <td>Znieczulenie anestezjologiczne</td>
      <td>350 zł</td>
    </tr>
	
    <tr>
      <td>Badanie USG</td>
      <td>200 zł</td>
    </tr>
	
	<tr>
      <td>KONSULTACJA LEKARSKA + EKG</td>
      <td>250 zł</td>
    </tr>
	
    <tr>
      <td>Blizna do 10 cm</td>
      <td>760 zł</td>
    </tr>
	
    <tr>
      <td>Melasma mała</td>
      <td>1 000 zł</td>
    </tr>
	
    <tr>
      <td>Blizny potrądzikowe – twarz</td>
      <td>2 000 zł</td>
    </tr>

	<tr>
      <td>Rozstępy – obszar 10 cm x 10 cm</td>
      <td>880 zł</td>
    </tr>


	<tr>
      <td>Twarz przebarwienia</td>
      <td>2 500 zł</td>
    </tr>


	<tr>
      <td>Usuwanie tatuażu do 4 cm</td>
      <td>600 zł</td>
    </tr>

	<tr>
      <td>Odmładzanie okolic oczu</td>
      <td>1 100 zł</td>
    </tr>

	<tr>

      <td>Naczyniak bardzo mały do 4 cm</td>
      <td>350 zł</td>
    </tr>

	<tr>
      <td>Blizna oparzeniowa 10 cm x 10 cm</td>
      <td>880 zł</td>
    </tr>
	
	<tr>
      <td>Usunięcie szwów</td>
      <td>100 zł</td>
    </tr>
	
  </tbody>
</table>

    </div>




');
$smarty->display('homepage.tpl');

?>
