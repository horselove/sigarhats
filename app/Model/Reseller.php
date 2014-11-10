<?php
class Reseller extends AppModel {

	// image
	public $actsAs = [
    'Upload.Upload' => [
      'img' => [
        'thumbnailSizes' => [
            'thumb' => '500w'
        ]
      ]
    ]
	];
}
