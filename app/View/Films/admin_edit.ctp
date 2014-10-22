<?= $this->Html->link('Back to film list', [ 'action' => 'admin_index' ], ['class' => ''] ); ?>

<?php echo $this->Form->create('Film', ['type' => 'file']); ?>

    <?= $this->Form->input( 'title', ['name', 'placeholder' => 'Film title'] ); ?>
    <?= $this->Form->input( 'embed_url', ['name', 'placeholder' => 'Film title'] ); ?>
    <?php echo $this->Form->input('img', [ 'type' => 'file' ]); ?>
    <?= $this->Form->input( 'filmType', [ 'options' => $filmtypes, 'empty' => 'Choose film type' ] ); ?>
    <?= $this->Form->input( 'landingpage', [ 'options' =>  ['0' => 'Not show on landingpage', '1' => 'show on landingpage' ] ]  ); ?>
    <?= $this->Form->submit( 'Edit film' )?>

<?php echo $this->Form->end(); ?>
