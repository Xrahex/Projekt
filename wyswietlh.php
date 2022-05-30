<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();



$smarty->assign('title','Historia leczenia');
$smarty->assign('menu','');

$smarty->assign('content','');


if ($_SESSION['typ']==2)
{
$smarty->assign('content1','require_once "modules/historys.php";');
$smarty->display('panel_lekarz.tpl');
}
?>
