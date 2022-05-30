<?php
session_start();
$login=$_SESSION['login'];
require_once "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z bazą danych");
mysqli_set_charset($conn,"utf8");
$q1="Update users SET czy_zalogowany=0 WHERE login='$login'";
$result1=mysqli_query($conn,$q1);


$_SESSION = array();
session_destroy();
header("Location: ../index.php" )





?>
