<?php
session_start();
if(!isset($_SESSION["cart"])){
    header("location: products.php");
}

require("../db-connect.php");


?>
<!doctype html>
<html lang="en">

<head>
    <title>Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="py-2 text-end">
            <a class="btn btn-info" href="products.php">繼續購物</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>產品名稱</th>
                    <th>單價</th>
                    <th>數量</th>
                    <th>小計</th>
                </tr>
            </thead>
            <?php
            // var_dump($_SESSION["cart"]);
            $total=0;
            foreach($_SESSION["cart"] as $item):
                $product_id=key($item);
                $sql="SELECT * FROM product WHERE id=$product_id";
                $result=$conn->query($sql);
                $row=$result->fetch_assoc();

                $subtotal=$row["price"]*current($item);

                $total+=$subtotal;
        ?>
                <tr>
                    <td><?=$row["name"]?></td>
                    <td class="text-end"><?=$row["price"]?></td>
                    <td class="text-end"><?=current($item)?></td>
                    <td class="text-end"><?=$subtotal?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" class="text-end">總計: <span><?=$total?></span></td>
            </tr>
        </table>
        <div class="py-2 text-end">
            <a class="btn btn-info" href="pay.php">結帳</a>
        </div>
    </div>
</body>

</html>