<?php
$arr1=[
    "name"=>"John",
    2,
    3
];

$arr2=[
    "name"=>"Sam",
    "age"=>18,
    4
];

?>
<h2>array_merge()</h2>
<?php
$result0=$arr1+$arr2;
print_r($result0);
echo "<hr>";
$result=array_merge($arr1, $arr2);
print_r($result);
?>
<h2>array_merge_recursive()</h2>
<?php
$result2=array_merge_recursive($arr1, $arr2);
print_r($result2);
?>
<h2>compact</h2>
<?php
$var1="green";
$var2="red";
$var3="black";
$myArray=compact("var1", "var2", "var3");
echo $myArray["var1"];
echo "<br>";
echo $myArray["var2"];
echo "<hr>";
$articles=[
    [
        "id"=>1,
        "name"=>"文章一"
    ],
    [
        "id"=>2,
        "name"=>"文章二"
    ]
];
$recipes=[
    [
        "id"=>1,
        "name"=>"食譜一"
    ],
    [
        "id"=>2,
        "name"=>"食譜二"
    ]
];
$data=compact("articles", "recipes");
// print_r($data);
print_r($data["articles"]);

?>
<h2>array_chunk</h2>
<?php
$arr=["a","b","c","d","e"];
$arrChunk=array_chunk($arr, 3);
print_r($arrChunk);

?>
<h2>array_combine</h2>
<?php
$a=["John", "Sam"];
$b=[28,32];
$c=array_combine($a, $b);
print_r($c);

?>
