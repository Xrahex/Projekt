<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','O nas');
$smarty->assign('content','

<main>

<div class="container marketing">

 
  <div class="row">
    <div class="col-lg-4">
      
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <hr class="featurette-divider">
     <h1 class="text-center display-3 ">O nas</h1>
          <p class="lead">

		Każdy jest wyjątkowy i zasługuje na to, co najlepsze. 
		Klinika Pixel od 30 lat buduje swoją reputację w oparciu o indywidualne podejście 
		do potrzeb pacjentów, a także najwyższe standardy w zakresie opieki przed i po zabiegowej. Wyposażeni 
		w najnowocześniejsze urządzenia, każdego dnia dokładamy wszelkich starań aby nasi pacjenci czuli się atrakcyjnie 
		w swoim ciele.

		Wierzymy, że piękno drzemie w każdym z nas, dlatego nie jesteśmy tu po to,
		aby Cię zmieniać. Naszą misją jest wydobycie Twojego naturalnego blasku i podkreślenie Twojego piękna!
		</p>
		
		<hr class="featurette-divider">
		<h1 class="text-center display-3 ">Poznaj nasz zespół</h1>
		<p class="lead">
		
		W kwestii jakości usług jesteśmy bezkompromisowi. W Klinice Pixel łączymy najwyższe kompetencje w zakresie medycyny estetycznej,
		wieloletnie tradycje i doświadczenie. Nasi lekarze to specjaliści dermatolodzy należący do 
		Stowarzyszenia Lekarzy Dermatologów. Regularnie szkolą się w najlepszych ośrodkach. Nowoczesny sprzęt to nie wszystko. 
		W Klinice Pixel jesteśmy ekspertami w jego stosowaniu.
		
		</p>
		<hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">dr. Benny Heal <span class="text-muted">specjalista dermatolog, lekarz medycyny estetycznej</span></h2>
          <p class="lead">Lekarz z 25 letnim doświadczeniem w medycynie estetycznej. Jest również właścicielem Kliniki Pixel.
			dr. Benny Heal zdobywał doświadczenie m.in. w prestiżowych Klinikach w Nowym Jorku, Wiedniu, Heidelbergu i Paryżu. Specjalizuje się w leczeniu trudnych przypadków z zakresu medycyny estetycznej. 
			dr. Benny Heal współpracuje z najlepszymi światowymi markami, trenerami i coachami z Francji, Ameryki, Korei, Austrii i Niemiec. Regularnie rozwija swoje umiejętności z najnowocześniejszych technologii. </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img " src="img/dziad.png" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">dr. John Son, <span class="text-muted"> lekarz.</span></h2>
          <p class="lead">Absolwent Śląskiego Uniwersytetu Medycznego w Katowicach. 
			Już w trakcie studiów pogłębiał swoją wiedzę z zakresu chirurgii uczestnicząc w licznych kołach naukowych 
			oraz pobierając nauki w klinikach na terenie Polski oraz za granicą.
			Obecnie jest w trakcie szkolenia specjalizacyjnego z zakresu chirurgii ogólnej, 
			gdzie rozwija swoje umiejętności zarówno manualne jak i naukowe. W 2021 roku uzyskał tytuł doktora nauk medycznych broniąc pracę pod tytułem „Wybrane parametry zapalne u chorych z rakiem jelita grubego” na Śląskim Uniwersytecie Medycznym.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img " src="img/lysy.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        </div>
      </div>

<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">dr. Ben Woodhopper <span class="text-muted">specjalista dermatolog, lekarz medycyny estetycznej</span></h2>
          <p class="lead">Lekarz i współwłaściciel Kliniki Pixel. Jest absolwentem Śląskiego Uniwersytetu Medycznego w Katowicach. Medycynę studiował również na renomowanym Uniwersytecie im. Georga Augusta w Getyndze (Niemcy).
			Już w czasie pobierania nauki brał udział w warsztatach i kursach z zakresu medycyny estetycznej w Polsce i za granicą. 
			Swoje zamiłowanie do piękna i estetyki pogłębiał studiując na Akademiach i Uniwersytetach w Wiedniu, Krakowie i Katowicach otrzymując tytuł magistra sztuki. </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img " src="img/ben.png" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

        </div>
      </div>


        

    </div><!-- /.container -->




');
$smarty->display('homepage.tpl');

?>
