<?php
require("../db-connect.php");

$id=$_GET["id"];

//delete
// $sql="DELETE FROM users WHERE id='$id'";

//update to valid 0
//soft delete
$sql="UPDATE users SET valid=0 WHERE id='$id'";

// echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "刪除資料錯誤: " . $conn->error;
}
header("location: users.php");

?>