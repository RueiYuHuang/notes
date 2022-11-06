<?php

if(!isset($_GET["name"]) || !isset($_GET["email"])){
    echo "沒有正常的帶變數到此頁";
    exit;
}
if(empty($_GET["name"])){
    echo "name 為空";
    exit;
}
if(empty($_GET["email"])){
    echo "email 為空";
    exit;
}


$name=$_GET["name"];
$email=$_GET["email"];

echo "name: $name, email: $email";

?>