<?php


//image and thumb
class Film extends AppModel {

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
    'filmtype' => [
      'className' => 'filmtype',
      'foreignKey' => 'filmType'
 	  ]
	];


}
