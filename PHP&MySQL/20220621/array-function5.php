<h2>array_sum</h2>
<?php
$arr=[1,2,3,4];
echo array_sum($arr);
?>
<h2>array_unique</h2>
<?php
$arr2=[
    "a"=>"John",
    "Sam",
    "b"=>"John",
    "Mary",
    "Sam"
];
$result=array_unique($arr2);
print_r($result);

?>
<h2>array_change_key_case()
</h2>
<?php
$arr3=[
    "John"=>1,
    1=>28,
    "Sam"=>4
];
print_r(array_change_key_case($arr3, CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($arr3, CASE_LOWER));
?>
<h2>array_pad</h2>
<?php
$arr4=[1,2,3];
$result=array_pad($arr4, 6, 10);
print_r($result);
?>
<h2>in_array()</h2>
<?php
$cars=["BMW", "Toyota", "Tesla", "Honda"];
var_dump(in_array("BMW", $cars));
?>
<h2>array_search()</h2>
<?php
echo array_search("BMW", $cars);
?>
<h2>array_key_exists()</h2>
<?php
$students=[
    "Sam"=>102,
    "John"=>101
];
var_dump(array_key_exists("Sam", $students));
?>
<h2>sort</h2>
<?php
$cars2=[
    "Toyota"=>"Altis",
    "BMW"=>"530i",
    "Tesla"=>"Model S"
];

asort($cars2);
print_r($cars2);
echo "<br>";
rsort($cars2);
print_r($cars2);


?>