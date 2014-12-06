<?php
$productsId = $this->params['pass'];

echo $this->Form->create('Image', ['type' => 'file']);

  echo $this->Form->input('product_id', ['label' => 'Model', 'value' => $productsId, 'id' => 'productId']);
echo 'Featured '.$this->Form->checkbox('feature_images', array('label' => 'Featured','hiddenField' => false));
  echo $this->Form->input('title', ['placeholder' => 'Images title']);
  

  echo $this->Form->file('img', ['id' => 'image', 'class' => 'hidden']);
  

echo $this->Form->end(__('Insert image'));
?>

<?= $this->element('viewimages'); ?>
