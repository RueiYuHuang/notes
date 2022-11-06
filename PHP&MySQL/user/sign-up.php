<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .panel{
            max-width: 320px;
        }

    </style>
  </head>
  <body>
     <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="panel">
            <h1 class="text-center">註冊</h1>
            <form action="doSignUp.php" method="post">
                <div class="mb-2">
                    <label for="">帳號</label>
                    <input type="text" class="form-control"
                    name="account"
                    >
                </div>
                <div class="mb-2">
                    <label for="">密碼</label>
                    <input type="password" 
                    class="form-control"
                    name="password"
                    >
                </div>
                <div class="mb-2">
                    <label for="">再輸入一次密碼</label>
                    <input type="password" 
                    class="form-control"
                    name="repassword"
                    >
                </div>
                <button type="submit" class="btn btn-info">送出</button>
            </form>
        </div>
     </div>
  </body>
</html>