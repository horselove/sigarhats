<?= $this->Html->link('insert new', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Back to shortfilms', [ 'action' => 'admin_index', 'controller' => 'films' ], ['class' => ''] ); ?>

<table>
<tr>
  <th>Name of film type</th>
  <td>Order</td>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php foreach($filmtype as $filmtypes): ?>
<tr>
  <td><?= $filmtypes['Filmtype']['name']; ?></td>
  <td><?= $filmtypes['Filmtype']['order']; ?></td>
  <td><?= $this->Html->link( 'Edit', [ 'action' => 'admin_edit/', $filmtypes['Filmtype']['id'] ], ['class' => ''] );?></td>
  <td><?= $this->Html->link( 'Delete', [ 'action' => 'admin_delete/', $filmtypes['Filmtype']['name'] ], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
