<?= $this->Html->link('Back to Concept list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Concept'); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Concept name'] ); ?>
	<?= $this->Form->text( 'description',['description', 'placeholder' => 'Description'] ); ?>
	<?= $this->form->submit( 'Insert product' )?>

<?php echo $this->Form->end(); ?>
