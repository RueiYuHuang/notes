<?php
require_once("pdo-connect.php");

$id=1;

$stmt=$db_host->prepare("SELECT * FROM users WHERE id=?");

try {
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    print_r($row);
    
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}

$db_host = NULL;



?>