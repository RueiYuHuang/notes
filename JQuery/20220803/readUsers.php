<?php
require_once("../db-connect.php");

$sql="SELECT * FROM users_jquery WHERE valid=1 ORDER BY id DESC";

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($rows);

$conn->close();
