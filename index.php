<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Strona');
$smarty->assign('content','



    <div class="logo" align="center">
    <img src="img/logo.png" style="width:600px; height:800px;"> </img>
    </div>


');
$smarty->display('homepage.tpl');

?>
