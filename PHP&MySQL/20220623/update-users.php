<?php
require("../db-connect.php");

$sql="UPDATE users SET phone='0911111222', email='lucy@gmail.com' WHERE id=6";

if ($conn->query($sql) === TRUE) {
    echo "資料表 users 修改完成";
} else {
    echo "修改資料表錯誤: " . $conn->error;
}

$conn->close();

?>