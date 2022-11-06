<?php
require_once("pdo-connect.php");

$stmt=$db_host->prepare("SELECT * FROM users");

try {
    $stmt->execute();
    // while ($row = $stmt->fetch()) {
    //     echo "<div>";
    //     // print_r($row);
    //     echo $row["account"];
    //     echo "</div>";
    // }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($rows);

    
} catch (PDOException $e) {
    echo "預處理陳述式執行失敗！ <br/>";
    echo "Error: " . $e->getMessage() . "<br/>";
    $db_host = NULL;
    exit;
}

$db_host = NULL;
?>