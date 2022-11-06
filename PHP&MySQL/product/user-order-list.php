<?php
require("../db-connect.php");

$sql="SELECT * FROM user_order_product ORDER BY id DESC";

$result=$conn->query($sql);

$rows=$result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Order List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <?php foreach($rows as $row): ?>
        <div class="py-2">
            <?=$row["id"]?>, <?=$row["order_time"]?>
        </div>
        <?php endforeach; ?>
      </div>
  </body>
</html>