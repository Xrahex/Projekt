<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Wizyty');
$smarty->assign('menu','');
$smarty->assign('content','');


if ($_SESSION['typ']==1)
{
$smarty->assign('content',' <div id="calendar" class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 border-bottom mb-4 col-md-12"></div>');
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->assign('content',' <div id="calendar" class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 border-bottom mb-4 col-md-12"></div>');
$smarty->display('panel_lekarz.tpl');
}
if ($_SESSION['typ']==3)
{
$smarty->assign('content',' <div id="calendar" class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 border-bottom mb-4 col-md-12"></div>');
$smarty->display('panel_pacjent.tpl');
}
?>
