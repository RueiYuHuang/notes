<?php
require("../db-connect.php");

$sql="SELECT product.*, COUNT(user_like_product.product_id) AS liked_count FROM product
JOIN user_like_product ON product.id = user_like_product.product_id
GROUP BY user_like_product.product_id
";

$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <ul>
            <?php foreach($rows as $row): ?>
            <li><?=$row["name"]?>: <?=$row["liked_count"]?></li>
            <?php endforeach; ?>
        </ul>
      </div>
  </body>
</html>