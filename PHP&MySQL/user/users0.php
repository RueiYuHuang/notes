<?php
require("../db-connect.php");
$sql="SELECT * FROM users WHERE valid=1";

$result = $conn->query($sql);
$userCount=$result->num_rows;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <div class="py-2">共 <?=$userCount?> 筆資料</div>
        <?php if($userCount>0): ?>
           
        <?php
            //把資料轉換成關聯式陣列
            while($row = $result->fetch_assoc()): ?>
            <div>
            <?php //var_dump($row); ?>
            <?php echo $row["name"].", phone: ".$row["phone"].", email: ".$row["email"] ?>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
            目前沒有資料
        <?php endif; ?>
      </div>
  </body>
</html>