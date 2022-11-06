<?php
require_once("pdo-connect.php");

$account="tommy";
$name="Tommy";
$password=md5("abcde");
$now=date('Y-m-d H:i:s');

$stmt=$db_host->prepare("INSERT INTO users (account, name, password, create_time, valid) VALUES (:account, :name, :password, :create_time, 1)");

try {
    $stmt->execute([
        ":account"=>$account,
        ":name"=> $name, 
        ":password" => $password,
        ":create_time"=>$now
    ]);
    
    
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}

$db_host = NULL;



?>