<?= $this->Html->link('back to products', [ 'action' => 'admin_index', 'controller' => 'products'], ['class' => '']); ?><br>

<?php
  $productsId = $this->params['pass'];

  $setTime = $this->Time->convert(time(), 'Asia/Jakarta');
  $shortenTime = substr($setTime, 6, 4);
  $necklableId = $shortenTime.'-'.$productsId['0'];

  echo $necklableId;

?>
<h1>add new item</h1>
<?php echo $this->Form->create('Productitem'); ?>
<!-- $this->params['pass'] gets a array of the url after view -->
<?=  $this->Form->input( 'product_id', [ 'option' =>  $products, 'selected' => $productsId, 'empty' => 'CHOOSE SIZE' ] ); ?>

    <?=  $this->Form->input( 'size_id', [ 'option' =>  $sizes, 'empty' => 'CHOOSE SIZE' ] ); ?>

    <?=  $this->Form->input( 'reseller_id', [ 'option' =>  $resellers, 'selected'] ); ?>

    <?=  $this->Form->input( 'number', [ 'placeholder' => 'Number'] ); ?>

    <?=  $this->Form->input( 'necklable_id', ['type' => 'hidden', 'value' =>  $necklableId] ); ?>

<?php echo $this->Form->end(__('Insert product')); ?>
