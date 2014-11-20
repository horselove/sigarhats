<?php
$materials = $this->requestAction(
  'materials/index/sort:id/direction:asc'
);
?>
<div class="large-12 columns">
  <ul class="block-list block-list--catalogue product-list">

    <?php foreach ($materials as $material): ?>
    <?php $id = $material['Material']['id']; ?>
    <?php $img = $material['Material']['img']; ?>
        <li class="product-list__item product-list__item--hoverable">
          <?= $this->Html->image('/files/material/thumb_img/'.$id.'/thumb_'.$img, ['alt' => 'Sigar hats and caps material '.$material['Material']['name'], 'class' => 'product-list__item__image lazy' ]); ?>
          <h3 class="product-list__item__title">
            <?= $material['Material']['name']; ?>
          </h3>
        </li>
    <?php endforeach; ?>
  </ul>
</div>
