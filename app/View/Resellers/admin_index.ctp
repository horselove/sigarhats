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
<?php $img =  $reseller['Reseller']['img']; ?>
<?php $resllerid =  $reseller["Reseller"]['id']; ?>

<tr>
  <td><?= $reseller['Reseller']['name']; ?></td>

  <?php if(empty($img)): ?>
    <td><?= $this->Html->image( 'capstandin.jpeg', ['width' => '300px', 'alt' => 'Sigarhats resellers '.$reseller["Reseller"]['name'] ] ); ?></td>
  <?php else: ?>
   <td><?= $this->Html->image( '/files/reseller/thumb_img/'.$resllerid.'/thumb_'.$img, ['width' => '300px', 'alt' => 'Sigarhats resellers' ] ); ?>
  </td>
  <?php endif; ?>
  <td>
  <?php $url = $reseller["Reseller"]['url']; ?>
  <?php if( !empty($url) ): ?>
      <a href="http://<?= $url ?>" target="_blank">Visit website</a>
  <?php else: ?>
    no website
  <?php endif; ?>
  </td>
  <td>
  <?= $this->Html->link( 'Edit', [ 'action' => 'admin_edit/', $reseller['Reseller']['id'] ], ['class' => ''] );?> /
  <?php if ( $resllerid != 1 ): ?>
    <?= $this->Html->link( 'Delete', [ 'action' => 'admin_delete/', $reseller['Reseller']['id'] ], ['class' => ''] );?></td>
  <?php endif; ?>

</tr>
<?php endforeach; ?>

</table>
