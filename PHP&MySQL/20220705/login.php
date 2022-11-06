<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <form action="doLogin.php" method="post">
            <div class="mb-3">
                <label for="">account</label>
                <input type="text"
                name="account" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">password</label>
                <input type="password" 
                name="password" class="form-control">
            </div>
            <button class="btn btn-info" type="submit">送出</button>
        </form>
      </div>
  </body>
</html>