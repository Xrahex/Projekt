<?php
session_start();
if($_SESSION['log']==1) {
header("Location: success.php");
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="author" content="Klikina Squad">
    <title>Logowanie</title>
<!--Style-->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

</head>
<div align="center">
    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Logowanie</p>

                <form class="mx-1 mx-md-4" method="post" action="logowanie.php">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="login" name="login" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">Login</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="haslo" name="haslo" class="form-control" required/>
                      <label class="form-label" for="form3Example3c">Hasło</label>
                    </div>
                  </div>


                  <div class="form-check d-flex justify-content-center mb-5" >
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                      required
                    />
                    <label class="form-check-label" for="form2Example3">
                      Zgadzam się ze wszystkimi warunkami świadczenia usług
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg" >Zaloguj się</button>
                  </div>

                </form>
                <?php
                  require_once "modules/db.php";
                  $conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z bazą danych");
                  mysqli_set_charset($conn,"utf8");
                  @$haslo=$_POST['haslo'];
                  @$login=$_POST['login'];
                  echo $haslo;
                  echo $login;
                  $q="SELECT * From users Where login='$login' AND haslo='$haslo'";
                  $result=mysqli_query($conn,$q);
                  $ile=mysqli_num_rows($result);
                  echo $ile;
                  if($ile==0)
                  {
	                   echo "Nie ma takiego użytkownika!";
                   }
                   else
                   {
                      while($obj=mysqli_fetch_assoc($result))
                      {
                        $_SESSION['login'] = $obj['login'];
                        $_SESSION['typ'] = $obj['typ'];
                      }
                     header('location:success.php');
                     $_SESSION['log'] = 1;

                   }
                  mysqli_close($conn);
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
    </div>

	    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
