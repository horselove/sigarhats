<h1>add new producct</h1>

<?php echo $this->Form->create('newProduct', array('type' => 'file')); ?>

	<?= $this->form->input( 'name', ['name', 'placeholder' => 'Cap name'] ); ?>
	<?= $this->form->textarea( 'description',['description', 'placeholder' => 'Description'] ); ?>
	<?=  $this->Form->input( 'Size', array( 'options' => array( '0' => 'Choose size', '55' => '55 CM', '60' => '60 CM' ) ) ); ?>
	<?=  $this->Form->input( 'Concept', array( 'options' => array( '0' => 'Choose concept', '1' => '2014', '2' => '2013' ) ) ); ?>
	<?=  $this->Form->input( 'Collection', array( 'options' => array( '0' => 'Choose Collection', '1' => 'Two-of-a-kin', '2' => 'YOU LIKE COCK' ) ) ); ?>
	<?= $this->Form->file('Document.submittedfile'); ?>
	<?= $this->form->submit('Insert product')?>
<?php echo $this->Form->end(); ?>
