<?php 
/**
*	Full product view
*/
?>

<?php foreach ($products as $product): ?>

<?=
/*
 	 $this->Html->image(['controller' => 'images', 'action' => 'view', $product['products']['product_id'], 'products_img'], [
                                    "alt" => $product['products_img']['img_title'] . ' ' . 'cover photo',
                                    'url' => ['action' => 'view', $product['products']['product_id']]
                                ]); ?>
*/

 $this->Html->link(
 	$product['Product']['name'], 
 	['action' => 'view/', $product['Product']['id']], 
 	['class' => '']
 ); 

?><br>

<?php endforeach; ?>

<?php unset($product); ?>

<?=  $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout')); ?> 
