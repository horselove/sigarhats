<?php
  $images = $this->requestAction(
    ['controller' => 'images', 'action' => 'admin_index'],
    ['sort:id', 'direction:DESC', 'limit:10000']
  );
?>
<table>

<tr>
    <th>Title of image</th>
    <th>Image</th>
    <th>Delete</th>
</tr>
<?= $productId = $this->params['pass']['0'] ?>
<?php foreach($images as $image): ?>

    <?php if($image['Image']['product_id'] == $productId): ?>
    <?php $imageUrl = '/files/image/img/'.$image['Image']['id']. '/'. $image['Image']['img']; ?>
    <tr>
      <td><?= $image['Image']['title'] ?></td>
      <td><?= $this->Html->image($imageUrl, ['style' => 'width:300px']) ; ?></td>
      <td><?= $this->Html->link( 'Delete',
      ['action' => 'admin_delete/',
       'controller' => 'images',
        $image['Image']['id']],
      ['class' => ''] ); ?></td>
    </tr>
    <?php endif; ?>
<?php endforeach; ?>
</table>
