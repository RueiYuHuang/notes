<?php
// $users=[
//     [
//         "id"=>1,
//         "account"=>"joe"
//     ],
//     [
//         "id"=>2,
//         "account"=>"jay"
//     ]
// ];

// var_dump($users);
// echo json_encode($users);

require("../db-connect.php");
$sql="SELECT id, account, name, phone, email FROM users";
$result=$conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($rows);
echo json_encode($rows);

?>