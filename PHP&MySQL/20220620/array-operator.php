<?php
$a=["0", "1", "2"];
$b=[0,1,2];

echo var_dump($a==$b);
echo "<br>";
echo var_dump($a===$b);
echo "<br>";

?>
<hr>
<?php
$c=[
    "John"=>[
        "John", 1
    ],
    "Sam"=>[
        "Sam", 2
    ]
];
$d=[
    "John"=>[
        "John", 3
    ],
    "Mary"=>[
        "Mary", 4
    ]
];
$e=$c+$d;
print_r($e);


?>