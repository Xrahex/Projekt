<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title>{$title}</title>
<!--Style-->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

</head>
<body class="d-flex flex-column min-vh-100">

    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-white">Strona główna</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Cennik</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
            <li><a href="o_nas.php" class="nav-link px-2 text-white">O nas</a></li>
          </ul>

          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">Menu</button>
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
