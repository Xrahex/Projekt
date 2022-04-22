<?php
@$imie=$_POST["imie"];
@$nazwisko=$_POST["nazwisko"];
@$zabieg=$_POST["zabieg"];
@$data=$_POST["data"];
require_once "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q1="INSERT INTO zabiegi(imie,nazwisko,zabieg,data) VALUES ('$imie','$nazwisko','$zabieg','$data')";
$result1=mysqli_query($conn,$q1);
?>
