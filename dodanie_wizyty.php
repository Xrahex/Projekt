<?php
session_start();
if($_SESSION['log']!=1) {
header("Location: logowanie.php");
}
?>
<?php
require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->assign('title','Usuwanie Pracownika');
$smarty->assign('content','
<link rel="stylesheet" href="modules/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
 <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
 <script type="text/javascript" src="modules/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript" src="modules/bootstrap-datetimepicker/js/demo.js"></script>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<br><br><br><br>
<form class="mx-1 mx-md-4" action="modules/dodanie_wizytyphp.php" method="post">
  <div class="row">
    <center>
  <h1>Dodawanie wizyty</h1>
  </center>
  </div>
  <br>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="title" name="title" class="form-control" placeholder="Nazwa" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Nazwa</label>
</div>
</div>

<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<label for="id_start_datetime">24hr Date-Time:</label>
                        <div class="input-group date" id="id_1">
                            <input type="text" value="05/16/2018 11:31:00" class="form-control" required/>
                            <div class="input-group-addon input-group-append">
                                <div class="input-group-text">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
<div class="row">
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="end_event" name="end_event" class="form-control" placeholder="Data zakonczenia" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">Data zakonczenia</label>
</div>
</div>
<div class="d-flex flex-row align-items-center mb-4 col-md-6">
<i class="fas fa-user fa-lg me-3 fa-fw"></i>
<div class="form-floating flex-fill mb-0">
<input type="text" id="user_id" name="user_id" class="form-control" placeholder="user_id" required autocomplete="off"/>
<label class="form-label" for="form3Example1c">User_id</label>
</div>
</div>
<div class="row">
<div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-primary btn-lg" >Zarejestruj</button>
  </div>
  <div class="btn-group flex-row align-items-center mb-4 col-md-6" role="group" aria-label="Basic example">
  <button type="reset" class="btn btn-danger btn-lg" >Wyczyść</button>
  </div>
</div>
</form>


');

if ($_SESSION['typ']==1)
{
$smarty->display('panel_administrator.tpl');
}
if ($_SESSION['typ']==2)
{
$smarty->display('panel_lekarz.tpl');
}
