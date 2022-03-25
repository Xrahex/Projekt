<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Panel Glowny');
$smarty->assign('content','





');
if(isset($_SESSION['id'])){
if $_SESSION['id']==1
{
$smarty->display('panel_admin.tpl');
}
if $_SESSION['id']==2
{
$smarty->display('panel_lekarz.tpl');
}
if $_SESSION['id']==3
{
$smarty->display('panel_panel.tpl');
}}
?>
