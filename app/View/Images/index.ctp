<?php foreach($images as $image): ?>
    <?php if($image['Image']['product_id'] == $this->params['pass']['0']): ?>
        <?php $imageUrl = '/files/image/img/'.$image['Image']['id']. '/'. $image['Image']['img']; ?>
        <?= $this->Html->image($imageUrl ) ; ?>
    <?php endif; ?>
<?php endforeach; ?>
