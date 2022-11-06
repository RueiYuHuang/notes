<h2>break</h2>
<?php 
for($i=0;$i<10;$i++){
    if($i===5)break;
    echo "$i<br>";
}
?>
<h2>continue</h2>
<?php
for($i=0;$i<10;$i++){
    if($i===5)continue;
    echo "$i<br>";
}
?>