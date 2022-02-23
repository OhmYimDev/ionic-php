<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$iduser = $_POST['iduser'];
$id_attr = $_POST['id_attr'];

$sql = "INSERT INTO checkin (`date_time`, `id_attraction`, `id_user`) VALUES (NOW(), '$id_attr', '$iduser')";
$result = mysqli_query($con,$sql);
mysqli_close($con);
?>