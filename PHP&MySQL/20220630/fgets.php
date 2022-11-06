<?php
$handle=fopen("output.txt", "r");

while($line = fgets($handle)){
    echo $line."<br>";
}

fclose($handle);
?>