<?php
$resellers = $this->requestAction('/resellers/index/id:1/limit:1');

foreach ($resellers as $reseller) {
    $imageUrl = '/files/reseller/img/'.$reseller['Reseller']['id']. '/'. $reseller['Reseller']['img'];

   echo $this->Html->image($imageUrl, ['class' => '']) ;
   echo $reseller['Reseller']['address'];
}

?>
