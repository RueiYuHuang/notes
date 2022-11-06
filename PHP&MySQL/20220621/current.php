<?php
$arr=["one", "two", "three", "four"];

// echo current($arr);
// echo "<br>";
// next($arr);
// echo current($arr);

do{
    echo current($arr);
    echo "<br>";
}while(next($arr));

echo "finish!!";

?>