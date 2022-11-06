<?php
$myArr[0][0]="00";
$myArr[0][1]="01";
$myArr[1][0]="10";
$myArr[1][1]="11";
// var_dump($myArr);
print_r($myArr);
?>
<hr>
<?php
$myArr2=[
    ["00", "01"],
    ["10", "11"]
];
print_r($myArr2);

?>
<hr>
<?php
$nameArr=["John", "Sam", "Mary"]
;
$heightArr=[180, 173, 165];
$weightArr=[83, 72, 50];
$student_data=[$nameArr, $heightArr, $weightArr];
// print_r($student_data);

echo $student_data[0][0]."'s height is ".$student_data[1][0]."cm, weight is ".$student_data[2][0]."kg.<br>";
echo $student_data[0][1]."'s height is ".$student_data[1][1]."cm, weight is ".$student_data[2][1]."kg.<br>";
?>
<script>
    // let =[{
    //     name: "John",
    //     height: 180,
    //     weight: 83
    // }]

</script>