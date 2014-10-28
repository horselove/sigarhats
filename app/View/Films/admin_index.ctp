<?= $this->Html->link('Add new films', [ 'action' => 'admin_add', 'controller' => 'films'], ['class' => '']); ?><br>
<?= $this->Html->link('Add new film type', [ 'action' => 'admin_index', 'controller' => 'filmtypes'], ['class' => '']); ?><br>

<table>
<tr>
  <th>Title of film</th>
  <th>Type of film</th>
  <th>Active on landing page</th>
  <th>Film</th>
  <th>Image overlay</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php foreach($films as $film): ?>
<?php
  $imageUrl = $this->Html->assetUrl('/app/webroot/files/film/thumb_img/'.$film['Film']['id'].'/thumb_'.$film['Film']['img'], array(
  // note: only required if you need the
  // URL -including- http://example.com
  'fullBase'   => true,
  'pathPrefix' => IMAGES_URL
  ));
?>
<tr>
  <td><?= $film['Film']['title']; ?></td>
  <td><?= $film['filmtype']['name']; ?></td>
  <td>
  <?php
    $active = 1;
    $activeOnLandingpage = $film['Film']['landingpage'];
    if ( $active == $activeOnLandingpage ) {
      echo 'Active on landingpage';
    }
    else {
      echo 'Not active on landingpage';
    }
  ?>
  </td>
  <td>
    <iframe
    sandbox="allow-scripts allow-forms allow-same-origin"
  src="<?= $film['Film']['embed_url']; ?>">
  </iframe></td>
  <td><?= $this->Html->image( $imageUrl ); ?></td>
  <td><?= $this->Html->link( 'Edit',  ['action' => 'admin_edit/', $film['Film']['id']], ['class' => ''] );?></td>
  <td><?= $this->Html->link( 'Delete',    ['action' => 'admin_delete/', $film['Film']['id']], ['class' => ''] );?></td>
</tr>
<?php endforeach; ?>

</table>
