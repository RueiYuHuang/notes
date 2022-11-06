<!doctype html>
<html lang="en">
  <head>
    <title>Form Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>

      <div class="container">
        <form action="do-post.php" method="post">
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
            <div class="mb-2">
                <label for="">Phone</label>
                <div class="row">
                    <div class="col">
                        <input type="tel" class="form-control"
                        name="phones[]"
                        >
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control"
                        name="phones[]"
                        >
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control"
                        name="phones[]"
                        >
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <label for="">gender</label>
                <div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="" value="male">
                    <label class="form-check-label" for="">male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="" value="female">
                    <label class="form-check-label" for="">female</label>
                </div>
                </div><!-- .mb-2 -->
                <div class="mb-2">
                    <label for="">電信商</label>
                    <select class="form-select" name="telecom" id="">
                        <option value="中華電信">中華電信</option>
                        <option value="台灣大哥大">台灣大哥大</option>
                        <option value="遠傳電信">遠傳電信</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-info"
            type="submit"
            >送出</button>
        </form>
      </div>
  </body>
</html>