<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Strona');
$smarty->assign('content','



    <div class="logo" align="center">
    <img src="img/logo.png" style="width:600px; height:800px;"> </img>
    </div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>
');
$smarty->display('homepage.tpl');

?>
