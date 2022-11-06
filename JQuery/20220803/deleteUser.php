<?php
require_once("../db-connect.php");

$id=$_POST["id"];

$data=[
    "id"=>$id
];

// echo json_encode($data);
$sql="UPDATE users_jquery SET valid=0 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    $data=[
        "status"=>1,
        "msg"=>"使用者刪除"
    ];
    echo json_encode($data);
    // echo "資料表 users 修改完成";
} else {
    // echo "修改資料表錯誤: " . $conn->error;
    $data=[
        "status"=>0,
        "msg"=>"修改資料表錯誤: " . $conn->error
    ];
    echo json_encode($data);
}

$conn->close();

