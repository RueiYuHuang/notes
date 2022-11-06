<?php
if(!isset($_GET["id"])){
    // echo "id 不存在";
    // header("location: 404.php");
    require("404.php");
    exit;
}

$pattern="/^[0-9]*[1-9][0-9]*$/";
$id=$_GET["id"];
if(preg_match($pattern, $id)){
    // echo "yes";
}else{
    // echo "no";
    require("404.php");
    exit;
}

require("../db-connect.php");
$sql="SELECT * FROM product WHERE id=$id";
$result=$conn->query($sql);
$rowCount=$result->num_rows;

// echo $rowCount;
if($rowCount==0){
    require("404.php");
    exit;
}

$row=$result->fetch_assoc();
var_dump($row);

?>