<?= $this->Html->link('Back', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Story', ['type' => 'file']); ?>

  <?= $this->Form->input( 'langues', ['langues', 'placeholder' => 'langues'] ); ?>
  <?= $this->Form->input( 'headline', ['headline', 'placeholder' => 'headline'] ); ?>
by typing IMAGE the a image will apear
  <?= $this->Form->textarea( 'story',['story', 'placeholder' => 'story', 'id' => 'js-reactor-editor'] ); ?>

  <?= $this->Form->submit( 'edit story' )?>

<?php echo $this->Form->end(); ?>

