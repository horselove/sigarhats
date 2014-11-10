<div class="row product-view">

<?php foreach($resellers as $reseller) :?>
  <?php $resllerid =  $reseller["Reseller"]['id']; ?>
  <?php if ( $resllerid != 1 ): ?>
  <?php $img =  $reseller['Reseller']['img']; ?>
  <div>
    <?php if( empty($img) ): ?>
      <?= $this->Html->image( 'capstandin.jpeg', [ 'alt' => 'Sigarhats resellers '.$reseller["Reseller"]['name'] ] ); ?>
    <?php else: ?>
      <?= // path to non thumb : /files/reseller/img/'.$resllerid.'/'.$img,
      $this->Html->image( '/files/reseller/thumb_img/'.$resllerid.'/thumb_'.$img, [ 'alt' => 'Sigarhats resellers' ] ); ?>
    <?php endif; ?>
  </div>
  <div>
    <h3><?= $reseller["Reseller"]['name']; ?></h3>
    <p><?= $reseller["Reseller"]['address']; ?></p>

    <?php $url = $reseller["Reseller"]['url']; ?>
    <?php if( !empty($url) ): ?>
        <a href="http://<?= $url ?>" target="_blank">Visit website</a>
    <?php endif; ?>
  </div>

   <?php endif; ?>
<?php endforeach ;?>

</div>

