<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Faktury');
$smarty->assign('menu','');
$smarty->assign('content','');

if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==3)
{
$smarty->display('panel_pacjent.tpl');
}
