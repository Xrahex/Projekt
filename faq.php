<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','FAQ');
$smarty->assign('content','

<p> Tu będzie FAQ </p>




');
$smarty->display('homepage.tpl');

?>
