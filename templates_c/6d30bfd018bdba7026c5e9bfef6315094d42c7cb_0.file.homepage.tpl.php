<?php
/* Smarty version 4.1.0, created on 2022-03-10 13:20:19
  from 'C:\xampp\htdocs\projekt1\templates\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6229ed03d37af6_87373763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d30bfd018bdba7026c5e9bfef6315094d42c7cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt1\\templates\\homepage.tpl',
      1 => 1646914818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6229ed03d37af6_87373763 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
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
