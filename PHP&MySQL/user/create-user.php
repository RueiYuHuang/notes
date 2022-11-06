<!doctype html>
<html lang="en">
  <head>
    <title>Create User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <form action="doCreate.php" method="post">
            <div class="mb-2">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-2">
                <label for="">Phone</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <div class="mb-2">
                <label for="">email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button class="btn btn-info"
            type="submit"
            >送出</button>
        </form>
      </div>
  </body>
</html>