<div class="row product-view">
    <div class="medium-6 columns">
    <?php
    foreach($product['images'] as $image) {
        $img = $image['img'];
        $imageUrl = $this->webroot.'/files/image/img/'.$image['id'].'/'.$img;
        echo '<img src="'.$imageUrl.'" />';
    }
    ?>
    </div>
    <div class="medium-6 columns ws-xlarge product-view--content">
        <h1 class="large-leading product-view__title"><?= $product['Product']['name']; ?></h1>
        <p class="small-leading product-view__concept"><?= $product['concepts']['name']; ?></p>
        <p class="price product-view__status">

          <?php $count = 0; ?>
          <?php foreach ($product['productitems'] as $productitem): ?>
            <li>
              <?php if($productitem['sold'] == '0') {
                echo 'Size: '. $product['size'][$count]['name']. ' are available in ' . $product['resellers'][$count]['name']; }
                else { echo 'Size: '. $product['size'][$count]['name']. ' is sold out'; } ?>
              <?php $count++; ?>
            </li>
          <?php endforeach; ?>

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
