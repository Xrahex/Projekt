<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title>{$title}</title>
<!--Style-->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/index.css">
<link rel="apple-touch-icon" sizes="57x57" href="../img/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../img/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../img/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../img/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../img/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../img/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../img/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../img/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../img/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/fav/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="d-flex flex-column min-vh-100">

    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-white najedz">Strona główna</a></li>
            <li><a href="cennik.php" class="nav-link px-2 text-white najedz">Cennik</a></li>
            <li><a href="faq/faq.html" class="nav-link px-2 text-white najedz">FAQ</a></li>
            <li><a href="o_nas.php" class="nav-link px-2 text-white najedz">O nas</a></li>
          </ul>

          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='logowanie.php';">Menu</button>
          </div>
        </div>
      </div>
    </header>

{$content}

      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-dark text-white mt-auto">
          <p class="text-white"><center>Copyright &copy; 2022 Klikina "Pixel". Wszelkie prawa zastrzeżone. </center></p>
      </footer>

    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
