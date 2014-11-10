<?= $this->Html->link('insert new reseller', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Back to products', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>

<table>
<tr>
  <th>Reseller name</th>
  <th>Image</th>
  <th>Website</th>
  <th>Action</th>
</tr>
<?php foreach($resellers as $reseller): ?>
<?php
// url of image
  $img = $reseller['Reseller']['img'];
  $imageUrl = $this->Html->assetUrl('/app/webroot/files/reseller/img/'.$reseller['Reseller']['id'].'/'.$reseller['Reseller']['img'], array(
  'fullBase'   => true,
  'pathPrefix' => IMAGES_URL
  ));
?>
<tr>
  <td><?= $reseller['Reseller']['name']; ?></td>

  <?php if(empty($img)): ?>
    <td><?= $this->Html->image( 'capstandin.jpeg', ['width' => '300px'] ); ?></td>
  <?php else: ?>
    <td><?= $this->Html->image( $imageUrl ); ?></td>
  <?php endif; ?>

  <td><?= $reseller['Reseller']['url']?></td>

  <td>
  <?= $this->Html->link( 'Edit', [ 'action' => 'admin_edit/', $reseller['Reseller']['id'] ], ['class' => ''] );?> /
  <?= $this->Html->link( 'Delete', [ 'action' => 'admin_delete/', $reseller['Reseller']['id'] ], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
