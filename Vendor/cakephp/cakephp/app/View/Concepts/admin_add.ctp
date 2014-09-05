<?= $this->Html->link('Back to Concept list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>
<h1>add new concept</h1>

<?php echo $this->Form->create('Concept'); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Concept name'] ); ?>
	<?= $this->Form->text( 'description',['description', 'placeholder' => 'Description'] ); ?>
	<?= $this->form->submit( 'Insert product' )?>

<?php echo $this->Form->end(); ?>
