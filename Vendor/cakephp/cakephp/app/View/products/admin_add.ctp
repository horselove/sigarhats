<h1>add new producct</h1>

<?php echo $this->Form->create('Product', array('type' => 'file')); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Cap name'] ); ?>
	<?= $this->Form->text( 'description',['description', 'placeholder' => 'Description'] ); ?>
	<?= $this->Form->input( 'price', ['price', 'placeholder' => 'Price of the cap'] ); ?>

	<?=  $this->Form->input( 'size_id',  [ 'option' =>  $sizes, 'empty' => 'Choose size' ]); ?>
	<?=  $this->Form->input( 'concept_id',  [ 'option' =>  $concepts, 'empty' => 'Choose concept' ]); ?>
	<?=  $this->Form->input( 'collection_id',  [ 'option' =>  $collections, 'empty' => 'Choose collection' ] ); ?>

	<?= $this->Form->input( 'active', [ 'type' => 'hidden', 'value' => '1' ] ); ?>
	<?= $this->Form->input( 'featured',  [ 'options' =>  ['0' => 'Not featured', '1' => 'featured product' ] ] ); ?>

	<?= $this->Form->input( 'image.', [ 'type' => 'file', 'multiple' => true  ] ); ?>
	<?= $this->form->submit( 'Insert product' )?>

<?php echo $this->Form->end(); ?>
