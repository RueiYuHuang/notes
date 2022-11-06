<?php
$a=99; //全域變數

function show(){
    //區域變數
    $b=10;
    //靜態變數
    static $c=1;
    // echo $a;
    echo $GLOBALS['a'];
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
    echo "<hr>";
    $GLOBALS['a']++;
    $b++;
    $c++;
}

// echo $b;
show();
show();


?>