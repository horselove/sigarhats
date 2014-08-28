<?php echo $this->Html->link('Add new Product', array('action' => 'add'), array('class' => 'btn btn-default')); ?><br><br><br>
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
</tr>

<?php foreach ($products as $product): ?>
<tr>
	<td>collection.random#id -</td>
	<td><?= $product['Product']['name']; ?></td>
	<td><?= $product['Product']['description']; ?></td>
	<td><?= $product['Product']['price']; ?> €</td>
	<td><?= $product['collections']['name']; ?></td>
	<td><?= $product['concepts']['name']; ?></td>
	<td><?= $product['sizes']['name']; ?> cm</td>
	<td> YES</td>
	<td>img</td>
	<td>YES</td>
	<td>NOT YET</td>
	<td><?= $this->Html->link( 'Edit',	['action' => 'edit/', $product['Product']['id']],  	['class' => ''] );?> </trd>
</tr>

<?php endforeach;?>
</table>
<?php unset($product); ?>


