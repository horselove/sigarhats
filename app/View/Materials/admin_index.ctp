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
	<?php  
		$imageUrl = $this->Html->assetUrl('/app/webroot/files/material/thumb_img/'.$material['Material']['dir'].'/thumb_'.$material['Material']['img'], array(
        // note: only required if you need the
        // URL -including- http://example.com
        'fullBase'   => true,
        'pathPrefix' => IMAGES_URL
    ));
 ?>
<tr>
	<td><?= $material['Material']['name']; ?></td>
	<td><?= $this->Html->image( $imageUrl, ['alt' => $material['Material']['name'].' Material Sigarhats'] ) ?></td>
	
	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $material['Material']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>