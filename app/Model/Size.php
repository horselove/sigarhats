<?php

class Size extends AppModel {
  public $useTable = 'sizes';
  public $name = 'Size';
  
  public function getAll()
  {
      $sizes=  $this->find('all');
      $cnt=1;
      foreach ($sizes as $size) {
          $arr[$size['Size']['id']]=$size['Size']['name'];
      }
      return $arr;
  }

}
?>
