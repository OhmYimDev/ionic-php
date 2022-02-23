<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$username = $_POST['username'];
$attrName = $_POST['attrName'];
$location = $_POST['location'];
$header = $_POST['header'];
$detail = $_POST['detail'];

//upload image
$ext = pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "https://www.comdept.cmru.ac.th/60143227/images/";
$upload_path = $image_path.$new_image_name;


//uploading
move_uploaded_file($_FILES['image']['tmp_name'],$upload_path);

$name_image = $new_image_name;


$sql = "INSERT INTO articles (username,attr_name,locationn,header,detail,name_image) 
VALUES ('$username','$attrName','$location','$header','$detail','$name_image')";
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