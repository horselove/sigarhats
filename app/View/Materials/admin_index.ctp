<?= $this->Html->link('Back to product list', [ 'action' => 'admin_index', 'controller' => 'products' ], ['class' => ''] ); ?>
<br>
<?= $this->Html->link('Add new material', [ 'action' => 'admin_add' ], ['class' => ''] ); ?>
<table>
<tr>
	<th>Name of size</th>
	<th>Image</th>
	<th>Delete</th>
</tr>
<?php foreach($materials as $material): ?>
<?php $id =  $material['Material']['id']; ?>
<?php $img =  $material['Material']['img']; ?>
<tr>
	<td><?= $material['Material']['name']; ?></td>
	<td><?= $this->Html->image( '/files/material/thumb_img/'.$id.'/thumb_'.$img, ['alt' => $material['Material']['name'].' Material Sigarhats'] ) ?></td>

	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $material['Material']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
