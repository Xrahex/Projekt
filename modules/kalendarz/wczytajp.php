<?php
session_start();
$k=$_SESSION['login'];
$connect = new PDO('mysql:host=localhost;dbname=klinika', 'root', '');
$query = "SELECT * FROM users Where login='$k'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
$kto=$row['id'];
}
$data = array();
$query = "SELECT * FROM events Where user_id='$kto'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}
echo json_encode($data);
?>
