<?php
class Material extends AppModel {

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

?>
