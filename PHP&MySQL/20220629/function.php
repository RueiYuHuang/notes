<?php
function myEcho(){
    echo "my echo";
}
myEcho();
?>
<hr>
<?php
function addNum($a, $b=1){
    $c= $a+$b;
    echo $c."<br>";
}
addNum(3,6);
addNum(3);
?>
<hr>
<?php
function add2(&$x, $y){
    $x+=$y;
    $y++;
}
$a=10;
$b=2;
add2($a, $b);

echo "Now a is $a, b is $b.";

?>
<hr>
<?php
function sum(){
    $i=func_num_args();
    echo "Have $i arguments.<br>";

    $result=0;
    $input=func_get_args();
    // var_dump($input);
    foreach($input as $num){
        $result+=$num;
    }
    echo $result;
}

sum(1,2,3,4, 5);

?>
<hr>
<?php
$note="global note";
function notify(){
    $note="local note";
    $global_note=$GLOBALS["note"];
    echo "$note<br>";
    echo "$global_note";
}
notify();

?>
<hr>
<?php
function static_example(){
    $a=0;
    static $b=0;
    echo "a = $a, b=".$b++;
    echo "<br>";
}
static_example();
static_example();
static_example();

?>
<hr>
<?php
function sum2($a, $b){
    function myHello(){
        echo "Hello here!<br>";
    }
    myHello();
    echo $a+$b."<br>";
}
sum2(2,5);
myHello();
?>