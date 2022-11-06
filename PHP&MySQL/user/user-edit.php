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
     <?php if($userCount>0):
            $row = $result->fetch_assoc();
            ?>
        <div class="py-2">
            <a class="btn btn-info" href="user.php?id=<?=$row["id"]?>">取消</a>
        </div>
        <form action="doUpdate.php" method="post">
            <input name="id" type="hidden" value="<?=$row["id"]?>">
            <table class="table">
                <tr>
                    <th>id</th>
                    <td>
                        <?=$row["id"]?>
                        <!-- <input
                    name="id"
                    class="form-control-plaintext" type="text" readonly value="<?php //$row["id"] ?>"> -->
                    </td>
                </tr>
                <tr>
                    <th>Account</th>
                    <td><?=$row["account"]?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" class="form-control"
                    value="<?=$row["name"]?>"
                    ></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><input type="tel" name="phone" class="form-control"
                    value="<?=$row["phone"]?>"
                    ></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email"
                    name="email" class="form-control"
                    value="<?=$row["email"]?>"
                    ></td>
                </tr>
            </table>
            <div class="py-2">
                <button class="btn btn-info" 
                type="submit">儲存</button>
            </div>
        </form>
        <?php else: ?>
            沒有該使用者
        <?php endif; ?>
     </div>
  </body>
</html>