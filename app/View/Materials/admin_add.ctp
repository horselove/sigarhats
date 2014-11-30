<?= $this->Html->link('Back to material list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>
<h3> upload picture ONLY in 500x500px</h3>
<?php echo $this->Form->create('Material', ['type' => 'file']); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Material name'] ); ?>

	<?php echo $this->Form->input('img', [ 'type' => 'file' ]); ?>
	<?php echo $this->Form->input('img_dir', [ 'type' => 'hidden' ]); ?>

	<?= $this->Form->submit( 'Insert new material' )?>


<?php echo $this->Form->end(); ?>
