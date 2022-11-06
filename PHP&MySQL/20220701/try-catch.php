<?php
$var=1;


try{
    $var->method();
    // echo $var;
}catch (Error $e){
    echo "Get an error here!!";
}
?>
<script>
    // let aa={
    //     method(){

    //     }
    // }
    // aa.methed();
</script>
<hr>
<?php

try{
    $d=0;
    $result= 90/$d;
}catch(DivisionByZeroError $e){
    echo "分母不能為 0";
}
?>
<hr>
<?php
function add(int $a, int $b){
    return $a+$b;
}
// echo add(1 ,4);
try{
    $result=add('one_cat', 'two_cat');
}catch(TypeError $e){
    echo $e->getMessage();
}
?>
<hr>
<?php

try{
    $d=0;
    $result= 90 / $d;
}catch(ArithmeticError $e){
    echo "catch in ArithmeticError<br>";
    echo $e->getMessage();
}catch(DivisionByZeroError $e){
    echo "here is a DivisionByZeroErro<br>";
    echo $e->getMessage();
}finally{
    echo "Finally program block.";
}

?>
<hr>
<?php
$score=-3;

try{
    if($score<0){
        throw new Exception("Exeption: score shouldn't be negative!", 1002);
    }
}catch(Exception $e){
    echo $e->getMessage()."<br>";
    echo $e->getCode();
}

?>
