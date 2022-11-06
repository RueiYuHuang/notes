<?php
require("../db-connect.php");

if(isset($_GET["product_id"])){
    $product_id=$_GET["product_id"];
    $sqlProduct="SELECT * FROM product WHERE id=$product_id";
    $resultProduct=$conn->query($sqlProduct);
    $rowProduct=$resultProduct->fetch_assoc();

    $sql="SELECT user_like_product.*, users.name FROM user_like_product
    JOIN users ON user_like_product.user_id = users.id
    WHERE user_like_product.product_id=$product_id
    ";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);

}else{

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product Liked</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>

  <body>
    
     <div class="container">
        <h1 class="py-2"><?=$rowProduct["name"]?> 的被收藏清單</h1>
        <ul>
            <?php foreach($rows as $row): ?>
            <li><a href="user-like.php?user_id=<?=$row["user_id"]?>"><?=$row["name"]?></a></li>
            <?php endforeach; ?>
        </ul>
     </div>
  </body>
</html>