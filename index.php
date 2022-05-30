<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Strona');
$smarty->assign('content','

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="img/budynek.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="OutlineText">Nasza klinika</h1>
            <p class="OutlineText">Bardzo dobra lokalizacja.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="img/s1.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

        <div class="container">
          <div class="carousel-caption">
            <h1 class="OutlineText">Bogate wnętrze</h1>
            <p class="OutlineText">Posiadamy najnowszy sprzęt medyczny.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="img/poczekalnia.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="OutlineText">Poczekalnia</h1>
            <p class="OutlineText">Przystosowana aby umilić czas oczekiwania pacjenta.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <h1 align="center"> Nasz kadra </h1>
  <br>
  <div class="row">
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="img/Ben.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

      <h2>dr. Ben Woodhopper</h2>
      <p>Najbardziej wykształcony lekarz z całej kadry. Można o nim powiedzieć, że jest "od wszystkiego i do niczego". Kieruje się sercem, a nie rozumem.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="img/lysy.jpg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

      <h2>dr. John Son</h2>
      <p>Swoją karierę zaczynał jak aktor. Ukończył studia medyczne z wyróżnieniem. Całe swoje życie poświęcił, aby zostać sławnym ginekologiem.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="img/dziad.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

      <h2>dr. Benny Heal</h2>
      <p>Lekarz z wieloletnim doświadczeniem. Posiada kompetencje pozwalające mu na zajmowanie się pacjentami w ciężkim stanie – kiedy pojawia się zagrożenie życia lub wielonarządowa niewydolność. </p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" align="left">Zdrowie pacjenta jest dla nas najważniejsze.</h2>
		  <p class="lead" align="left">Dbamy, aby nasi pacjenci mieli dostęp do najnowszego sprzętu medycznego, który skutecznie leczy ich schorzenia.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/z1.jpeg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading" align="right">Tysiące osób zaufało naszej klinice.</h2>
		  <br>
		  <p class="lead" align="right">Skuteczność naszych zabiegów jest jednym z najwyższych poziomów w Polsce. Ilość przeprowadzonych zabiegów jest porównywalna do najlepszych klinik w całej Europie.</p>
        </div>
        <div class="col-md-5 order-md-1">
<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/z2.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Kadra z wieloletnim doświadczeniem.</h2>
          <p class="lead">Od zarania dziejów staramy się pomagać naszym pacjentom i zwalczać wszelakie dolegliwości. Dokładamy wszelkich starań aby utrzymać dobrą renomę naszej kliniki.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/z3.png" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/>

        </div>
      </div>

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
');
$smarty->display('homepage.tpl');
?>
