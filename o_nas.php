<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','O nas');
$smarty->assign('content','

<p> Napisac o nas </p>




');
$smarty->display('homepage.tpl');

?>
