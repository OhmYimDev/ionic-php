<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$id_review = $_POST['id_review'];
$comment = $_POST['comment'];
$score = $_POST['score'];

//upload image
    $sql = "UPDATE review_attr SET comment = '$comment', score = '$score' WHERE id_reviews = '$id_review'";
    $result =  mysqli_query($con,$sql);
    if($result)
    {
        echo json_encode($result);
        
    }else
    {
        echo json_encode(null);
       
    }
    mysqli_close($con);
    





?>  