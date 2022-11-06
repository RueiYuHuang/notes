<?php
require("../db-connect.php");

$account=$_POST["account"];
$password=$_POST["password"];

$sql="SELECT * FROM users WHERE account = '$account' AND password='$password'";

// echo $sql;
$result=$conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);

var_dump($rows);

?>