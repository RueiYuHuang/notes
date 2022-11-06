<?php
session_start();

// $cart=[
//     [
//         "product_id"=>1,
//         "amount"=>1
//     ]
// ];

// $cart=[
//     [
//         //product_id => amount
//         1=>1
//     ],
//     [
//         2=>2
//     ],
//     [
//         4=>1
//     ]
// ];

$product_id=$_POST["product_id"];

$newItem=[
    $product_id=>1
];

if(isset($_SESSION["cart"])){
    $cart=$_SESSION["cart"];
}else{
    $cart=[];
}

$product_exist=0; //flag
foreach($cart as $value){
    if(array_key_exists($product_id,$value )){
        $product_exist=1;
        break;
    }
}

if($product_exist==0){
    array_push($cart, $newItem);
}


$_SESSION["cart"]=$cart;

$data=[
    "count"=>count($cart)
];

echo json_encode($data);
?>