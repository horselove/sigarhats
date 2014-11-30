<?= $this->Html->link('Back to Concept list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>
<h1>add new concept</h1>

<?php echo $this->Form->create('Concept'); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Concept name'] ); ?>
	<?= $this->Form->textarea( 'description',['description', 'placeholder' => 'Description', 'id' => 'js-reactor-editor'] ); ?>
	<?= $this->form->submit( 'Insert concept' )?>

<?php echo $this->Form->end(); ?>
