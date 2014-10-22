<?= $this->Html->link('Back to product list', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Add new size', [ 'action' => 'admin_add' ], ['class' => 'sizes'] ); ?>
<table>
<tr>
	<th>Name of size</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>
<?php foreach($sizes as $size): ?>
<tr>
	<td><?= $size['Size']['name']; ?></td>
	<td><?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $size['Size']['id']], ['class' => ''] );?></td>
	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $size['Size']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
