<?= $this->Html->link('Back to product list', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Add new material', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<table>
<tr>
	<th>Name of size</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>
<?php foreach($materials as $material): ?>
<tr>
	<td><?= $material['Material']['name']; ?></td>
	<td><?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $material['Material']['id']], ['class' => ''] );?></td>
	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $material['Material']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>