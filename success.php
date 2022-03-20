<?php
session_start();
@$login = $_SESSION['login'];
@$typ = $_SESSION['typ'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    echo "Zalogowano jako ".$login."</br>";
    echo "Typ: ".$typ."</br>";

    ?>
  </body>
</html>
