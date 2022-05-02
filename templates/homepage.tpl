<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title>{$title}</title>
<!--Style-->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/index.css">
<link rel="stylesheet" href="bootstrap/carousel.css">
<link rel="manifest" href="/manifest.json">
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  .OutlineText {
      text-shadow:
      /* Outline */
      -1px -1px 0 #000000,
      1px -1px 0 #000000,
      -1px 1px 0 #000000,
      1px 1px 0 #000000,
      -2px 0 0 #000000,
      2px 0 0 #000000,
      0 2px 0 #000000,
      0 -2px 0 #000000; /* Terminate with a semi-colon */
  }
</style>
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="d-flex flex-column min-vh-100">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a href="index.php"> <img src="img/logop.png" width="30" height="30" href="index.php" style="margin-left: 10px; margin-right: 5px;"/></a>
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Klinika Pixel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Strona główna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="cennik.php">Cennik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="o_nas.php">O nas</a>
            </li>
          </ul>
          <form class="d-flex">
                        <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='logowanie.php';">Logowanie</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

{$content}
    <hr style="margin-bottom:30px; margin-top:80px;">
<footer class="container">
  <div class="row">
    <div class="col-5">
  <p align="center"> Kontakt </p>
  </div>
  </div>
    <div class="row">
      <div class="col-2">
        <p class="fw-bold" style="margin:0px; padding:0px;">Placówka czynna: </p>
        <br>
        <p class="fw-bold" style="margin:0px; padding:0px;">Telefon: </p>
        <p class="fw-bold" style="margin:0px; padding:0px;">Email: </p>
      </div>
      <div class="col-3">
        <p align="right" style="margin:0px; padding:0px;">pon-sob 8:00-18:00 <br>Obra, ul. Kanałowa 2</p>
        <p align="right" style="margin:0px; padding:0px;">(+48) 690 438 163</p>
        <p align="right" style="margin:0px; padding:0px;">klinikapixel@gmail.com</p>
      </div>
      </div>
      <br>
      <span class="fixed-bottom"><p class="float-end"><a href="#"><img src=img/strzalka.png width="80px" height="50px" style="margin:10px; padding:0px;"></img></a></p></span>
      <p class="fw-lighter">Copyright &copy; 2022 Klikina "Pixel". Wszelkie prawa zastrzeżone. <a href="Regulamin.pdf" class="text-dark">Polityka prywatności</a></p>
</footer>
</main>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
