<?= $this->Html->link('Back', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Story', ['type' => 'file']); ?>

  <?= $this->Form->input( 'langues', ['langues', 'placeholder' => 'langues'] ); ?>
  <?= $this->Form->input( 'headline', ['headline', 'placeholder' => 'headline'] ); ?>
  <?= $this->Form->textarea( 'story',['story', 'placeholder' => 'story', 'id' => 'js-reactor-editor'] ); ?>

  <?= $this->Form->submit( 'Save' )?>

<?php echo $this->Form->end(); ?>

