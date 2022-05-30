<?php
session_start();
@$imie=$_POST["imie"];
@$nazwisko=$_POST["nazwisko"];
@$zabieg=$_POST["zabieg"];
@$data=$_POST["data"];
@$i=$_SESSION['id'];
echo $i;
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q1="INSERT INTO zabiegi(imie,nazwisko,zabieg,data) VALUES ('$imie','$nazwisko','$zabieg','$data')";
$result1=mysqli_query($conn,$q1);

$q2="SELECT * FROM pacjenci WHERE imie='$imie' AND nazwisko='$nazwisko'";
$result2=mysqli_query($conn,$q2);
  while($obj=mysqli_fetch_array($result2))
  {
    $login=$obj['login'];
  }

$q3="INSERT INTO historia_pacjenta(login,data_wykonania,id_doktora,opis) VALUES ('$login','$data','$i','$zabieg')";
$result3=mysqli_query($conn,$q3);
header("Location: ../zglos_zabieg.php")
?>
