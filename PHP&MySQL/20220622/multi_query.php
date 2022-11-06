<?php
require("../db-connect.php");
$now=date('Y-m-d H:i:s');

$sql = "INSERT INTO users (name, phone, email, create_time)
	VALUES ('May', '0900000000', 'may@example.com', '$now');";
	$sql .= "INSERT INTO users (name, phone, email, create_time)
	VALUES ('Tom', '0900000000', 'tom@example.com', '$now');";
	$sql .= "INSERT INTO users (name, phone, email, create_time)
	VALUES ('Lucy', '0900000000', 'lucy@example.com', '$now')";

if ($conn->multi_query($sql) === TRUE) {
    echo "新資料輸入成功";
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

    $conn->close();


?>