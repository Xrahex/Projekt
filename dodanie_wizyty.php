<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();

$smarty->assign('title','Ustaw Wizytę');
$smarty->assign('menu','');
$smarty->assign('content','');
$smarty->assign('content1','
require_once "modules/selectp.php";');

if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
