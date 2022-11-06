<div class="row gy-4">
    <?php foreach ($rows as $row) : ?>
        <div class="col-md-4">
            <div>
                <figure class="ratio ratio-4x3 mb-2">
                    <img class="object-cover" src="/images/<?= $row["img"] ?>" alt="">
                </figure>
                <div class="text-info"><?= $row["category_name"] ?></div>
                <h2 class="mb-2 h4"><?= $row["name"] ?></h2>
                <div class="text-end text-danger">$<?= $row["price"] ?></div>
                <div class="py-2">
                    <div class="d-grid">
                        <button class="btn btn-info btn-cart"
                        data-id="<?=$row["id"]?>"
                        >加到購物車</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>