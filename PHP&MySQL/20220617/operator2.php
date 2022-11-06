<?php
$a=77;
$b=28;
var_dump($a==$b);
echo "<br>";
var_dump($a<>$b);
echo "<br>";
var_dump($a!=$b);
?>
<h2>條件運算子</h2>
<?php
$a=10;
$b=($a>0) ? "Positive" : "Negative";
echo $b;
?>
<h2>組合比較子</h2>
<?php
$a=5;
$b=10;
$c=$a<=>$b;
echo $c;
?>
<h2>邏輯運算子</h2>
<?php
$a=10;
$b=5;
var_dump($a==10 and $b==5);
echo "<br>";
var_dump($a==10 && $b==5);
echo "<br>";
?>
<hr>
<?php
var_dump($a==10 or $b==10);
echo "<br>";
var_dump($a==10 || $b==10);
echo "<br>";
?>
<hr>
<?php
$x=false || true;
var_dump($x);
echo "<br>";
$y=false or true;
var_dump($y);
?>

