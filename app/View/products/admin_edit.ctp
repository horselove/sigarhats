<h1>Edit your product</h1>

<?= $this->Html->link('Back to Product list', ['action' => 'admin_index'] ); ?>

<?= $this->Form->create('Product', array('type' => 'file')); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Cap name'] ); ?>
	<?= $this->Form->textarea( 'description',['description', 'placeholder' => 'Description', 'id' => 'js-reactor-editor'] ); ?>
	<?= $this->Form->input( 'price', ['price', 'placeholder' => 'Price of the cap'] ); ?>

	<?=  $this->Form->input( 'size_id',  [ 'option' =>  $sizes, 'empty' => 'Choose size' ]); ?>
	<?=  $this->Form->input( 'concept_id',  [ 'option' =>  $concepts, 'empty' => 'Choose concept' ]); ?>
	<?=  $this->Form->input( 'collection_id',  [ 'option' =>  $collections, 'empty' => 'Choose collection' ] ); ?>

	<?= $this->Form->input( 'active', [ 'options'  => [ '0' => 'Deactivate product', '1' => 'Activate product' ] ] ); ?>
	<?= $this->Form->input( 'featured',  [ 'options' =>  ['0' => 'Not featured', '1' => 'featured product' ] ] ); ?>
	<?= $this->Form->file( 'Document.submittedfile' ); ?>
	<?= $this->form->submit( 'Edit product' )?>

<?= $this->Form->end(); ?>
