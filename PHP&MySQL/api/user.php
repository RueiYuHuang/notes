<?php

require("../db-connect.php");

$id=$_POST["id"];
$sql="SELECT id, account, name, phone, email FROM users WHERE id='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

// var_dump($row);
echo json_encode($row);

?>