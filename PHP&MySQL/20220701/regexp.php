<?php
$input="Sam loves his mother.";
$pattern="/(mo|fa)ther/";
if(preg_match($pattern, $input)){
    echo "matched!";
}else{
    echo "not matched!";
}

?>