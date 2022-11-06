<!doctype html>
<html lang="en">
  <head>
    <title>List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .icon{
            right: 10px;
            top: 10px;
            width: 20px;
            height: 20px;
            background: #ccc;
            border-radius: 50%;
        }
        .icon.active{
            background: red;
        }
    </style>
  </head>
  <body>
      <?php
      // G1202202...
        $favorite=[2, 5];

        $products=[
            [
                "id"=>1,
                "name"=>"item1"
            ],
            [
                "id"=>2,
                "name"=>"item2"
            ],
            [
                "id"=>3,
                "name"=>"item3"
            ],
            [
                "id"=>4,
                "name"=>"item4"
            ],
            [
                "id"=>5,
                "name"=>"item5"
            ]
        ];
      ?>
      <div class="container">
        <div class="row gy-3">
            <?php foreach($products as $item): ?>
            <div class="col-md-4">
                <div class="card p-3">
                    <a class="icon position-absolute 
                    <?php
                        if(in_array($item["id"], $favorite)){
                            echo "active";
                        }
                    ?>
                    "></a>
                    <h3><?=$item["name"]?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
      
  </body>
</html>