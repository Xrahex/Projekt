<?php
/* Smarty version 4.1.0, created on 2022-03-25 15:25:26
  from 'C:\xampp\htdocs\Projekt\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623dd0d6d5e6a1_01875246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63da3c57eb978576e80a5c3b3026aa1aaf554ced' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\templates\\homepage.tpl',
      1 => 1648218324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623dd0d6d5e6a1_01875246 (Smarty_Internal_Template $_smarty_tpl) {
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
