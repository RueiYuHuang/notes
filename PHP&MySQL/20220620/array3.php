<?php
// $student["name"]="John";
// $student["height"]=180;
// $student["weight"]=83;

// $student=array(
//     "name"=> "John",
//     "height"=>180,
//     "weight"=>83
// );

$student=[
    "name"=> "John",
    "height"=>180,
    "weight"=>83
];

// print_r($student);
echo $student["name"]."'s height is ".$student["height"]."cm, weight is ".$student["weight"]."kg.";

?>