<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();



$smarty->assign('title','FAQ');
$smarty->assign('content','
');
$smarty->assign('content1','require_once "modules/emp.php";');
$smarty->display('panel_administrator.tpl');

?>
