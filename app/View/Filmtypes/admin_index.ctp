<?= $this->Html->link('insert new', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Back to shortfilms', [ 'action' => 'admin_index', 'controller' => 'films' ], ['class' => ''] ); ?>

<table>
<tr>
  <th>Name of film type</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php foreach($filmtypes as $filmtype): ?>
<tr>
  <td><?= $filmtype['Filmtype']['name']; ?></td>
  <td><?= $this->Html->link( 'Edit', [ 'action' => 'admin_edit/', $filmtype['Filmtype']['id'] ], ['class' => ''] );?></td>
  <td><?= $this->Html->link( 'Delete', [ 'action' => 'admin_delete/', $filmtype['Filmtype']['id'] ], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
