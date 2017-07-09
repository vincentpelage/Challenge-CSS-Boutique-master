<main class="main-product">
    <img src="images/<?= $product["picture"] ?>" alt="">
    <aside>
        <h1><?= $product["title"] ?></h1>
        <p>
            <?php if($product["price"] != $product["promo_price"]) : ?>
                <span class="old-price"><?= number_format($product["price"], 2) ?> &euro;</span>
                <span class="new-price"><?= number_format($product["promo_price"], 2) ?> &euro;</span>
            <?php else : ?>
                <span class="normal-price"><?= number_format($product["price"], 2) ?> &euro;</span>
            <?php endif; ?>
        </p>
        <p class="short-desc-aside"><?= $product["short_desc"] ?> ... <a href="#">En savoir plus</a></p>
        <button class="product-page-button" type="button" name="button">Ajouter au panier</button>
    </aside>
    <div class="long-desc-product">
        <span>Détails</span><p><?= $product["long_desc"] ?></p>
    </div>
    <div class="price-bottom-product">
        <span>Prix</span>
        <p>
            <?php if($product["price"] != $product["promo_price"]) : ?>
                <span class="old-price old-price-bottom"><?= number_format($product["price"], 2) ?> &euro;</span>
                <span class="new-price new-price-bottom"><?= number_format($product["promo_price"], 2) ?> &euro;</span>
            <?php else : ?>
                <span class="normal-price"><?= number_format($product["price"], 2) ?> &euro;</span>
            <?php endif; ?>
        </p>
    </div>
</main>
