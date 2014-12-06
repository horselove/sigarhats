<?php
App::uses('Uploader', 'Lib');

class Image extends AppModel {
  //images rules
  public $actsAs = [
    'Upload.Upload' => [
      'img' => [
        'thumbnailSizes' => [
          'thumb' => '500w'
        ]
      ]
    ]
  ];

  public $belongsTo = [
    'Product' => [
      'className' => 'Product',
      'foreignKey' => 'product_id',
    ]
  ];

  public function getAll()
  {
      $results = $this->query('SELECT * FROM images Image WHERE feature_images = 1');
      foreach ($results as $result) {
          $arr[$result['Image']['product_id']]=$result;
      }
      return $arr;
  }
}
?>
