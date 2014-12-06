<?php

class Collection extends AppModel {
  public $useTable = 'collections';
  public $name = 'Collection';
  
   public function getAll()
  {
      $collections=  $this->find('all');
      $cnt=1;
      foreach ($collections as $collection) {
          $arr[$collection['Collection']['id']]=$collection['Collection']['name'];
      }
      return $arr;
  }

}
?>
