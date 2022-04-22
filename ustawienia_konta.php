<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();



$smarty->assign('title','Ustawienia konta');
$smarty->assign('menu','');
$smarty->assign('content','


<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-10">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header" align="center">Edytuj dane konta</div>
                <div class="card-body">
                    <form>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="login">Login</label>
                                <input class="form-control" id="login" type="text" placeholder="Wpisz swój login">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="haslo">Hasło</label>
                                <input class="form-control" id="haslo" type="text" placeholder="Wpisz swoje hasło">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Adres email</label>
                            <input class="form-control" id="email" type="email" placeholder="Wpisz swój adres email">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Zapisz zmiany</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>












');


if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
if ($_SESSION['typ']==3)
{
$smarty->display('panel_pacjent.tpl');
}
?>
