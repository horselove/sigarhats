<?= $this->Html->link('back to film type list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Filmtype'); ?>

    <?= $this->Form->input( 'name', ['name', 'placeholder' => 'Film type name'] ); ?>
    <?= $this->form->submit( 'Insert film type' )?>

<?php echo $this->Form->end(); ?>
