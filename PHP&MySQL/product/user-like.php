<?php
require("../db-connect.php");

if(isset($_GET["user_id"])){
    $user_id=$_GET["user_id"];
    $sqlUser="SELECT * FROM users WHERE id=$user_id";
    $resultUser=$conn->query($sqlUser);
    $rowUser=$resultUser->fetch_assoc();

    $sql="SELECT user_like_product.*, product.name FROM user_like_product
    JOIN product ON user_like_product.product_id = product.id
    WHERE user_like_product.user_id=$user_id
    ";
    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);

}else{

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Like</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
     <div class="container">
        <h1 class="py-2"><?=$rowUser["name"]?> 的收藏清單</h1>
        <ul>
            <?php foreach($rows as $row): ?>
            <li><a href="product-liked.php?product_id=<?=$row["product_id"]?>"><?=$row["name"]?></a></li>
            <?php endforeach; ?>
        </ul>
     </div>
  </body>
</html>