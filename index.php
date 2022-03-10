<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Strona');
$smarty->assign('content','tesat');
$smarty->display('homepage.tpl');

?>
