<?php
require "db.php";
$login=$_SESSION['login'];
$id=$_SESSION['id'];
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q="Select * from users where login = '$login'";
$result=mysqli_query($conn,$q);
while($obj=mysqli_fetch_array($result))
{
  $l=$obj['login'];
  $h=$obj['haslo'];
  $m=$obj['email'];
}
echo '<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-10">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header" align="center">Edytuj dane konta</div>
                <div class="card-body">
                    <form method="post" action="#">
                        <!-- Form Row -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="login">Login</label>
                                <input class="form-control" id="login" name="login" required type="text" value="'.$l.'" placeholder="Wpisz swój login">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="haslo">Hasło</label>
                                <input class="form-control" id="haslo" type="text" required name="haslo" value="'.$h.'" placeholder="Wpisz swoje hasło">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="email" >Adres email</label>
                            <input class="form-control" id="email" name="email" required type="email" value="'.$m.'" placeholder="Wpisz swój adres email">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Zapisz zmiany</button>
                        <button class="btn btn-danger" type="button">Usuń konto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>';

@$log=$_POST['login'];
@$pas=$_POST['haslo'];
@$ma=$_POST['email'];


if(isset($log))
{
$q1="Update users SET login='$log', haslo='$pas', email='$ma' where id='$id'";
$result1=mysqli_query($conn,$q1);
if($result1)
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='success'><strong>Zmiany zostały zapisane.</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>  </div>";
}
else
{
  echo "Wystąpił błąd.";
}
}

?>
