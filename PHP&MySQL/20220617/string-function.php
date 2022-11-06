<?php
$string="Hello world!";
?>
<h2>strlen()</h2>
<?php
echo strlen($string);
?>
<h2>str_word_count()</h2>
<?php
echo str_word_count($string);
?>
<h2>substr()</h2>
<?php
$user="Samantha";
echo substr($user, 1)."<br>";
echo substr($user, 1, 4)."<br>";
echo substr($user, -3)."<br>";
?>
<h2>strstr()</h2>
<?php
$email="john@test.com";
echo strstr($email, "@")."<br>";
echo strstr($email, "@", true)."<br>";
?>
<h2>explode</h2>
<?php
//js -> split
$string2="Hello John, how are you?";
$strArr=explode(" ",$string2);
var_dump($strArr);
echo "<br>";
// echo $strArr;
print_r($strArr);
?>
<h2>str_replace()</h2>
<?php
echo str_replace("world", "Kitty", $string);

?>
