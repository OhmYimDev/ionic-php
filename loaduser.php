<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$contentdata = file_get_contents("php://input");
$getdata = json_decode($contentdata);

$get_atrID = $getdata->atrID;

// $user = $_POST['user'];
// $pass = $_POST['pass'];


$sql = "SELECT * FROM  attractions_data WHERE id_attraction = $get_atrID";
$result = mysqli_query($con,$sql);

$numrow = mysqli_num_rows($result);

if($numrow == 1){
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row;
    }

    echo json_encode($arr);
    
}else{
    echo json_encode(null);
   
}

?>