<!doctype html>
<html lang="en">
  <head>
    <title>for</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <?php
// for($i=0; $i<10; $i++){
//     echo "$i<br>";
// }
?>
    <div class="container">
        <div class="row gy-3 mb-4">
        <?php for($i=0; $i<10; $i++): ?>
            <div class="col-md-4">
                <div class="card p-3">
                    <button class="btn btn-info"><?=$i?></button>
                </div>
            </div>
        <?php endfor; ?>
        </div>
        <div class="row gy-3">
            <?php for($i=0; $i<10; $i++):
            echo "<div class='col-md-4'><div class='card p-3'><button class='btn btn-info'>$i</button></div></div>";
            endfor;
            ?>
        </div>
    </div>

<?php for($i=0; $i<10; $i++): ?>
    <?=$i?><br>
<?php endfor; ?>
  </body>
</html>