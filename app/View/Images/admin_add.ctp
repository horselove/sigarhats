<?php
  echo $this->Form->create('Image', ['url' => ['controller' => 'images', 'action' => 'admin_add', 'ext' => 'json'], 'type' => 'file', 'id' => 'imageform']);
  echo $this->Form->file('file', ['id' => 'image', 'class' => 'hidden']);
  echo $this->Form->hidden('product_id', ['value' => Hash::get($_GET, 'foreign_id')]);
  echo $this->Form->label('', 'Change photo', ['for' => 'image', 'class' => 'button button--medium raised tertiary']);
  echo $this->Form->end();
?>

