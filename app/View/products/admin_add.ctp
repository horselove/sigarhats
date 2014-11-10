<h1>add new producct</h1>

<?php echo $this->Form->create('Product'); ?>

  <?= $this->Form->input( 'name', ['name', 'placeholder' => 'Cap name'] ); ?>
  <?= $this->Form->input( 'version', ['version', 'placeholder' => 'Cap id'] ); ?>
  <?= $this->Form->textarea( 'description',['description', 'placeholder' => 'Description', 'id' => 'js-reactor-editor'] ); ?>

  <?= $this->Form->input( 'price', ['price', 'placeholder' => 'Price of the cap'] ); ?>

  <?=  $this->Form->input( 'concept_id', [ 'option' =>  $concepts, 'empty' => 'Choose concept' ]); ?>
  <?=  $this->Form->input( 'collection_id', [ 'option' =>  $collections, 'empty' => 'Choose collection' ] ); ?>

  <?= $this->Form->input( 'active', [ 'type' => 'hidden', 'value' => '1' ] ); ?>
  <?= $this->Form->input( 'featured',  [ 'options' =>  ['0' => 'Not featured', '1' => 'featured product' ] ] ); ?>

<?= $this->element('image_upload'); ?>
<?php echo $this->Form->end(__('Insert product')); ?>
