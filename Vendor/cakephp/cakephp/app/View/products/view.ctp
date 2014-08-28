 <?= $this->Html->link('back',[
 	'controller' => 'products',
  	'action' => 'index']); ?>

 <h1><?= $product['Product']['product_name']; ?></h1>

 <?= $product['Product']['product_description']; ?>



<?php //var_dump($product); ?>
