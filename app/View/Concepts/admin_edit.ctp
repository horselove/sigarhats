<?= $this->Html->link('Back to Concept list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Concept'); ?>

	<?= $this->Form->input( 'name', ['name', 'placeholder' => 'Concept name'] ); ?>
    <?= $this->Form->textarea( 'description',['description', 'placeholder' => 'Description', 'id' => 'js-reactor-editor'] ); ?>
    <?= $this->form->submit( 'save' )?>

<?php echo $this->Form->end(); ?>
