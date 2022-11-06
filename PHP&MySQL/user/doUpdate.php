<?php
if(!isset($_POST["name"])){
    echo "沒有帶資料";
    exit;
}
require("../db-connect.php");

$id=$_POST["id"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
// echo $name;
$sql="UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id=$id";
// echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 修改完成";
} else {
    echo "修改資料表錯誤: " . $conn->error;
}

$conn->close();

header("location: user-edit.php?id=".$id);
?>