<?php
function divide($a, $b){
    if($b==0){
        // echo "divided by 0 error!!";
        // exit;

        // exit("divided by 0 error!!");

        // echo "divided by 0 error!!";
        // die;
        die("divided by 0 error!!");
    }else{
        $c= $a/$b;
        echo "a / b = $c<br>";
    }
}

divide(1, 0);

?>