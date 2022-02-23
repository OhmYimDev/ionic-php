<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.ini.php');

$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];

$sql = "INSERT INTO users (`username`, `password`,`firstname`,`lastname`, `phone_number`) VALUES ('$username','$password','$firstname','$lastname',$phonenumber)";
$result = mysqli_query($con,$sql);

// $numrow = mysqli_num_rows($result);


// if($numrow == 1){
//     $arr = array();
//     while($row = mysqli_fetch_assoc($result)){
//         $arr[] = $row;
//     }

//     echo json_encode($arr);
     mysqli_close($con);
// }else{
//     echo json_encode(null);
   
// }

?>