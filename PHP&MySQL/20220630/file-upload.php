<?php
require("../db-connect.php");

$sql="SELECT * FROM images";
$result=$conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>File Upload</title>
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
        <form action="doUpload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">名稱</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="myFile">
            </div>
            <button class="btn btn-info" type="submit">送出</button>
        </form>
        <div class="py-3">
          <div class="row">
            <?php foreach($rows as $row): ?>
            <div class="col-md-3">
                <div class="ratio ratio-1x1">
                  <img class="object-cover" src="upload/<?=$row["image"]?>" alt="">
                </div>
                <h3 class="text-center"><?=$row["name"]?></h3>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
  </body>
</html>