<?php
class Material extends AppModel {
	// image 
    public $actsAs = [
        'Upload.Upload' => [
            'img' => [
                'fields' => [
                    'dir' => 'img_dir'
                ]
            ],
            'thumbnailSizes' =>[
                'thumb' => '100x100'
            ],
            'thumbnailMethod' => 'php'
        ]
    ];

}

?>