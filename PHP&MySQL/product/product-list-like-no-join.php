<?php
require("../db-connect.php");

$sql="SELECT * FROM product";

$result=$conn->query($sql);
$rows=$result->fetch_all(MYSQLI_ASSOC);

// print_r($rows);
// $rows=[
//     [
//         "id"=>1,
//         "name"=>"xxx",
//         "liked_count"=>n
//     ]
// ];

for($i=0; $i<count($rows); $i++){
    // print_r($rows[$i]);
    // echo "<br>";
    $product_id=$rows[$i]["id"];
    $sqlLikeCount="SELECT * FROM user_order WHERE product_id = $product_id";
    $resultLike = $conn->query($sqlLikeCount);
    $like_count = $resultLike->num_rows;
    // echo $rows[$i]["id"].": ".$like_count."<br>";
    $rows[$i]["liked_count"]=$like_count;
}

var_dump($rows);

?>