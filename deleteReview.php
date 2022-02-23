<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$id_review = $_POST['id_review'];

//upload image
    $sql = "DELETE FROM review_attr WHERE id_reviews = '$id_review'";
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