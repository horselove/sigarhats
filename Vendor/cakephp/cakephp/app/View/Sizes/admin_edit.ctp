<?= $this->Html->link('Back to size list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Size'); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Size name'] ); ?>

	<?= $this->form->submit( 'Edit size' )?>

<?php echo $this->Form->end(); ?>
