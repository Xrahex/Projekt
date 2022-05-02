<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();

$smarty->assign('title','Zgłoszenia');
$smarty->assign('menu','');
$smarty->assign('content','');
$smarty->assign('content1','require_once "modules/zglos.php";');
$smarty->display('panel_pacjent.tpl');
?>
