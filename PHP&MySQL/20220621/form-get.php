<!doctype html>
<html lang="en">
  <head>
    <title>Form Get</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <?php
    // if(isset($name)){
    //     var_dump($name);
    // }else{
    //     echo "name 不存在";
    // }

    ?>

      <div class="container">
        <form action="do-get.php" method="get">
            <div class="mb-2">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name"
                required
                >
            </div>
            <div class="mb-2">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email"
                required
                >
            </div>
            <button class="btn btn-info"
            type="submit"
            >送出</button>
        </form>
      </div>
  </body>
</html>