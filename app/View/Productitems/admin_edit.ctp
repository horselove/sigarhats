<?= $this->Html->link('back to products', [ 'action' => 'admin_index', 'controller' => 'products'], ['class' => '']); ?><br>

<h1>add new item</h1>
<?php echo $this->Form->create('Productitem'); ?>
<!-- $this->params['pass'] gets a array of the url after view -->
<?=  $this->Form->input( 'product_id', [ 'option' =>  $products, 'selected', 'empty' => 'CHOOSE SIZE' ] ); ?>

    <?=  $this->Form->input( 'size_id', [ 'option' =>  $sizes, 'empty' => 'CHOOSE SIZE' ] ); ?>

    <?=  $this->Form->input( 'reseller_id', [ 'option' =>  $resellers] ); ?>

    <?=  $this->Form->input( 'necklable_id', ['type' => 'hidden', 'value' =>  'adas'] ); ?>

    <?=  $this->Form->input( 'number', [ 'placeholder' => 'Number'] ); ?>

<?php echo $this->Form->end(__('Save')); ?>
