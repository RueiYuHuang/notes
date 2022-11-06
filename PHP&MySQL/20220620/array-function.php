<h2>is_array()</h2>
<?php
    $arr=["John", 28, "sales"];
    echo (is_array($arr))? "true" : "false";
?>
<h2>list</h2>
<?php
//$arr[0]
//$name=$arr[0], ...
list($name, $age, $job)=$arr;
echo "$name is $age years old, and is a $job.";
?>
<h2>range</h2>
<?php
$r=range(2, 12, 2);
print_r($r);
?>
<h2>count</h2>
<?php
echo count($r);
?>
<h2>array_values</h2>
<?php
print_r(array_values($arr));
?>
<h2>array_count_values</h2>
<?php
$arr2=[1, "hello", "world", 1, "hello"];
print_r(array_count_values($arr2));
?>
<h2>current, next, prev</h2>
<?php
$arr3=["one", "two", "three", "four"];
echo current($arr3);
echo "<br>";
next($arr3);
echo current($arr3);
next($arr3);
next($arr3);
echo "<br>";
echo current($arr3);
reset($arr3);
echo "<br>";
echo current($arr3);


?>
