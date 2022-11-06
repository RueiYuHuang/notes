<?php
require("../db-connect.php");

$sql="CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(30),
    email VARCHAR(30)
    )";
    
if ($conn->query($sql) === TRUE) {
    	echo "資料表 users 建立完成";
  } else {
    	echo "建立資料表錯誤: " . $conn->error;
  }


?>