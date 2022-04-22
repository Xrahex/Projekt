<?php
/* Smarty version 4.1.0, created on 2022-04-22 15:39:22
  from 'C:\xampp\htdocs\Projekt\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6262b00a1010b6_41240244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63da3c57eb978576e80a5c3b3026aa1aaf554ced' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\templates\\homepage.tpl',
      1 => 1650634760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6262b00a1010b6_41240244 (Smarty_Internal_Template $_smarty_tpl) {
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
<body class="d-flex flex-column min-vh-100">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Klinika Pixel</a>
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
              <a class="nav-link" aria-current="page" href="faq/faq.html">FAQ</a>
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

    <hr class="featurette-divider">
<footer class="container">
  <p class="float-end"><a href="#">Powrót na góre</a></p>
  <p>Copyright &copy; 2022 Klikina "Pixel". Wszelkie prawa zastrzeżone. <a href="#">Polityka prywatności</a></p>
</footer>
</main>
    <?php echo '<script'; ?>
 src="bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
