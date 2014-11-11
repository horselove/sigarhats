<?= $this->Html->link('insert new story', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Back to products', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>

<table>
<tr>
  <th>langues</th>
  <th>Action</th>
</tr>
<?php foreach($storys as $story): ?>
<tr>
  <td><?= $story['Story']['langues'] ?></td>
  <td>
  <?= $this->Html->link( 'Edit', [ 'action' => 'admin_edit/', $story['Story']['id'] ], ['class' => ''] );?> /
  <?= $this->Html->link( 'Delete', [ 'action' => 'admin_delete/', $story['Story']['id'] ], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
