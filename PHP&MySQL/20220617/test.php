<!doctype html>
<html lang="en">
  <head>
    <title>Test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <?php
      //echo "<hr>";
      ?>
      <div class="container">
          <h1>Hello World</h1>
        <?php echo "<h1>My First PHP</h1>"; ?>
        <h1><?php echo "My First PHP"; ?></h1>
        <h1><?="My First PHP"?></h1>
        <button class="btn btn-info"><?="click"?></button>
      </div>
  </body>
</html>