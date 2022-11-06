<!doctype html>
<html lang="en">

<head>
    <title>XSS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3>我要留言</h3>
        <div class="mb-2">
            <label for="">暱稱</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">內容</label>
            <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
        </div>
        <button class="btn btn-info">送出</button>
        <div class="pt-4">
            <h3>留言列表</h3>
            <div>
                <h4>Joe</h4>
                <div>
                    Hello World!!
                    <script>
                        alert("hello");
                    </script>
                </div>
            </div>
        </div>
    </div>

</body>

</html>