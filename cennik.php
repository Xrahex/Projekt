<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Cennik');
$smarty->assign('content','

<p> Tu będzie cennik </p>




');
$smarty->display('homepage.tpl');

?>
