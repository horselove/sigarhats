<?= $this->Html->link('Back', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Reseller', ['type' => 'file']); ?>

  <?= $this->Form->input( 'name', ['name', 'placeholder' => 'name of reseller'] ); ?>
  <?= $this->Form->textarea( 'address',['address', 'placeholder' => 'Address of the reseller', 'id' => 'js-reactor-editor'] ); ?>
  you can inore image upload and website if needed
  <?php echo $this->Form->input('img', [ 'type' => 'file' ]); ?>
  Remember no http://www
  <?= $this->Form->input( 'url', [ 'url', 'placeholder' => 'url of the website'] ); ?>

  <?= $this->Form->submit( 'edit reseller' )?>

<?php echo $this->Form->end(); ?>