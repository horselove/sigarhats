<?= $this->Html->link('Add new model', [ 'action' => 'admin_add' ], ['class' => ''] ); ?><br>
<?= $this->Html->link('Add new item', [ 'action' => 'admin_add', 'controller' => 'productitems'] ); ?><br><br>
<?= $this->Html->link('Materials', [ 'action' => 'admin_index', 'controller' => 'materials' ], ['class' => ''] ); ?><br>
<?= $this->Html->link('Concept', [ 'action' => 'admin_index', 'controller' => 'concepts'], ['class' => '']); ?><br>
<?= $this->Html->link('Collection', [ 'action' => 'admin_index', 'controller' => 'collections'], ['class' => '']); ?><br>
<?= $this->Html->link('Sizes', [ 'action' => 'admin_index', 'controller' => 'sizes'], ['class' => '']); ?><br>
<?= $this->Html->link('Films', [ 'action' => 'admin_index', 'controller' => 'films'], ['class' => '']); ?><br>
<?= $this->Html->link('resellers', [ 'action' => 'admin_index', 'controller' => 'resellers'], ['class' => '']); ?><br>
<?= $this->Html->link('admin users', [ 'action' => 'admin_add', 'controller' => 'users'], ['class' => '']); ?><br>
<?= $this->Html->link('Story', [ 'action' => 'admin_index', 'controller' => 'storys'], ['class' => '']); ?><br>
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
    <td>
    <?php
    if($product['Product']['featured'] == '1') {
        echo $this->Html->link('Featured',
        ['action' => 'unfeatured', $productid,
        'controller' => 'products'],
        ['escape'=> false,
        'confirm'=>'Unfeature this model?' ]);
    }
    else {
        echo $this->Html->link('Not featured',
        ['action' => 'featured', $productid,
        'controller' => 'products'],
        ['escape'=> false,
        'confirm'=>'Feature this model?' ]);
    }

    ?>
    </td>
	<td><?php if($product['Product']['active'] == '1') { echo 'yes'; } else { echo 'no'; } ?></td>
	<td>todo</td>
	<td><?= $this->Html->link('New item', [ 'action' => 'admin_add', $product['Product']['id'], 'controller' => 'productitems'] ); ?> - <?= $this->Html->link( 'Edit',	['action' => 'admin_edit/', $product['Product']['id']], ['class' => ''] );?> - <?= $this->Html->link( 'Delete',	[ 'action' => 'admin_delete/', $product['Product']['id'] ], [ 'escape'=>false, 'confirm'=>'Are you sure, you want to delete this product?' ] );?>
</tr>
  <th>Necklable:</th>
  <th>Store</th>
  <th>Size</th>
  <th>Number</th>
  <th>Sold</th>
  <th>Actions</th>
<tr>
</tr>
<?php $countitem = 0 ?>

<div>
  <?php foreach ($productitems as $productitem): ?>
    <?php if ($productitem['product_id'] == $productid): ?>
    <tr>
      <td><?= $productitem['necklable_id']; ?></td>
      <td><?= $product['resellers'][$countitem]['name']; ?></td>
      <td><?= $product['size'][$countitem]['name']; ?></td>
      <td><?= $productitem['number']; ?></td>
      <td>
      <?php
        $sold = 1;
        $isSold = $productitem['sold'];
        if ( $sold == $isSold ): ?>
        <?= $this->Html->link('yes',
              ['action' => 'notsold', $productitem['id'],
              'controller' => 'productitems'],
              ['escape'=> false,
              'confirm'=>'Undo this sold item' ]); ?>
        <?php else:  ?>
        <?= $this->Html->link('no',
              ['action' => 'sold', $productitem['id'],
              'controller' => 'productitems'],
              ['escape'=> false,
              'confirm'=> 'did you just sell this item?' ]);
        ?>
      <?php endif; ?>

      </td>
      <td>
        <?= $this->Html->link( 'Edit',   ['action' => 'admin_edit/', $productitem['id'], 'controller' => 'productitems'] );?> /
        <?= $this->Html->link( 'Delete',   ['action' => 'admin_delete/', $productitem['id'], 'controller' => 'productitems'], [ 'escape'=>false, 'confirm'=>'Are you sure, you want to delete this item ?' ] );?>
      </td>
    </tr>
        <?php $countitem++; //counting array number of item ?>
    <?php endif; ?>
  <?php endforeach;?>
</div>

<?php endforeach; ?>
</table>
