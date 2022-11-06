<?php
require_once("pdo-connect.php");

$id=16;
$email="ken@test.com";
$phone="0933333111";

$stmt=$db_host->prepare("UPDATE users SET  phone=?, email=? WHERE id=?");

try {
    $stmt->execute([$phone, $email, $id]);
    echo "資料修改成功";
    
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}

$db_host = NULL;

?>