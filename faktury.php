<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();



$smarty->assign('title','Faktury');
$smarty->assign('menu','');
$smarty->assign('content','');

if ($_SESSION['typ']==1)
{
$smarty->assign('content1','require_once "modules/wystaw_fakture.php";');
$smarty->display('panel_administrator.tpl');

}
if ($_SESSION['typ']==3)
{
$smarty->assign('content1','require_once "modules/fakturyp.php";');
$smarty->display('panel_pacjent.tpl');
}
