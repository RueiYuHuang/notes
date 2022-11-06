<?php
require_once("../db-connect.php");

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];

// $data=[
//     "name"=>$name,
//     "phone"=>$phone,
//     "email"=>$email
// ];

// echo json_encode($data);

$sql="INSERT INTO users_jquery (name, phone, email, valid) VALUES ('$name', '$phone', '$email', 1)";

if ($conn->query($sql) === TRUE) {
    $data=[
        "status"=>1,
        "msg"=>"新資料輸入成功"
    ];
    echo json_encode($data);
} else {
    
    $data=[
        "status"=>0,
        "msg"=> "Error: " . $sql . "<br>" . $conn->error
    ];
    echo json_encode($data);
}

$conn->close();
?>