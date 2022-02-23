<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$id_review = $_POST['id_review'];


$sql = "SELECT * FROM review_attr WHERE id_reviews = '$id_review'";
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