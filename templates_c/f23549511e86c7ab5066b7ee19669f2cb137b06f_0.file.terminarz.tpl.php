<?php
/* Smarty version 4.1.0, created on 2022-03-29 15:52:37
  from 'C:\xampp\htdocs\Projekt\templates\terminarz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62430f250bf0e5_06172477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f23549511e86c7ab5066b7ee19669f2cb137b06f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\templates\\terminarz.tpl',
      1 => 1648561954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62430f250bf0e5_06172477 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
<link href='lib/main.css' rel='stylesheet' />
<?php echo '<script'; ?>
 src='fullcalendar/core/locales/pl.js'><?php echo '</script'; ?>
>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='lib/main.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    themeSystem: 'bootstrap5',
    locale: 'pl',
    height: 750,
    selectable:true,
    selectHelper:true,
    buttonText: {
      today: 'dzisiaj'
    },
    events: 'modules/kalendarz/wczytaj.php',
    eventDisplay: 'block',
    displayEventEnd: 'true',
    firstDay: 1
  });
  calendar.render();
  calendar.fullCalendar('refetchEvents');
});
<?php echo '</script'; ?>
>
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
            <li><a href="faq.php" class="nav-link px-2 text-white najedz">FAQ</a></li>
            <li><a href="o_nas.php" class="nav-link px-2 text-white najedz">O nas</a></li>
          </ul>

          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='logowanie.php';">Menu</button>
          </div>
        </div>
      </div>
    </header>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-dark text-white mt-auto">
          <p class="text-white"><center>Copyright &copy; 2022 Klikina "Pixel". Wszelkie prawa zastrzeżone. </center></p>
      </footer>

    <?php echo '<script'; ?>
 src="bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
