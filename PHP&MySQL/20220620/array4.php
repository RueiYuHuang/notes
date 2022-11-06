<!doctype html>
<html lang="en">
  <head>
    <title>Students</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
      <?php
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
        // print_r($students);
        // print_r($students[0]);
        // js -> arr.length
        $studentCount=count($students);
        for($i=0; $i<$studentCount; $i++){
            // print_r($students[$i]);
            // echo $students[$i]["name"]."'s height is ".$students[$i]["height"]."cm, weight is ".$students[$i]["weight"]."kg.";
            // echo "<br>";
        }

        ?>
        <div class="container">
            <div class="row gy-3">
                <?php
                //SSR
                for($i=0; $i<$studentCount; $i++): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card p-3">
                        <h3><?=$students[$i]["name"]?></h3>
                        <div>height: <?=$students[$i]["height"]?>cm</div>
                        <div>weight: <?=$students[$i]["weight"]?>kg</div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <script>
            // let students=[{
            //     name: "John",
            //     height: 180,
            //     weight: 83
            // }, {
            //     ...
            // }];
        </script>
  </body>
</html>