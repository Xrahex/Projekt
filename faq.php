<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','FAQ');
$smarty->assign('content','



<main>

<div class="container marketing">

 
  <div class="row">
    <div class="col-lg-4">
      
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <hr class="featurette-divider">

     
          
		  <!--Section: FAQ-->
<section>
  <h1 class="text-center mb-4 pb-2 fw-bold display-3">FAQ</h1>
  <p class="text-center mb-5">
    Pytania najczęsciej zadawane przez pacjentów
  </p>

  <div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> Jak przechowywane są dane?</h6>
      <p>
        <strong><u>Nie martw się!</u></strong> Wszystkie dane są przechowywane bezpiecznie w serwerze na terytorium 
		Rzeczpospolitej Polskiej. Dane konsultacji/ wywiadów medycznych są przechowywane w sposób niejawny i 
		uniemożliwiający bezpośrednią identyfikację. Krytyczne dane użytkownika są przechowywane w postaci zaszyfrowanej.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> Czy serwis jest bezpieczny? 
	  Jak przekazywane są dane?</h6>
      <p>
        Wszystkie dane są przesyłane szyfrowanym połączeniem SSL.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> Czy serwis jest monitorowany od strony 
	  technicznej?
      </h6>
      <p>
        Oczywiście, bardzo starannie. Audyty bezpieczeństwa są w Klinika-pixel.pl regułą.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> Bardzo dbam o poufność. Kto ma dostęp do 
	  informacji których udzielam?
      </h6>
      <p>
        Do danych z wywiadu medycznego tylko lekarz. Asystenci uzyskują dostęp do e-maila i numeru telefonu gdy tego wymaga 
		wyjaśnienie rzeczy nie związanych z medyczną stroną konsultacji. Osoby dbające o techniczną stronę serwisu Klinika-Pixel.pl mają wtórny dostęp do
		danych i wyłącznie z zakresie wynikającym z przeprowadzenia 
		działań administracyjnych i utrzymania serwisu (kopie zapasowe, update).
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> Kiedy następuje płatność?
      </h6>
      Po konsultacji, przed wystawieniem recepty. Jeśli nie chcesz recepty, nie musisz płacić za konsultację.
       </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Nie ma tu odpowiedzi na moje pytanie, do kogo mam napisać?</h6>
      <p>
        Wszystkie dane kontaktowe są w zakładce "O nas", jeżeli nie znalazłeś/aś odpowiedzi na swoje pytanie, prosimy o kontakt.
      </p>
    </div>
  </div>
</section>
<!--Section: FAQ-->
          
        

    </div><!-- /.container -->


');
$smarty->display('homepage.tpl');

?>
