<?= $this->Html->link('Back to product list', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Add new collection', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<table>
<tr>
	<th>Name of collection</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>
<?php foreach($collections as $collection): ?>
<tr>
	<td><?= $collection['Collection']['name']; ?></td>
	<td><?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $collection['Collection']['id']], ['class' => ''] );?></td>
	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $collection['Collection']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>