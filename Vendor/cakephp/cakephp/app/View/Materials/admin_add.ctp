<?= $this->Html->link('Back to material list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Material', ['type' => 'file']); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Material name'] ); ?>

	

	<?= $this->form->submit( 'Insert size' )?>


<?php echo $this->Form->end(); ?>
