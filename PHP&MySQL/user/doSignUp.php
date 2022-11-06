<?php
if(!isset($_POST["account"])){
    echo "沒有帶資料";
    exit;
}

require("../db-connect.php");

$account=$_POST["account"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

if(empty($account)){
    echo "沒有填 account";
    exit;
}
if(empty($password)){
    echo "沒有填密碼";
    exit;
}
if(empty($repassword)){
    echo "沒有再輸入一次密碼";
    exit;
}
if($password != $repassword){
    echo "前後密碼不一致";
    exit;
}
$password=md5($password);

$sql="SELECT account FROM users WHERE account='$account'";
$result = $conn->query($sql);
$userCount=$result->num_rows;

if($userCount>0){
    echo "該帳號已存在";
    exit;
}

//寫入資料庫
$now=date('Y-m-d H:i:s');
$sqlCreate="INSERT INTO users (account, password, create_time,valid) VALUES ('$account', '$password', '$now', 1)";

if ($conn->query($sqlCreate) === TRUE) {
    echo "新資料輸入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>