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
<body class="d-flex flex-column min-vh-100" style="padding:0px;">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a href="index.php"> <img src="img/logo.png" width="30" height="30" href="index.php" style="margin-left: 10px; margin-right: 5px;"/></a>
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
    <br><br><br>
</body>
<section class="d-flex flex-column bg-primary text-white" style="background-color:#0000FF;">
<br>
<footer class="container">
  <div class="row">
    <div class="col-md-4">
      <center><h2>Klinika</h2></center>
  </div>
  <div class="col-md-4">
      <center><h2>Użytkownik</h2></center>
</div>
<div class="col-md-4">
      <center><h2>Kontakt</h2></center>
</div>
  </div>
    <div class="row">
      <div class="col-4" align="center">
      <p></p>
      <p>Klinika Pixel SP. Z O.O.</p>
<p>ul. Powstańców 5</p>
<p>60-123 Sosnowiec</p>
<a href="Regulamin.pdf" class="text-white text-decoration-none">Polityka prywatności</a>
      </div>
      <div class="col-4" align="center">
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="index.php">Strona główna</a>
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="cennik.php">Cennik</a>
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="faq.php">FAQ</a>
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="o_nas.php">O nas</a>
      </div>
    <div class="col-4" align="center">
      <p></p>
      <p class="fw-bold" style="margin:0px; padding:0px;">Placówka czynna: </p>
      <p style="margin:0px; padding:0px;">pon-sob 8:00-18:00
      <p></p>
      <p class="fw-bold" style="margin:0px; padding:0px;">Telefon: </p>
      <p style="margin:0px; padding:0px;">(+48) 690 438 163</p>
      <p></p>
      <p class="fw-bold" style="margin:0px; padding:0px;">Email: </p>
      <p style="margin:0px; padding:0px;">klinikapixel@gmail.com</p>
    </div>
      </div>
	<span class="fixed-bottom"><p class="float-end"><a href="#"><img src=img/strzalka.png width="80px" height="50px" style="margin:10px; padding:0px;"></img></a></p></span>
<br>
</footer>
<div class="text-center mt-auto p-3" style="background-color: rgba(0, 0, 0, 0.2)">
	<a>&copy; 2022 Klikina "Pixel". Wszelkie prawa zastrzeżone.</a>
</div>
</section>

    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>