<?php
if (isset($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = 1;
}



require("../db-connect.php");

$sqlAll = "SELECT * FROM users WHERE valid=1";
$resultAll = $conn->query($sqlAll);
$userCount = $resultAll->num_rows;

// $page=3;
$perPage = 4;
$start = ($page - 1) * $perPage;

// $order=$_GET["order"];
$order = isset($_GET["order"]) ? $_GET["order"] : 1;

switch ($order) {
  case 1:
    $orderType = "id ASC";
    break;
  case 2:
    $orderType = "id DESC";
    break;
  case 3:
    $orderType = "name ASC";
    break;
  case 4:
    $orderType = "name DESC";
    break;
  default:
    $orderType = "id ASC";
}

//沒有 oreder by 自然排序
$sql = "SELECT * FROM users WHERE valid=1 ORDER BY $orderType
LIMIT $start, 4";

$result = $conn->query($sql);
$pageUserCount = $result->num_rows;

//開始的筆數
$startItem = ($page - 1) * $perPage + 1;
$endItem = $page * $perPage;
if ($endItem > $userCount) $endItem = $userCount;

// $totalPage=3;
// $quotient= floor($userCount / $perPage);
// $remainder=($userCount % $perPage); //餘數

// if($remainder===0){
//   //商數
//   $totalPage=$quotient;
// }else{
//   $totalPage=$quotient+1;
// }

$totalPage = ceil($userCount / $perPage); //無條件進位

?>
<!doctype html>
<html lang="en">

<head>
  <title>Users</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="/fontawesome-free-6.1.1-web/css/all.min.css">

</head>

<body>
  <div class="container">
    <div class="py-2">
      <form action="user-search.php" method="get">
        <div class="input-group">
          <input type="text" name="search" class="form-control">
          <button type="submit" class="btn btn-info">搜尋</button>
        </div>
      </form>
    </div>
    <div class="py-2 d-flex justify-content-end align-items-center">
      <div class="me-2">排序</div>
      <div class="btn-group">
        <a href="users.php?page=<?= $page ?>&order=1" class="btn btn-primary <?php if ($order == 1) echo "active" ?>">id <i class="fa-solid fa-arrow-down-short-wide"></i></a>
        <a href="users.php?page=<?= $page ?>&order=2" class="btn btn-primary <?php if ($order == 2) echo "active" ?>">id <i class="fa-solid fa-arrow-down-wide-short"></i></a>
        <a href="users.php?page=<?= $page ?>&order=3" class="btn btn-primary <?php if ($order == 3) echo "active" ?>">name <i class="fa-solid fa-arrow-down-short-wide"></i></a>
        <a href="users.php?page=<?= $page ?>&order=4" class="btn btn-primary <?php if ($order == 4) echo "active" ?>">name <i class="fa-solid fa-arrow-down-wide-short"></i></a>
      </div>
    </div>
    <div class="py-2">第 <?= $startItem ?>-<?= $endItem ?> 筆, 共 <?= $userCount ?> 筆資料</div>
    <?php if ($pageUserCount > 0) : ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>account</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          //把資料轉換成關聯式陣列
          while ($row = $result->fetch_assoc()) : ?>
            <tr>
              <td><?= $row["id"] ?></td>
              <td><?= $row["account"] ?></td>
              <td><?= $row["name"] ?></td>
              <td><?= $row["email"] ?></td>
              <td><?= $row["phone"] ?></td>
              <td><a class="btn btn-info" href="user.php?id=<?= $row["id"] ?>">Detail</a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else : ?>
      目前沒有資料
    <?php endif; ?>
    <div class="py-2">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
          <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
            <li class="page-item
          <?php
            if ($page == $i) echo "active";
          ?>
          "><a class="page-link" href="users.php?page=<?= $i ?>&order=<?= $order ?>"><?= $i ?></a></li>
          <?php endfor; ?>
          <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
        </ul>
      </nav>
    </div>
  </div>
</body>

</html>