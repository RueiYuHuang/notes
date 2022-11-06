<?php

if(!isset($_POST["name"]) || !isset($_POST["email"])){
    echo "沒有正常的帶變數到此頁";
    exit;
}
if(empty($_POST["name"])){
    echo "name 為空";
    exit;
}
if(empty($_POST["email"])){
    echo "email 為空";
    exit;
}


$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phones"];
$gender=$_POST["gender"];
$telecom=$_POST["telecom"];
//去掉空的資料
$phone=array_filter($phone);

echo "name: $name, email: $email.";
echo "gender is $gender.";
echo "telecom is $telecom.";
$phones=implode(",", $phone); //js -> join
echo "phone number are $phones.";

?>