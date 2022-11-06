<?php
$handle=fopen("output.txt", "r");

// echo fgetc($handle);
while($c = fgetc($handle)){
    echo $c."<br>";
}

fclose($handle);

?>