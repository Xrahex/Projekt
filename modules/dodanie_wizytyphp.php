<?php
@$title=$_POST["title"];
@$start_event=$_POST["start_event"];
@$end_event=$_POST["end_event"];
@$user_id=$_POST["user_id"];
require "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$q1="INSERT INTO events(title,start_event,end_event,user_id) VALUES ('$title','$start_event','$end_event','$user_id')";
$result1=mysqli_query($conn,$q1);
header("Location: ../dodanie_wizyty.php")
?>
