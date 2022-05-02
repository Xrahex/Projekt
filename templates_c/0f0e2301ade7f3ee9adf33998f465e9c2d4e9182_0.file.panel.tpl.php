<?php
/* Smarty version 4.1.0, created on 2022-03-20 14:19:15
  from 'C:\xampp\htdocs\Projekt\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623729d3a60766_01876679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0e2301ade7f3ee9adf33998f465e9c2d4e9182' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\templates\\panel.tpl',
      1 => 1647782354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623729d3a60766_01876679 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!--Style-->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="sidebars.css">
</head>

<body>
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Products
        </a>
      </li>
      <li>
        <a href="index.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Wyloguj
        </a>
      </li>
    </ul>
  </div>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>




      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-dark text-white mt-auto">
          <p class="text-white"><center>Copyright &copy; 2022 Klikina "Pixel". Wszelkie prawa zastrzeżone. </center></p>
      </footer>
	<?php echo '<script'; ?>
 src="sidebars.js"><?php echo '</script'; ?>
>
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
