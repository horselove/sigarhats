 <?= $this->Html->link('back',[
 	'controller' => 'products',
  	'action' => 'index']); ?>

 <h1><?= $product['Product']['name']; ?></h1>

 <?= $product['Product']['description']; ?>



<?php //var_dump($product); ?>
