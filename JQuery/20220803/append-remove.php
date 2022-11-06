<!doctype html>
<html lang="en">

<head>
    <title>Append Remove</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="py-2">
            <form class="form-inline">
                <div class="form-group mr-2">
                    <label for="" class="mr-2">姓名</label>
                    <input type="text" name="" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group mr-2">
                    <label for="" class="mr-2">電話</label>
                    <input type="tel" name="" id="tel" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group mr-2">
                    <label for="" class="mr-2">email</label>
                    <input type="email" name="" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <a class="btn btn-primary text-white" id="add"><i class="fas fa-user-plus"></i></a>
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>email</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr> -->
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $.ajax({
                method: "POST",
                url: "readUsers.php",
                dataType: "json"
            })
            .done(function(response) {
                // console.log(response)
                response.forEach((user)=>{
                    $("#tbody").append(`<tr>
                        <td>${user.name}</td>
                        <td>${user.phone}</td>
                        <td>${user.email}</td>
                        <td>
                            <button class="btn btn-danger btn-delete"
                            data-id="${user.id}"
                            ><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>`);
                })

            }).fail(function(error) {
                console.log(error);
            })
            .always(function() {

            });

        $("#add").click(function() {
            // console.log("click")
            let name = $("#name").val(),
                phone = $("#tel").val(),
                email = $("#email").val();
            // console.log(name, phone, email)


            let userData = {
                name: name, //name="name"
                phone: phone, //name="phone"
                email: email //name="email"
            }

            $.ajax({
                    method: "POST",
                    url: "insertUser.php",
                    data: userData,
                    dataType: "json"
                })
                .done(function(response) {
                    // console.log(response)
                    let status = response.status;
                    if (status === 1) {
                        let user_id=response.user_id;
                        let newContent = `<tr>
                            <td>${name}</td>
                            <td>${phone}</td>
                            <td>${email}</td>
                            <td>
                                <button class="btn btn-danger btn-delete"
                                data-id="${user_id}"
                                ><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>`;
                        $("#tbody").prepend(newContent);
                        $("#name").val("");
                        $("#tel").val("");
                        $("#email").val("");
                    } else {
                        console.log(response.msg);
                    }

                }).fail(function(error) {
                    console.log(error);
                })
                .always(function() {

                });
        })

        $("#tbody").on("click", ".btn-delete",function(){
            let id=$(this).data("id")
            console.log(id)
            // $(this).closest("tr").remove();
            let row=$(this).closest("tr");
            let data={
                id: id
            }

            //promise
            $.ajax({
                method: "POST",
                url: "deleteUser.php",
                data: data,
                dataType: "json"
            })
            .done(function(response) {
                console.log(response)
                let status=response.status;
                if(status===1){
                    //this
                    row.remove();
                }

            }).fail(function(error) {
                console.log(error);
            })
            .always(function() {

            });
        })
    </script>
</body>

</html>