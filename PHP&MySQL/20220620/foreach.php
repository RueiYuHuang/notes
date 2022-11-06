<!doctype html>
<html lang="en">
  <head>
    <title>foreach</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <?php
      $arr=["apple", "banana", "orange", "peach"];
        // foreach($arr as $item){
        //     echo "$item<br>";
        // }

        $students=[
            [
                "name"=>"John",
                "height"=>180,
                "weight"=>83
            ],
            [
                "name"=>"Sam",
                "height"=>173,
                "weight"=>72
            ],
            [
                "name"=>"May",
                "height"=>165,
                "weight"=>50
            ],
            [
                "name"=>"Sue",
                "height"=>162,
                "weight"=>51
            ]
        ];
      ?>
      <div class="container">
        <div class="row gy-3">
            <?php foreach($students as $student): ?>
            <div class="col-md-3 col-sm-6">
                <div class="card p-3">
                    <h3><?=$student["name"]?></h3>
                    <div>height: <?=$student["height"]?>cm</div>
                    <div>weight: <?=$student["weight"]?>kg</div>
                </div>
            </div>
            <?php endforeach; ?>
      </div>
  </body>
</html>