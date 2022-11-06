<?php
require("../db-connect.php");
session_start();

$sqlCategory="SELECT * FROM category";
$resultCategory = $conn->query($sqlCategory);
$rowsCategory = $resultCategory->fetch_all(MYSQLI_ASSOC);

// if (isset($_GET["category"])) {
//     $category = $_GET["category"];
//     // $sql = "SELECT * FROM product";
//     $sql = "SELECT product.*, category.name AS category_name FROM product
//     JOIN category ON product.category_id = category.id
//     WHERE product.category_id =$category
//     ";
// } else {
//     $category="";
//     // $sql = "SELECT * FROM product";
//     $sql = "SELECT product.*, category.name AS category_name FROM product
//     JOIN category ON product.category_id = category.id
//     ";
// }

if (isset($_GET["category"])){
    $category = $_GET["category"];
    $sqlWhere="WHERE product.category_id =$category";

}else{
    $category="";
    $sqlWhere="";
}
$sql = "SELECT product.*, category.name AS category_name FROM product
    JOIN category ON product.category_id = category.id
    $sqlWhere";

$result = $conn->query($sql);
$product_count = $result->num_rows;
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .object-cover {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .cart-count{
            width: 28px;
            height: 28px;
            background: red;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            font-size: 12px;
            right: -14px;
            top: -14px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $cart_count=isset($_SESSION["cart"])? count($_SESSION["cart"]) : 0;
        ?>
        <div class="pt-5 pb-2 text-end">
            <a class="btn btn-info position-relative" href="cart.php">購物車<span class="cart-count" id="cartCount"><?=$cart_count?></span></a>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link  <?php
                if($category=="")echo "active";
                ?>" aria-current="page" href="products.php">全部</a>
            </li>
            <?php foreach($rowsCategory as $row): ?>
            <li class="nav-item">
                <a class="nav-link
                <?php
                if($category==$row["id"])echo "active";
                ?>
                " href="products.php?category=<?=$row["id"]?>"><?=$row["name"]?></a>
            </li>
            <?php endforeach; ?>
            <!-- <li class="nav-item">
                <a class="nav-link" href="products.php?category=2">DC Comics</a>
            </li> -->
        </ul>
        <?php require("price-filter.php") ?>
        <div class="py-2">
            共 <?= $product_count ?> 筆資料
        </div>
        <?php require("product-list.php"); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        const cartBtns=document.querySelectorAll(".btn-cart");
        const cartCountElem=document.querySelector("#cartCount");

        for(let i=0; i<cartBtns.length; i++){
            cartBtns[i].addEventListener("click", function(){
                // console.log("click")
                let id=this.dataset.id;
                // console.log(id)
                $.ajax({
                method: "POST",  
                url:  "/api/add-cart.php",
                dataType: "json",
                data: { product_id: id } 
                })
                .done(function( response ) {
                    // console.log(response)
                    let cartCount=response.count;
                    // console.log(cartCount)
                    cartCountElem.innerText=cartCount;
                    alert("加入購物車成功");
                    
                }).fail(function( jqXHR, textStatus ) {
                    console.log( "Request failed: " + textStatus );
                });

            })

        }
    </script>

</body>

</html>