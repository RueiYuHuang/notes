<?php
require("../db-connect.php");

$sqlCategory="SELECT * FROM category";
$resultCate = $conn->query($sqlCategory);
$rowsCate = $resultCate->fetch_all(MYSQLI_ASSOC);

$category=[];
foreach($rowsCate as $row){
    // echo $row["id"].": ".$row["name"]."<br>";
    $category[$row["id"]]=$row["name"];
}
// var_dump($category);
// $category=[
//     "1"=>"Marvel",
//     "2"=>"DC Comics"
// ];
// $category["1"]; -> Marvel

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>category</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?=$row["id"]?></td>
                        <td><?=$row["name"]?></td>
                        <td><?=$category[$row["category_id"]]?></td>
                        <td><?=$row["price"]?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>