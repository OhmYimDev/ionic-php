<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$contentdata = file_get_contents("php://input");
$getdata = json_decode($contentdata);

// $tablename = $_POST['tablename1'];

// $get_atrID = $getdata->atrID;

// $user = $_POST['user'];
// $pass = $_POST['pass'];


$sql = "SELECT id_attraction,name_attr, ROUND(SUM(score)/count(1)) as score FROM review_attr GROUP BY id_attraction order by sum(score)/count(1) DESC;";
$result = mysqli_query($con,$sql);

$numrow = mysqli_num_rows($result);

if($numrow > 0){
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row;
    }

    echo json_encode($arr);
    
}else{
    echo json_encode(null);
   
}

?>