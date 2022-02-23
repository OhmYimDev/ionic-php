<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$username = $_POST['username'];
$comment = $_POST['comment'];
$id_attr = $_POST['id_attr'];
$name_attr = $_POST['name_attr'];
$score = $_POST['score'];


$sql = "INSERT INTO review_attr (`comment`, `id_attraction`,`name_attr`, `username`,`score`) 
VALUES ('$comment', '$id_attr','$name_attr', '$username','$score')";
$result = mysqli_query($con,$sql);

if($result)
{
    echo json_encode($result);
    
}else
{
    echo json_encode(null);
   
}
mysqli_close($con);



?>