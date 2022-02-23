<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$attrName = $_POST['attrName'];
$location = $_POST['location'];
$header = $_POST['header'];
$detail = $_POST['detail'];
$id_article = $_POST['id_article'];

//upload image
    $sql = "UPDATE articles SET attr_name = '$attrName', locationn = '$location', header = '$header', detail = '$detail' WHERE id_article = '$id_article'";
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