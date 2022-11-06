<?php

if(!isset($_POST["account"])){
    // echo "沒有帶資料";
    $data=[
        "status"=>0,
        "message"=>"沒有帶資料"
    ];
    echo json_encode($data);

    exit;
}

require("../db-connect.php");

$account=$_POST["account"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

if(empty($account)){
    // echo "沒有填 account";
    $data=[
        "status"=>0,
        "message"=>"沒有填 account"
    ];
    echo json_encode($data);
    exit;
}
if(empty($password)){
    // echo "沒有填密碼";
    $data=[
        "status"=>0,
        "message"=>"沒有填密碼"
    ];
    echo json_encode($data);
    exit;
}
if(empty($repassword)){
    // echo "沒有再輸入一次密碼";
    $data=[
        "status"=>0,
        "message"=>"沒有再輸入一次密碼"
    ];
    echo json_encode($data);
    exit;
}
if($password != $repassword){
    // echo "前後密碼不一致";
    $data=[
        "status"=>0,
        "message"=>"前後密碼不一致"
    ];
    echo json_encode($data);
    exit;
}

$password=md5($password);

$sql="SELECT account FROM users WHERE account='$account'";
$result = $conn->query($sql);
$userCount=$result->num_rows;

if($userCount>0){
    // echo "該帳號已存在";
    $data=[
        "status"=>0,
        "message"=>"該帳號已存在"
    ];
    echo json_encode($data);
    exit;
}

//寫入資料庫
$now=date('Y-m-d H:i:s');
$sqlCreate="INSERT INTO users (account, password, create_time,valid) VALUES ('$account', '$password', '$now', 1)";

if ($conn->query($sqlCreate) === TRUE) {
    // echo "新資料輸入成功";
    $data=[
        "status"=>1,
        "message"=>"帳號註冊成功"
    ];
    echo json_encode($data);
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $data=[
        "status"=>0,
        "message"=>"Error: " . $sql . "<br>" . $conn->error
    ];
    echo json_encode($data);
}

$conn->close();


?>