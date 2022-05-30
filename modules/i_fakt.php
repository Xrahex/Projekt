<?php
session_start();
require_once "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$id=$_SESSION['id'];
$q="Select count(*) from faktury where id_pacjenta='$id' and stan=1 group by nazwa ";
$result=mysqli_query($conn,$q);
$ile = mysqli_num_rows($result);
echo $ile;
echo $id;
$_SESSION['ifakt']=$ile;
mysqli_close($conn);
?>
