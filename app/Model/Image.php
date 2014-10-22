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
}
?>
