<h1>New model</h1>

<?php echo $this->Form->create('Product'); ?>

  <?= $this->Form->input( 'name', ['name', 'placeholder' => 'Model name'] ); ?>
  <?= $this->Form->input( 'version', ['version', 'placeholder' => 'Color, fabic, etc'] ); ?>
  <?= $this->Form->textarea( 'description',['description', 'placeholder' => 'Description', 'id' => 'js-reactor-editor'] ); ?>

  <?= $this->Form->input( 'price', ['price', 'placeholder' => 'Price of the cap'] ); ?>

  <?=  $this->Form->input( 'concept_id', [ 'option' =>  $concepts, 'empty' => 'Choose concept' ]); ?>
  <?=  $this->Form->input( 'collection_id', [ 'option' =>  $collections, 'empty' => 'Choose collection' ] ); ?>

  <?= $this->Form->input( 'active', [ 'type' => 'hidden', 'value' => '1' ] ); ?>
  <?= $this->Form->input( 'featured',  [ 'options' =>  ['0' => 'Not featured', '1' => 'featured product' ] ] ); ?>


<?php echo $this->Form->end(__('Insert product')); ?>
