<?php
/* Smarty version 4.1.0, created on 2022-05-26 15:35:09
  from 'C:\xampp\htdocs\Projekt2\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628f820de0e992_50400764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494e6d09ef1e83357c77f18044448bb52d5e5182' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt2\\templates\\homepage.tpl',
      1 => 1652365214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628f820de0e992_50400764 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
              <a class="nav-link" aria-current="page" href="index.php">Strona g????wna</a>
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

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

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
      <center><h2>U??ytkownik</h2></center>
</div>
<div class="col-md-4">
      <center><h2>Kontakt</h2></center>
</div>
  </div>
    <div class="row">
      <div class="col-4" align="center">
      <p></p>
      <p>Klinika Pixel SP. Z O.O.</p>
<p>ul. Powsta??c??w 5</p>
<p>60-123 Sosnowiec</p>
<a href="Regulamin.pdf" class="text-white text-decoration-none">Polityka prywatno??ci</a>
      </div>
      <div class="col-4" align="center">
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="index.php">Strona g????wna</a>
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="cennik.php">Cennik</a>
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="faq.php">FAQ</a>
        <p></p>
        <a class="text-decoration-none text-white" align="center" href="o_nas.php">O nas</a>
      </div>
    <div class="col-4" align="center">
      <p></p>
      <p class="fw-bold" style="margin:0px; padding:0px;">Plac??wka czynna: </p>
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
	<a>&copy; 2022 Klikina "Pixel". Wszelkie prawa zastrze??one.</a>
</div>
</section>

    <?php echo '<script'; ?>
 src="bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</html><?php }
}
