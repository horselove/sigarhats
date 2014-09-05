<?= $this->Html->link('Add new Product', [ 'action' => 'admin_add' ], ['class' => ''] ); ?><br>
<?= $this->Html->link('Add or edit concept', [ 'action' => 'admin_index', 'controller' => 'concepts'], ['class' => '']); ?><br>
<?= $this->Html->link('Add or edit collection', [ 'action' => 'admin_index', 'controller' => 'collections'], ['class' => '']); ?><br>
<?= $this->Html->link('Add or edit sizes', [ 'action' => 'admin_index', 'controller' => 'sizes'], ['class' => '']); ?><br>
<table>
<tr>
		<th><?= $this->Paginator->sort('Neck Lable'); ?></th>
		<th><?= $this->Paginator->sort('Name'); ?></th>
		<th><?= $this->Paginator->sort('Description'); ?></th>
		<th><?= $this->Paginator->sort('Price'); ?></th>
		<th><?= $this->Paginator->sort('Concept'); ?></th>
		<th><?= $this->Paginator->sort('Collection'); ?></th>
		<th><?= $this->Paginator->sort('Size'); ?></th>
		<th><?= $this->Paginator->sort('Featured'); ?></th>
		<th><?= $this->Paginator->sort('Image thumb'); ?></th>
		<th><?= $this->Paginator->sort('Active'); ?></th>
		<th><?= $this->Paginator->sort('sold'); ?></th>
		<th>Edit</th>
		<th>Delete</th>
</tr>

<?php foreach ($products as $product): ?>
<?php $productid = $product['Product']['id']; ?>

<tr>
	<td>collection.random#id -</td>
	<td><?= $product['Product']['name']; ?></td>
	<td><?= $product['Product']['description']; ?></td>
	<td><?= $product['Product']['price']; ?> €</td>
	<td><?= $product['collections']['name']; ?></td>
	<td><?= $product['concepts']['name']; ?></td>
	<td><?= $product['sizes']['name']; ?></td>
	<td> YES</td>
	<td>img</td>
	<td>YES</td>
	<td>NOT YET</td>
	<td><?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $product['Product']['id']],  	['class' => ''] );?> </td>
	<td><?= $this->Html->link( 'Delete',	['action' => 'admin_delete/', $product['Product']['id']],  	['class' => ''] );?> </td>
	

	<?php if( $productid == $product['user_avatars']['product_id'] ): ?>
		
	

	<?php endif; ?>
</tr>

<?php endforeach;?>
</table>
<?php unset($product); ?>


