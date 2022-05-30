<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();



$smarty->assign('title','E-recepta');
$smarty->assign('menu','');
$smarty->assign('content1','');
$smarty->assign('content','');


if ($_SESSION['typ']==2)
{
$smarty->assign('content1','require_once "modules/wystaw_recepte.php";');
$smarty->display('panel_lekarz.tpl');
}
if ($_SESSION['typ']==3)
{
$smarty->assign('content1','require_once "modules/recepty.php";');
$smarty->display('panel_pacjent.tpl');
}
?>
