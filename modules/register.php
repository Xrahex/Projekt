<?php
@$imie=$_POST["imie"];
@$nazwisko=$_POST["nazwisko"];
@$pesel=$_POST["pesel"];
@$miejscowosc=$_POST["miejscowosc"];
@$kod_pocztowy=$_POST["kod_pocztowy"];
@$ulica=$_POST["ulica"];
@$nr_domu=$_POST["nr_domu"];
@$nr_telefonu=$_POST["nr_telefonu"];
function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
}

require_once "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$login=rand_string(8);
$haslo=rand_string(8);
$q1="INSERT INTO users(login,haslo,typ,czy_zalogowany) VALUES ('$login','$haslo',3,0)";
$q2="INSERT INTO pacjenci(login,imie,nazwisko,pesel,miejscowosc,kod_pocztowy,ulica,nr_domu,nr_telefonu) VALUES ('$login','$imie','$nazwisko','$pesel','$miejscowosc','$kod_pocztowy','$ulica','$nr_domu','$nr_telefonu')";
$result1=mysqli_query($conn,$q1);
$result2=mysqli_query($conn,$q2);
?>
