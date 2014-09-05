<?= $this->Html->link('Back to product list', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Add new Concept', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<table>
<tr>
	<th>Name of concept</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>
<?php foreach($concepts as $concept): ?>
<tr>
	<td><?= $concept['Concept']['name']; ?></td>
	<td><?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $concept['Concept']['id']], ['class' => ''] );?></td>
	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $concept['Concept']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>