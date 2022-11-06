<!doctype html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .panel {
        max-width: 320px;
    }
    </style>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="panel">
            <h1 class="text-center">註冊</h1>

            <div class="mb-2">
                <label for="">帳號</label>
                <input type="text" class="form-control" id="account" name="account">
            </div>
            <div class="mb-2">
                <label for="">密碼</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-2">
                <label for="">再輸入一次密碼</label>
                <input type="password" class="form-control" id="repassword" name="repassword">
            </div>
            <button type="button" class="btn btn-info" id="send">送出</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    const send = document.querySelector("#send");
    const accountInput = document.querySelector("#account");
    const passwordInput = document.querySelector("#password");
    const repasswordInput = document.querySelector("#repassword");

    send.addEventListener("click", function() {
        // console.log("click")
        let account = accountInput.value;
        let password = passwordInput.value;
        let repassword = repasswordInput.value;
        $.ajax({
                method: "POST", //or GET
                url: "/api/do-sign-up.php",
                dataType: "json",
                data: {
                    account: account,
                    password: password,
                    repassword: repassword
                } //如果需要
            })
            .done(function(response) {
                console.log(response)
                let status=response.status;
                let message="";
                switch(status){
                    case 0:
                        message=response.message;
                        alert(message)
                        break;
                    case 1:
                        // message=response.message;
                        // alert(message)
                        location.href="sign-up-sucess.php"
                        break;
                }
            }).fail(function(jqXHR, textStatus) {
                console.log("Request failed: " + textStatus);
            });


    })
    </script>
</body>

</html>