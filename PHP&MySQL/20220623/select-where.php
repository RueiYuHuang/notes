<?php

if(!isset($_GET["id"])){
    echo "沒有參數";
    exit;
}
$id=$_GET["id"];

require("../db-connect.php");
$sql="SELECT * FROM users WHERE id=$id";

$result = $conn->query($sql);
$userCount=$result->num_rows;

if($userCount>0){
    // while($row = $result->fetch_assoc()):
    //     var_dump($row);
    //     echo "<br>";
    // endwhile;

    $row = $result->fetch_assoc();
    var_dump($row);
}


$conn->close();

?>