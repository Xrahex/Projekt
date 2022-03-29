<?php
require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();


$smarty->assign('title','Strona');
$smarty->assign('content','
 <div id="calendar"></div>
');


$smarty->display('terminarz.tpl');
?>
