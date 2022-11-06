<?php
$path='C:\xampp\htdocs\20220629';

$handle=opendir($path);

while($file=readdir($handle)){
    echo $file."<br>";
}

closedir($handle);

?>