<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','O nas');
$smarty->assign('content','


<br><br><br><br>
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-10">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header" align="center"><h1>Zgłoszenie<h1></div>
                <div class="card-body">
                    <form method="post" action="#">
                        <!-- Form Row -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-2">
                              <label class="fw-bold" style="display:inline-block;">Na kogo</label>
                            </div>
                            <div class="col-md-10">
                                <input style="width:100%;" type="text">
                            </div>
                            <p></p>
                            <div class="col-md-2">
                              <label class="fw-bold" style="display:inline-block;">Treść</label>
                            </div>
                            <div class="col-md-10">
                                <textarea style="height:300px; width:100%; resize:none;"></textarea>
                            </div>
                            <p></p>
                            <div class="col-md-2">
                              <label class="fw-bold" style="display:inline-block;">Załączniki</label>
                            </div>
                            <div class="col-md-10">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








');
$smarty->display('homepage.tpl');
?>
