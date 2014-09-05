<?= $this->Html->link('Back to collection list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Collection'); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Collection name'] ); ?>

	<?= $this->form->submit( 'Insert collection' )?>

<?php echo $this->Form->end(); ?>
