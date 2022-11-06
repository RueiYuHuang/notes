<?php
$fruit=["apple","banana","orange","peach"];
print_r($fruit);
?>
<h2>array_shift</h2>
<?php
// arr.shift() ->js
array_shift($fruit);
print_r($fruit);
?>
<h2>array_unshift</h2>
<?php
array_unshift($fruit, "apple");
print_r($fruit);
?>
<h2>array_pop</h2>
<?php
array_pop($fruit);
print_r($fruit);
?>
<h2>array_push</h2>
<?php
array_push($fruit, "mango", "melon");
print_r($fruit);
?>
<h2>array_slice</h2>
<?php
$arrNew=array_slice($fruit, 0, 4);
print_r($arrNew);
?>
<h2>array_splice</h2>
<?php
array_splice($fruit, 1, 2, "strawberry");
print_r($fruit);
?>
<h2>array_rand</h2>
<?php
$fruitRand=array_rand($fruit, 2);
// print_r($fruitRand);
foreach($fruitRand as $index){
    echo $fruit[$index]."<br>";
}
?>
<h2>array_flip</h2>
<?php
$cars=["BMW", "Toyota", "Tesla"];
$result=array_flip($cars);
print_r($result);

?>
