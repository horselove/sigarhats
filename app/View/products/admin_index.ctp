<?= $this->Html->link('Add new model', [ 'action' => 'admin_add' ], ['class' => ''] ); ?><br><br>
<?= $this->Html->link('Add new item', [ 'action' => 'admin_add', 'controller' => 'productitems'] ); ?><br><br>
<?= $this->Html->link('Add or edit materials', [ 'action' => 'admin_index', 'controller' => 'materials' ], ['class' => ''] ); ?><br><br>
<?= $this->Html->link('Add or edit concept', [ 'action' => 'admin_index', 'controller' => 'concepts'], ['class' => '']); ?><br>
<?= $this->Html->link('Add or edit collection', [ 'action' => 'admin_index', 'controller' => 'collections'], ['class' => '']); ?><br>
<?= $this->Html->link('Add or edit sizes', [ 'action' => 'admin_index', 'controller' => 'sizes'], ['class' => '']); ?><br><br>
<?= $this->Html->link('Add or edit films', [ 'action' => 'admin_index', 'controller' => 'films'], ['class' => '']); ?><br>
<?= $this->Html->link('Add or edit resellers', [ 'action' => 'admin_index', 'controller' => 'resellers'], ['class' => '']); ?><br>

<?=  $this->Html->link('Log out', [ 'controller' => 'users', 'action' => 'logout' ]); ?>

<table>
<tr>
    <th><?= $this->Paginator->sort('Version'); ?></th>
		<th><?= $this->Paginator->sort('Name'); ?></th>
		<th><?= $this->Paginator->sort('Price'); ?></th>
		<th><?= $this->Paginator->sort('Concept'); ?></th>
		<th><?= $this->Paginator->sort('Collection'); ?></th>
		<th><?= $this->Paginator->sort('Featured'); ?></th>
		<th><?= $this->Paginator->sort('Active'); ?></th>
		<th><?= $this->Paginator->sort('Available'); ?></th>
		<th>ACTIONS</th>
</tr>

<?php foreach ($products as $product): ?>

  <?php $productid = $product['Product']['id']; ?>
  <?php $productitems = $product['productitems']; ?>

<?php //getting information of items ?>



<tr>
  <td><?= $product['Product']['version']; ?></td>
	<td><?= $product['Product']['name']; ?></td>
	<td><?= $product['Product']['price']; ?> €</td>
  <td><?= $product['concepts']['name']; ?></td>
	<td><?= $product['collections']['name']; ?></td>
	<td>YES</td>
	<td><?php if($product['Product']['active'] == '1') { echo 'yes'; } else { echo 'no'; } ?></td>
	<td>SDS</td>
	<td><?= $this->Html->link('New item', [ 'action' => 'admin_add', $product['Product']['id'], 'controller' => 'productitems'] ); ?> - <?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $product['Product']['id']], ['class' => ''] );?> - <?= $this->Html->link( 'Delete',	[ 'action' => 'admin_delete/', $product['Product']['id'] ], [ 'escape'=>false, 'confirm'=>'Are you sure, you want to delete this product?' ] );?>
</tr>
  <th>Necklable:</th>
  <th>Date</th>
  <th>Size</th>
  <th>Owner</th>
  <th>Actions</th>
<tr>

</tr>

<div>
  <?php foreach ($productitems as $productitem): ?>
    <?php if ($productitem['product_id'] == $productid): ?>
    <tr>
      <td><?= $productitem['necklable_id']; ?></td>
      <td><?= $productitem['created']; ?></td>
      <td><?= $productitem['size_id']; ?></td>
      <td>yo</td>
      <td>
        <?= $this->Html->link( 'Edit',   ['action' => 'admin_edit/', $productitem['id'], 'controller' => 'productitems'] );?> /
        <?= $this->Html->link( 'Delete',   ['action' => 'admin_delete/', $productitem['id'], 'controller' => 'productitems'], [ 'escape'=>false, 'confirm'=>'Are you sure, you want to delete this item ?' ] );?>
      </td>
    </tr>
    <?php endif; ?>
  <?php endforeach;?>
</div>

<?php endforeach; ?>
</table>
