<?php
require("../db-connect.php");

$min=isset($_GET["min"])?$_GET["min"]:0;
$max=isset($_GET["max"])?$_GET["max"]:9999;


// $sql="SELECT * FROM product WHERE price >= $min AND price <= $max";

$sql="SELECT product.*, category.name AS category_name FROM product
JOIN category ON product.category_id = category.id
WHERE product.price >=$min AND product.price <= $max
";

$result=$conn->query($sql);
$product_count=$result->num_rows;
$rows=$result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .object-cover{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
  </head>
  <body>
     <div class="container">
        <div class="py-2">
            <a class="btn btn-info" href="products.php">回產品列表</a>
        </div>
        <?php require("price-filter.php") ?>
        <div class="py-2">
            共 <?=$product_count?> 筆資料
        </div>
        <?php require("product-list.php"); ?>
     </div>
  </body>
</html>