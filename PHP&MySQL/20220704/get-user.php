<!doctype html>
<html lang="en">

<head>
    <title>Get User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row py-3 gy-3">
            <?php for($i=1; $i<=12; $i++): ?>
            <div class="col-sm-3">
                <div class="d-grid">
                    <button class="btn btn-info"
                    data-id="<?=$i?>"
                    ><?=$i?></button>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div>
            <div>id: <span id="userId"></span></div>
            <div>name: <span id="userName"></span></div>
            <div>email: <span id="userEmail"></span></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    const btns = document.querySelectorAll(".btn")

    const userId = document.querySelector("#userId");
    const userName = document.querySelector("#userName");
    const userEmail = document.querySelector("#userEmail");

    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            let id=this.dataset.id;
            // console.log(id)
            getUser(id);
        })
    }

    function getUser(id){
        $.ajax({
            method: "POST",
            url: "/api/user.php",
            dataType: "json",
            data: {
                id: id
            }
        })
        .done(function(response) {
            console.log(response)
            userId.innerText = response.id;
            userName.innerText = response.name;
            userEmail.innerText=response.email;
        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    }

    
    </script>
</body>

</html>