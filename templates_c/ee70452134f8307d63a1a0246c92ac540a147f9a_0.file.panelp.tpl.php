<?php
/* Smarty version 4.1.0, created on 2022-05-27 15:46:34
  from 'C:\xampp\htdocs\Projekt2\templates\panelp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6290d63a53d200_83374535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee70452134f8307d63a1a0246c92ac540a147f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt2\\templates\\panelp.tpl',
      1 => 1653659192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6290d63a53d200_83374535 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!--Style-->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/sidebars.css">
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
    headerToolbar:{
      center:'mycustomButton'
    },
    locale: 'pl',
    height: 750,
    selectable:true,
    selectHelper:true,
    buttonText: {
      today: 'dzisiaj'
    },
    customButtons: {
      mycustomButton:{
        text:'Um??w wizyt??',
        click:function() {
          window.location='dodanie_wizyty.php';
        }
      }
    },
    events: 'test.php',
    eventDisplay: 'block',
    displayEventEnd: 'true',
    firstDay: 1
  });
  calendar.render();
  calendar.fullCalendar('refetchEvents');
});
<?php echo '</script'; ?>
>


</head>

<body>
  <div class="container-fluid">
	  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block text-white bg-dark sidebar collapse min-vh-100">
	      <div class="position-sticky pt-3">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" align="center">
    <span class="fs-4">Menu</span>
    </a>

    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="panel.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
		</svg>
          Profil pacjenta
        </a>
      </li>
	  <li>
        <a href="wizyty.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-heart" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Zm7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
		</svg>
          Wizyty
        </a>
      </li>
	  <li>
        <a href="historia_leczenia.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
		<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
		<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
		</svg>
          Historia leczenia
        </a>
      </li>

	  	  <li>
        <a href="e_recepta.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bandaid" viewBox="0 0 16 16">
		<path d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242ZM12.293 8 8.027 3.734 3.738 8.031 8 12.293 12.293 8Zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Z"/>
		<path d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707ZM8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707Z"/>
		</svg>
          E-recepta <span class="badge badge-light rounded-circle" style="background-color:#0d6efd;"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['php'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['php'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'php\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('php', array());
$_block_repeat=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            require "modules/db.php";
            $conn=mysqli_connect($host,$user,$pass,$db) or die("Nie uda??o si?? po????czy?? z baza danych");
            mysqli_set_charset($conn,"utf8");
            $id=$_SESSION['id'];
            $q="Select count(*) from recepty where pacjent_id='$id' and status=1 group by nazwa ";
            $result=mysqli_query($conn,$q);
            $ile = mysqli_num_rows($result);
            if($ile==0){
            }
            else{
            echo $ile;
          }
            <?php $_block_repeat=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
        </a>
      </li>

	  <li>
        <a href="faktury.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
		<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
		<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
		</svg>
    Faktury <span class="badge badge-light rounded-circle" style="background-color:#0d6efd;"><?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['php'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['php'][0] : null;
if (!is_callable($_block_plugin2)) {
throw new SmartyException('block tag \'php\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('php', array());
$_block_repeat=true;
echo $_block_plugin2(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
      require "modules/db.php";
      $conn=mysqli_connect($host,$user,$pass,$db) or die("Nie uda??o si?? po????czy?? z baza danych");
      mysqli_set_charset($conn,"utf8");
      $id=$_SESSION['id'];
      $q="Select count(*) from faktury where id_pacjenta='$id' and stan=1 group by nazwa ";
      $result=mysqli_query($conn,$q);
      $ile = mysqli_num_rows($result);
      if($ile==0){
      }
      else{
      echo $ile;
    }
      <?php $_block_repeat=false;
echo $_block_plugin2(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
        </a>
      </li>

	  	  <li>
        <a href="zgloszenia.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
		<path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
		<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
		</svg>
          Zg??oszenia
        </a>
      </li>

	  <li>
        <a href="ustawienia_konta.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
		<path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
		<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
		</svg>
          Ustawienia konta
        </a>
      </li>
      <li>
        <a href="modules/logout.php" class="nav-link text-white najedz">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
		<path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
		<path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
		</svg>
          Wyloguj
        </a>
      </li>
    </ul>
  </div>
</nav>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100 d-flex justify-content-center p-2">
<div style="width:60%;">
  <br><br><br>
  <div class="card mb-4">
      <div class="card-header" align="center"><h1>Tw??j profil</h1></div>
  <div class="col-md-12">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Imie</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo $_smarty_tpl->tpl_vars['imie']->value;?>

                      </div>
                    </div>
                    <hr>
                  <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nazwisko</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['nazwisko']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Imie</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo $_smarty_tpl->tpl_vars['pesel']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nr. telefonu</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['telefon']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Adres email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Miejscowo????</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['miejscowosc']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Kod pocztowy</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['poczta']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Ulica</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['ulica']->value;?>

                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nr. domu</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['dom']->value;?>

                      </div>
                    </div>
  </div>
</div>
</div>
</main>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 bg-dark text-white fixed-bottom mt-auto">
          <p class="text-white"><center>Copyright &copy; 2022 Klikina "Pixel". Wszelkie prawa zastrze??one. </center></p>
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
