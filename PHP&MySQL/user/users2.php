<?php
require("../db-connect.php");
$sql="SELECT id, name, phone, email FROM users WHERE valid=1";

$result = $conn->query($sql);
$userCount=$result->num_rows;
$rows = $result->fetch_all(MYSQLI_ASSOC);
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
        <?php //var_dump($rows); ?>
        <div class="py-2">共 <?=$userCount?> 筆資料</div>
        <?php if($userCount>0): ?>
           <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>phone</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?=$row["id"]?></td>
                        <td><?=$row["name"]?></td>
                        <td><?=$row["email"]?></td>
                        <td><?=$row["phone"]?></td>
                    </tr>
                <?php endforeach; ?>
              </tbody>
           </table>
        <?php else: ?>
            目前沒有資料
        <?php endif; ?>
      </div>
  </body>
</html>