<?php

class Concept extends AppModel {
  public $useTable = 'concepts';
  public $name = 'Concept';
  
  public function getAll()
  {
      $concepts=  $this->find('all');
      $cnt=1;
      foreach ($concepts as $concept) {
          $arr[$concept['Concept']['id']]=$concept['Concept']['name'];
      }
      return $arr;
  }

}
?>
