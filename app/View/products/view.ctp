<div class="row product-view">
    <div class="medium-6 columns">
    </div>
    <div class="medium-6 columns ws-xlarge product-view--content">
        <h1 class="large-leading product-view__title"><?= $product['Product']['name']; ?></h1>
        <p class="small-leading product-view__concept"><?= $product['concepts']['name']; ?></p>
        <p class="price product-view__status">
            <?php if($product['Product']['active'] == '1') { echo 'Available'; } else { echo 'Sold out'; } ?>
        </p>
        <div class="product-view__description">
            <?= $product['Product']['description']; ?>
        </div>
        <div>
            <a href="#" class="button">CONTACT ME TO BUY</a>
        </div>
    </div>
</div>



<?php //var_dump($product); ?>
