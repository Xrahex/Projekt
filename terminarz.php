<?php
require_once("smarty/libs/SmartyBC.class.php");
$smarty = new SmartyBC();


$smarty->assign('title','Strona');
$smarty->assign('content1','');
$smarty->assign('content','
 <div id="calendar"></div>
');


$smarty->display('terminarz.tpl');
?>
