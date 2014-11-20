<?php
  $products = $this->requestAction(
    ['controller' => 'products', 'action' => 'index'],
    ['limit:10', 'sort:featured', 'direction:desc', 'conditions' => ['featured' => '1']]
  );
?>

<div class="large-12 columns">
  <ul class="block-list block-list--catalogue product-list">
    <?php foreach($products as $product) :?>
      <li class="product-list__item product-list__item--hoverable">
          <?= $this->Html->link('
            <img class="product-list__item__image lazy" data-original="img/small-cap.png" alt="Sigar hats & caps product ' . $product['Product']['name'] . '">
            <span class="product-list__item__content">
              <p class="product-list__item__concept">
                  ' . $product['concepts']['name'] .'
              </p>
              <h3 class="product-list__item__title">
                  ' . $product['Product']['name'] . '
              </h3>
            </span>
          ',['controller' => 'products', 'action' => 'view/', $product['Product']['id'] ],['escape' => false]); ?>
        </li>
    <?php endforeach ;?>
  </ul>

</div>
