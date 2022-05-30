<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}

$nr=$_GET['nr'];
$_SESSION['nr']=$nr;


?>
<?php
require_once("Smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();

$smarty->assign('title','Zgłoszenia');
$smarty->assign('menu','');
$smarty->assign('content','');

$smarty->assign('content1','require_once "modules/disp.php";');
$smarty->display('panel_administrator.tpl');
?>
