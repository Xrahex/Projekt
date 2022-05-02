<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Cennik');
$smarty->assign('content','
<main>

<div class="container marketing">

 
  <div class="row">
    <div class="col-lg-4">
      
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <hr class="featurette-divider">
     <h1 class="text-center display-3">Cennik</h1>
          <p></p>
		  <table class="table align-middle table table-hover table-bordered">
  <thead>
    <tr class="table-dark">
      
      <th scope="col">Rodzaj zabiegu</th>
      <th scope="col">Pierwszy Zabieg</th>
      <th scope="col">Pakiet 4 zabiegi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Blizna do 10 cm</td>
      <td>760 zł</td>
      <td>2 280 zł</td>
    </tr>
    <tr class="align-bottom">
      
      <td>Melasma mała</td>
      <td>1 000 zł</td>
      <td>2 400 zł</td>
    </tr>
    <tr>
      
      <td>Blizny potrądzikowe – twarz</td>
      <td>2 000 zł</td>
	  <td>4 000 zł</td>
    </tr>
	
	<tr>
      
      <td>Rozstępy – obszar 10 cm x 10 cm</td>
      <td>880 zł</td>
	  <td>2 640 zł</td>
    </tr>
	
	
	<tr>
      
      <td>Twarz przebarwienia</td>
      <td>2 500 zł</td>
	  <td>6 000 zł</td>
    </tr>
	
	
	<tr>
      
      <td>Tatuaż bardzo mały do 4 cm</td>
      <td>600 zł</td>
	  <td>1 680 zł</td>
    </tr>
	
	
	<tr>
      
      <td>Odmładzanie okolic oczu</td>
      <td>1 100 zł</td>
	  <td>2 640 zł</td>
    </tr>
	
	
	<tr>
      
      <td>Naczyniak bardzo mały do 4 cm</td>
      <td>350 zł</td>
	  <td>1 200 zł</td>
    </tr>
	
	
	
	<tr>
      
      <td>Blizna oparzeniowa 10 cm x 10 cm</td>
      <td>880 zł</td>
	  <td>2 640 zł</td>
    </tr>
  </tbody>
</table>
          
        

    </div><!-- /.container -->




');
$smarty->display('homepage.tpl');

?>
