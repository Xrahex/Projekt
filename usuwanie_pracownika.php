<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();

$smarty->assign('title','Usuwanie Pracownika');
$smarty->assign('content','');







$smarty->display('panel_administrator1.tpl');
?>
