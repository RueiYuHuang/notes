<?php
if(!isset($_GET["id"])){
    echo "沒有參數";
    exit;
}
$id=$_GET["id"];

require("../db-connect.php");
$sql="SELECT * FROM users WHERE id=$id AND valid=1";

$result = $conn->query($sql);
$userCount=$result->num_rows;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
     <div class="container">
        <div class="py-2">
            <a class="btn btn-info" href="users.php">User List</a>
        </div>
        <?php if($userCount>0):
            $row = $result->fetch_assoc();
            ?>
        <table class="table">
            <tr>
                <th>id</th>
                <td><?=$row["id"]?></td>
            </tr>
            <tr>
                <th>Account</th>
                <td><?=$row["account"]?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?=$row["name"]?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?=$row["phone"]?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?=$row["email"]?></td>
            </tr>
            <tr>
                <th>Create Time</th>
                <td><?=$row["create_time"]?></td>
            </tr>
        </table>
        <div class="py-2">
            <div class="d-flex justify-content-between">
                <a class="btn btn-info" href="user-edit.php?id=<?=$row["id"]?>">修改</a>
                <a class="btn btn-danger" href="doDelete.php?id=<?=$row["id"]?>">刪除</a>
            </div>
        </div>
        <?php else: ?>
            沒有該使用者
        <?php endif; ?>
     </div>
  </body>
</html>